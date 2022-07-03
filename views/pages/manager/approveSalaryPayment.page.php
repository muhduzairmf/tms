<?php
include './views/components/BasicHeader.php';
basicHeader("Approve Salary Payment");

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['Reject_Salary_Payment'])) {
        
        $msg = "The salary payment record has been rejected";

    } else if (isset($_POST['Approve_Salary_Payment'])) {

        $msg = "The salary payment record has been approved";
        
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
            <h5 class="text-center"><strong>Pending List</strong></h5>
            <hr class="divider"><br>
            <?php if (empty($msg)) { ?>
            <div class="card modified-card">
                <div class="card-header">
                    <div class="card-title text-center mb-2"><strong>Salary Payment Record</strong></div>
                    <div class="card-subtitle">Receiver : Ms. Lim</div>
                    <div class="card-subtitle">Month of salary : December 2021</div>
                    <div class="card-subtitle">Position : Teacher/Tutor</div>
                    <div class="card-subtitle">Subject to teach : Mathematics (Standard 4-6) and Mathematics (Form 1-3)</div>
                </div>
                <div class="card-body">
                    <div class="columns">
                        <div class="column">
                            Gross Pay : RM 1700.00
                            <br>Perfomance Allowance: RM 200.00 (100%)
                            <br>Bonus : RM 0
                        </div>
                        <div class="divider-vert"></div>
                        <div class="column">
                            KWSP : RM 100.00
                            <br>SOCSO : RM 100.00
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="columns">
                        <div class="column col-6 col-mx-auto">
                            <p class="text-right">TOTAL PAY: RM 1700.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="float-right">
                <form action="./manager.php?tab=teacher&section=approve-salary-payment" method="post" style="display: inline;">
                    <button class="btn" type="submit" name="Reject_Salary_Payment" value="1">Reject</button>
                </form>
                <form action="./manager.php?tab=teacher&section=approve-salary-payment" method="post" style="display: inline;">
                    <button class="btn btn-primary" type="submit" name="Approve_Salary_Payment" value="1">Approve</button>
                </form>
            </div>
            <?php 
            } else {
            ?>
                <br><br>
                <h4 class="text-center">No salary payment here</h4>
            <?php
            }
            ?>
        </div>
    </div><br><br>
</section>