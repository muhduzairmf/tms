<?php
include_once './views/components/BasicHeader.php';
include_once './controllers/ClerkController.php';

basicHeader("Fee Payment");

$msg = "";

$payFeeForm = "true";
$editSubjectForm = "false";

$isApplyFeePayment = false;
$isSavePaymentDetail = false;
$category = "";
$studentList = [];

if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['submit'])) {
    
    if ($_POST['submit'] == "Apply_Fee_Payment") {
        
        if (empty($_POST["year"]) || empty($_POST["month"]) || empty($_POST["category"])) {
            
            $msg = "Please fill up all information below";
            
        } else {
            
            $year = $_POST["year"];
            $month = $_POST["month"];
            $category = $_POST["category"];

            $clerkController = new ClerkController();
            if ($category == 'Standard 4-6') {

                $studentList = $clerkController->findStudentStandard4_6();
                $msg = "Standard 4-6 students successfully listed as below";
                
            } else if ($category == 'Form 1-3') {
                
                $studentList = $clerkController->findStudentForm1_3();
                $msg = "Form 1-3 students successfully listed as below";
                
            } else if ($category == 'Form 4-5') {
                
                $studentList = $clerkController->findStudentForm4_5();
                $msg = "Form 4-5 students successfully listed as below";

            }
            

        }
        
    } else if ($_POST['submit'] == "Save_Payment_Detail") {

        $msg = "Fee Payment has successfully reported.";
        
    } else if ($_POST['submit'] == "Find_Student_Category") {
        $payFeeForm = "false";
        $editSubjectForm = "true";

        if (empty($_POST['icNumber'])) {
            $msg = "Please fill the student's IC number";
        }

    } else if ($_POST['submit'] == "Edit_Subject") {
        $payFeeForm = "false";
        $editSubjectForm = "true";
        $count_subj = 0;

        if (isset($_POST['BMF13'])) {
            $count_subj += 1;
        }
        if (isset($_POST['ENGF13'])) {
            $count_subj += 1;
        }
        if (isset($_POST['MATHF13'])) {
            $count_subj += 1;
        }
        if (isset($_POST['SCIF13'])) {
            $count_subj += 1;
        }

        switch ($count_subj) {
            case 1:
                $_SESSION['std_pay'] = "RM50.00";
                break;
                
            case 2:
                $_SESSION['std_pay'] = "RM100.00";
                break;

            case 3:
                $_SESSION['std_pay'] = "RM120.00";
                break;

            case 4:
                $_SESSION['std_pay'] = "RM140.00";
                break;
            
            default:
                $_SESSION['std_pay'] = "RM0.00";
                break;
        }

        $msg = "Subject to take successfully changed. The fee to pay for the student also applied";
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
                <div  x-data="{
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
            <div x-data="{
                payFeeForm: <?php echo $payFeeForm ?>,
                editSubjectForm: <?php echo $editSubjectForm ?>,
                changeTab() {
                    this.payFeeForm = ! this.payFeeForm;
                    this.editSubjectForm = ! this.editSubjectForm;
                }
            }">
                <ul class="tab tab-block">
                    <li x-bind:class="payFeeForm ? 'tab-item active' : 'tab-item'">
                        <a x-on:click="changeTab()" style="cursor:pointer;">Pay</a>
                    </li>
                    <li x-bind:class="editSubjectForm ? 'tab-item active' : 'tab-item'">
                        <a x-on:click="changeTab()" style="cursor:pointer;">Edit Subject</a>
                    </li>
                </ul>
                <br><br>
                <div x-show="payFeeForm">
                    <form action="./clerk.php?tab=student&section=fee-payment" class="form-horizontal" method="post">
                    <div class="form-group">
                        <div class="col-3">
                            <label for="months" class="form-label">Choose month</label>
                        </div>
                        <div class="col-9">
                            <select name="month" id="months" class="form-select">
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
                            <label for="years" class="form-label">Choose year</label>
                        </div>
                        <div class="col-9">
                            <select name="year" id="years" class="form-select">
                                <option value="">Choose an option</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-3">
                            <label for="cats" class="form-label">Choose student list category</label>
                        </div>
                        <div class="col-9">
                            <select name="category" id="cats" class="form-select">
                                <option value="">Choose an option</option>
                                <option value="Standard 4-6">Standard 4-6</option>
                                <option value="Form 1-3">Form 1-3</option>
                                <option value="Form 4-5">Form 4-5</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <p class="text-right">
                        <button class="btn btn-primary" type="submit" name="submit" value="Apply_Fee_Payment">Apply</button>
                    </p>
                </form>
                <br><br>
                <?php
                if (isset($_POST['submit']) && $_POST['submit'] == "Apply_Fee_Payment" && !empty($category) && !empty($studentList)) {

                ?>
                <h3 class="text-center"><?php echo $category; ?></h3>
                <div class="divider"></div>
                <br>
                <form action="./clerk.php?tab=student&section=fee-payment" method="post">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>IC Number</th>
                            <th>Amount</th>
                            <th>Pay</th>
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
                                <?php
                                if ($count == 1) {
                                    echo (isset($_SESSION['std_pay'])) ? $_SESSION['std_pay'] : "RM 100.00";
                                } else if ($count == 4 || $count == 6) {
                                    echo "RM 100.00";
                                } else if ($count == 3 || $count == 7 || $count == 9) {
                                    echo "RM 120.00";
                                } else {
                                    echo "RM 140.00";
                                }
                                ?>
                            </td>
                            <td>
                                <div class="form-group">
                                    <?php 
                                    if ($student['isPay'] == true) {
                                    ?>
                                    <label class="form-switch">
                                        <input type="checkbox" checked>
                                        <i class="form-icon"></i>
                                    </label>
                                    <?php
                                    } else {
                                    ?>
                                    <label class="form-switch">
                                        <input type="checkbox">
                                        <i class="form-icon"></i>
                                    </label>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </td>
                        </tr> 
                        <?php
                        $count += 1;
                        }
                        ?>
                    </tbody>
                </table>
                <br><br>
                <p class="text-right">
                    <button class="btn btn-primary" type="submit" name="submit" value="Save_Payment_Detail">Save Report</button>
                </p>
                </form>
                <?php
                }
                ?>
                </div>
                <div x-show="editSubjectForm">
                    <form action="./clerk.php?tab=student&section=fee-payment" class="form-horizontal" method="post" autocomplete="off">
                    <div class="form-group">
                        <div class="col-3 col-sm-12">
                            <label class="form-label" for="icNumber">Student's IC Number</label>
                        </div>
                        <div class="col-9 col-sm-12">
                            <input type="text" id="icNumber" class="form-input" placeholder="IC Number" name="icNumber">
                        </div>
                    </div>
                    <br>
                    <p class="text-right">
                        <button class="btn btn-primary" type="submit" name="submit" value="Find_Student_Category">Find</button>
                    </p>
                    </form>
                    <?php
                    if (isset($_POST['submit']) && $_POST['submit'] == "Find_Student_Category" && !empty($_POST['icNumber'])) {

                    ?>
                    <br>
                    <div class="card modified-card m-2">
                        <div class="card-header">
                            <div class="card-title h4 text-bold">Name : Raihan Nazeer Akeem</div>
                            <div class="card-subtitle text-dark h5">IC Number : <?php echo $_POST['icNumber']; ?></div>
                            <br>
                            <form action="./clerk.php?tab=student&section=fee-payment" method="post">
                                <div class="form-group">
                                    <div class="col-3 col-sm-12">
                                        <label class="form-label" for="category">Subject to take</label>
                                    </div>
                                    <div class="col-9 col-sm-12">
                                        <label class="form-checkbox">
                                            <input type="checkbox" name="BMF13" value="true" >
                                            <i class="form-icon"></i> Bahasa Melayu Form 1-3 
                                        </label>
                                        <label class="form-checkbox">
                                            <input type="checkbox" name="ENGF13" value="true" >
                                            <i class="form-icon"></i> English Form 1-3
                                        </label>
                                        <label class="form-checkbox">
                                            <input type="checkbox" name="MATHF13" value="true" checked>
                                            <i class="form-icon"></i> Mathematics Form 1-3
                                        </label>
                                        <label class="form-checkbox">
                                            <input type="checkbox" name="SCIF13" value="true" checked>
                                            <i class="form-icon"></i> Science Form 1-3
                                        </label>
                                    </div>
                                </div>
                                <p class="text-right">
                                    <button type="submit" name="submit" value="Edit_Subject" class="btn btn-primary">Apply</button>
                                </p>
                            </form>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <br><br><br>
        </div>
    </div>
</section>