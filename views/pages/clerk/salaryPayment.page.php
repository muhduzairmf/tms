<?php
include './views/components/BasicHeader.php';
include './controllers/ClerkController.php';
basicHeader("Salary Payment");

$clerkController = new ClerkController();
$teacherList = $clerkController->findAllTeacher();

$msg = "";
$receiver = "";
$month = "";
$grosspay = 0.0;
$bonus = 0.0;
$kwsp = 0.0;
$socso = 0.0;

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {

    if ($_POST['submit'] == "Generate_Salary_Payment") {
        
        if (empty($_POST['teacher']) || empty($_POST['month']) || empty($_POST['grosspay']) || empty($_POST['kwsp']) || empty($_POST['socso'])) {
            
            $msg = "Please fill up all information below";
    
        } else {
            
            $receiver = $_POST['teacher'];
            $month = $_POST['month'];
            $grosspay = (float)$_POST['grosspay'];
            $bonus = (float)$_POST['bonus'];
            $kwsp = (float)$_POST['kwsp'];
            $socso = (float)$_POST['socso'];  
            
            $msg = "Please check the information below before requesting salary payment approval to the manager";
    
        }
        
    } else if ($_POST['submit'] == "Request_Approval") {
        
        $msg = "The salary payment for the teacher successfully requested to the manager as approval";

    }

}
?>
<br><br>
<section class="container">
    <div class="columns">
        <div class="column col-6 col-mx-auto">
            <br><br>
            <?php
            if (!empty($msg)) {
                ?>
                <div x-data="{
                    displayError: true,
                    close() {
                        this.displayError = false;
                    }
                }" x-show="displayError" x-transition.duration.500ms>
                    <div class="toast toast-primary mx-2">
                        <button class="btn btn-clear float-right" x-on:click="close()"></button>
                        <?php echo $msg; ?>
                    </div>
                    <br><br>
                </div>
                <?php
            }
            ?>
            <h5 class="text-center">Generate Teacher salary</h5>
            <div class="divider"></div><br>
            <form action="./clerk.php?tab=staff&section=teacher-salary-payment" method="POST" class="form-horizontal">
                <div class="form-group">
                    <div class="col-3">
                        <label for="teacher" class="form-label">Select Teacher</label>
                    </div>
                    <div class="col-9">
                        <select name="teacher" id="teacher" class="form-select" <?php echo (isset($_POST['submit']) && $_POST['submit'] == "Generate_Salary_Payment") ? "disabled" : ""; ?>>
                            <option value="">Choose an option</option>
                            <?php
                            
                            foreach ($teacherList as $teacher) {
                                ?>
                            <option value="<?php echo $teacher['name']; ?>"><?php echo $teacher['name']; ?><?php $teacher['name']; ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="month" class="form-label">Select Month</label>
                    </div>
                    <div class="col-9">
                        <select name="month" id="month" class="form-select" <?php echo (isset($_POST['submit']) && $_POST['submit'] == "Generate_Salary_Payment") ? "disabled" : ""; ?>>
                            <option value="">Choose an option</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="June">June</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="October">October</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="grosspay" class="form-label">Gross Pay</label>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-input" name="grosspay" <?php echo (isset($_POST['submit']) && $_POST['submit'] == "Generate_Salary_Payment") ? "disabled" : ""; ?>>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="bonus" class="form-label">Bonus</label>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-input" name="bonus" <?php echo (isset($_POST['submit']) && $_POST['submit'] == "Generate_Salary_Payment") ? "disabled" : ""; ?>>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="kwsp" class="form-label">KWSP</label>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-input" name="kwsp" <?php echo (isset($_POST['submit']) && $_POST['submit'] == "Generate_Salary_Payment") ? "disabled" : ""; ?>>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="socso" class="form-label">SOCSO</label>
                    </div>
                    <div class="col-3">
                        <input type="text" class="form-input" name="socso" <?php echo (isset($_POST['submit']) && $_POST['submit'] == "Generate_Salary_Payment") ? "disabled" : ""; ?>>
                    </div>
                </div>
                <br>
                <p class="text-right">
                    <button class="btn btn-primary" type="submit" name="submit" value="Generate_Salary_Payment" <?php echo (isset($_POST['submit']) && $_POST['submit'] == "Generate_Salary_Payment") ? "disabled" : ""; ?>>Generate</button>
                </p>
            </form>
            <br><br>
            <?php
            if (!empty($receiver) && !empty($month) && !empty($grosspay) && !empty($bonus) && !empty($kwsp) && !empty($socso)) {

                $year = date("Y");
                $perfom_allowance = 200;

            ?>
            <div class="card modified-card">
                <div class="card-header">
                    <div class="card-title text-center mb-2"><strong>Salary Payment Record</strong></div>
                    <div class="card-subtitle">Receiver : <?php echo $receiver; ?></div>
                    <div class="card-subtitle">Month of salary : <?php echo $month . " " . $year; ?></div>
                    <div class="card-subtitle">Position : Teacher/Tutor</div>
                    <?php
                        foreach ($teacherList as $teacher) {
                            if ($receiver == $teacher['name']) {
                                ?>
                    <div class="card-subtitle">Subject to teach : <?php echo $teacher['subject']; ?></div>
                                <?php
                            }
                        }
                    ?>
                </div>
                <div class="card-body">
                    <div class="columns">
                        <div class="column">
                            Gross Pay : RM <?php echo $grosspay; ?>
                            <br>Perfomance Allowance: RM <?php echo $perfom_allowance; ?> (100%)
                            <br>Bonus : RM <?php echo $bonus; ?>
                        </div>
                        <div class="divider-vert"></div>
                        <div class="column">
                            KWSP : RM <?php echo $kwsp; ?>
                            <br>SOCSO : RM <?php echo $socso; ?>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="columns">
                        <div class="column col-6 col-mx-auto">
                        <p class="text-right">TOTAL PAY: RM <?php echo ($grosspay+$perfom_allowance+$bonus) - ($kwsp+$socso); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <p class="text-right">
                <form action="./clerk.php?tab=staff&section=teacher-salary-payment" method="post">
                    <button class="btn btn-primary" type="submit" name="submit" value="Request_Approval">Request Approval to Manager</button>
                </form>
            </p>
            <br><br>
            <?php
            }
            ?>
        </div>
    </div>
</section>