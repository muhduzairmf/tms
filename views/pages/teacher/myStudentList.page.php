<?php
include './views/components/BasicHeader.php';
include './controllers/TeacherController.php';
basicHeader("My Student List");

$teacherController = new TeacherController();

$allStudents = $teacherController->findAllStudent();

?>
<br>
<section class="container">
    <div class="columns">
        <div class="column col-10 col-mx-auto">
        <br>
        <h5 class="text-center"><strong>Mathematics Standard 4-6</strong></h5>
        <hr><br>   
        <table class="table table-scroll table-striped table-hover">
            <thead>
                <tr>
                    <th class="px-2">#</th>
                    <th class="px-2">Full Name</th>
                    <th class="px-2">IC Number</th>
                    <th class="px-2">Age</th>
                    <th class="px-2">Phone Number</th>
                    <th class="px-2">Email</th>
                    <th class="px-2">Category of study</th>
                    <th class="px-2">Parent Name</th>
                    <th class="px-2">Parent Phone Number</th>
                    <th class="px-2">Home Address</th>
                    <th class="px-2">School Address</th>
                    <th class="px-2">Subject to take</th>
                </tr>
            </thead>
        <?php
        $count = 1;
        foreach ($allStudents as $student) {
            if ($student['category'] != "Standard 4-6") {
                continue;
            }
        ?>
            <tbody>
                <tr>
                    <td class="px-2"><?php echo $count; ?></td>
                    <td class="px-2"><?php echo $student['name']; ?></td>
                    <td class="px-2"><?php echo $student['icNum']; ?></td>
                    <td class="px-2"><?php echo $student['age']; ?></td>
                    <td class="px-2"><?php echo $student['phoneNumber']; ?></td>
                    <td class="px-2"><?php echo $student['email']; ?></td>
                    <td class="px-2"><?php echo $student['category']; ?></td>
                    <td class="px-2"><?php echo $student['parentName']; ?></td>
                    <td class="px-2"><?php echo $student['parentPhoneNum']; ?></td>
                    <td class="px-2"><?php echo $student['homeAddr']; ?></td>
                    <td class="px-2"><?php echo $student['schoolAddr']; ?></td>
                    <td class="px-2"><?php echo $student['subjects']; ?></td>
                </tr>
            </tbody>
        <?php
            $count += 1;
        }
        ?>
        </table>
        <br><br><br>
        <h5 class="text-center"><strong>Mathematics Form 1-3</strong></h5>
        <hr><br>   
        <table class="table table-scroll table-striped table-hover">
            <thead>
                <tr>
                    <th class="px-2">#</th>
                    <th class="px-2">Full Name</th>
                    <th class="px-2">IC Number</th>
                    <th class="px-2">Age</th>
                    <th class="px-2">Phone Number</th>
                    <th class="px-2">Email</th>
                    <th class="px-2">Category of study</th>
                    <th class="px-2">Parent Name</th>
                    <th class="px-2">Parent Phone Number</th>
                    <th class="px-2">Home Address</th>
                    <th class="px-2">School Address</th>
                    <th class="px-2">Subject to take</th>
                </tr>
            </thead>
        <?php
        $count = 1;
        foreach ($allStudents as $student) {
            if ($student['category'] != "Form 1-3") {
                continue;
            }
        ?>
            <tbody>
                <tr>
                    <td class="px-2"><?php echo $count; ?></td>
                    <td class="px-2"><?php echo $student['name']; ?></td>
                    <td class="px-2"><?php echo $student['icNum']; ?></td>
                    <td class="px-2"><?php echo $student['age']; ?></td>
                    <td class="px-2"><?php echo $student['phoneNumber']; ?></td>
                    <td class="px-2"><?php echo $student['email']; ?></td>
                    <td class="px-2"><?php echo $student['category']; ?></td>
                    <td class="px-2"><?php echo $student['parentName']; ?></td>
                    <td class="px-2"><?php echo $student['parentPhoneNum']; ?></td>
                    <td class="px-2"><?php echo $student['homeAddr']; ?></td>
                    <td class="px-2"><?php echo $student['schoolAddr']; ?></td>
                    <td class="px-2"><?php echo $student['subjects']; ?></td>
                </tr>
            </tbody>
        <?php
            $count += 1;
        }
        ?>
        </table>
        <br><br>
        </div>
    </div>
</section>
