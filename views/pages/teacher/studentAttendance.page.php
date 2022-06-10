<?php
include './views/components/BasicHeader.php';
include './controllers/TeacherController.php';

basicHeader("Student Attendance");

$msg = "";
$studentList = [];
$class = "";
$type = "";

$mySubjectClass = "true";
$anyReplacementClass = "false";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['Subject_Class_Attendance'])) {
        
        if (!empty($_POST['class'])) {

            $class = $_POST['class'];
            $type = "My subject class";
            
            $teacherController = new TeacherController();
            $studentList = $teacherController->findStudents();

            $msg = "List of student " . $class . " successfully listed";

        } else {

            $msg = "Please determine the class for checking student attendance today";

        }

    } else if (isset($_POST['Replace_Class_Attendance'])) {
        
        if (!empty($_POST['class'])) {

            $class = $_POST['class'];
            $type = "Replacement class";
            
            $teacherController = new TeacherController();
            $studentList = $teacherController->findStudents();

            $msg = "List of student " . $class . " successfully listed";

        } else {

            $msg = "Please determine the class for checking student attendance today";

        }

    } else if (isset($_POST['Save_Attendance'])) {
        
        $msg = "The attendance for the " . $_POST['class'] . " (" . $_POST['type'] . ") successfully saved";
        
    }

}

?>
<section class="container">
    <div class="columns">
        <div class="column col-6 col-mx-auto">
            <br><br>
            <?php
            if (!empty($msg)) {

                ?>
                <div x-data="{ open: true }" x-show="open" x-transition.duration.500ms>
                <div class="toast toast-primary">
                    <button class="btn btn-clear float-right" x-on:click="open = ! open"></button>
                    <?php echo $msg; ?>
                </div>
                <br><br>
                </div>
                <?php

            }
            ?>
            <div x-data="{
                mySubjectClass: <?php echo $mySubjectClass ?>,
                anyReplacementClass: <?php echo $anyReplacementClass ?>,
                changeTab() {
                    this.mySubjectClass = ! this.mySubjectClass;
                    this.anyReplacementClass = ! this.anyReplacementClass;
                }
            }">
                <ul class="tab tab-block">
                    <li x-bind:class="mySubjectClass ? 'tab-item active' : 'tab-item'">
                        <a x-on:click="changeTab()" style="cursor:pointer;">For my subject class</a>
                    </li>
                    <li x-bind:class="anyReplacementClass ? 'tab-item active' : 'tab-item'">
                        <a x-on:click="changeTab()" style="cursor:pointer;">For any replacement class</a>
                    </li>
                </ul>
                <br><br>
                <form action="/teacher.php?tab=my-class&section=student-attendance" method="post" class="form-horizontal" x-show="mySubjectClass">
                    <div class="form-group">
                        <div class="col-3">
                            <label for="classes" class="form-label">Choose my subject class</label>
                        </div>
                        <div class="col-9">
                            <select name="class" id="classes" on:change={chosingClass} class="form-select" <?php echo (isset($_POST['Subject_Class_Attendance']) || isset($_POST['Replace_Class_Attendance'])) ? 'disabled' : ''; ?>>
                                <option value="">Choose an option</option>
                                <option value="Mathematics Form 1-3, Monday 8.00 PM">Mathematics Form 1-3, Monday 8.00 PM</option>
                                <option value="Additional Mathematics Form 4-5, Tuesday 9.00 PM">Additional Mathematics Form 4-5, Tuesday 9.00 PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit" name="Subject_Class_Attendance" value="true" <?php echo (isset($_POST['Subject_Class_Attendance']) || isset($_POST['Replace_Class_Attendance'])) ? 'disabled' : ''; ?>>Apply</button>
                    </div>
                </form>
                <form action="./teacher.php?tab=my-class&section=student-attendance" method="post" class="form-horizontal" x-show="anyReplacementClass">
                    <div class="form-group">
                        <div class="col-3">
                            <label for="classes" class="form-label">Choose replacement class</label>
                        </div>
                        <div class="col-9">
                            <select name="class" id="classes" on:change={chosingClass} class="form-select" <?php echo (isset($_POST['Subject_Class_Attendance']) || isset($_POST['Replace_Class_Attendance'])) ? 'disabled' : ''; ?>>
                                <option value="">Choose an option</option>
                                <option value="Mathematics (Form 1-3), Mon 8.00 PM">Mathematics (Form 1-3), Mon 8.00 PM</option>
                                <option value="Additional Mathematics (Form 4-5), Tue 9.00 PM">Additional Mathematics (Form 4-5), Tue 9.00 PM</option>
                            </select>
                        </div>
                    </div>
                    <div class="float-right">
                        <button class="btn btn-primary" type="submit" name="Replace_Class_Attendance" value="true" <?php echo (isset($_POST['Subject_Class_Attendance']) || isset($_POST['Replace_Class_Attendance'])) ? 'disabled' : ''; ?>>Apply</button>
                    </div>
                </form>
            </div>
            <br><br><br>
            <?php
            if (!empty($studentList) && !empty($class)) {
                
            ?>
            <h3 class="text-center"><?php echo $class; ?></h3>
            <p class="text-center"><strong><?php echo $type; ?></strong></p>
            <div class="divider"></div>
            <br>
            <form action="./teacher.php?tab=my-class&section=student-attendance" method="post">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>IC Number</th>
                            <th>Attend</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($studentList as $student) {
                        ?>
                        <tr>
                            <td><?php echo $count; ?></td>
                            <td><?php echo $student['name']; ?></td>
                            <td><?php echo $student['icNum'] ?></td>
                            <td>
                                <div class="form-group">
                                    <label class="form-switch">
                                    <input type="checkbox" name="studentId" value="$count">
                                    <i class="form-icon"></i>
                                    </label>
                                </div>
                            </td>
                        </tr> 
                        <?php
                        $count += 1;
                        }
                        ?>
                    </tbody>
                </table>
                <input type="hidden" name="dateOfClass" value="<?php echo date('l Y-m-d'); ?>">
                <input type="hidden" name="class" value="<?php echo $class; ?>">
                <input type="hidden" name="type" value="<?php echo $type; ?>">
                <br>
                <div class="float-right">
                    <a href="./teacher.php?tab=my-class&section=student-attendance" class="btn">Cancel</a>
                    <button class="btn btn-primary" type="submit" name="Save_Attendance" value="true">Save</button>
                </div>
            </form>            
            <?php

            }
            ?>
            <br><br><br>
        </div>
    </div>
</section>