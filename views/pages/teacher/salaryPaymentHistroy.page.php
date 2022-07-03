<?php
include './views/components/BasicHeader.php';
basicHeader("Salary Payment History");
?>
<br><br>
<section class="container">
    <div class="columns">
        <div class="column col-6 col-mx-auto">
            <h5><strong>December 2021</strong></h5>
            <hr><br>
            <div class="card modified-card">
                <div class="card-header">
                    <div class="card-title text-center mb-2"><strong>Salary Payment Record</strong></div>
                    <div class="card-subtitle">Receiver : <?php 
                        if (isset($_SESSION['tcr_email'])) {
                            if ($_SESSION['tcr_email'] == "meixing@email.com") {
                                echo "Ms. Lim";
                            } else if ($_SESSION['tcr_email'] == "bazli@email.com") {
                                echo "Mr. Bazli";
                            }
                        } else { echo "Teacher Name"; }
                        ?></div>
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
            <br><br>
            <h5><strong>November 2021</strong></h5>
            <hr><br>
            <div class="card modified-card">
                <div class="card-header">
                    <div class="card-title text-center mb-2"><strong>Salary Payment Record</strong></div>
                    <div class="card-subtitle">Receiver : <?php 
                        if (isset($_SESSION['tcr_email'])) {
                            if ($_SESSION['tcr_email'] == "meixing@email.com") {
                                echo "Ms. Lim";
                            } else if ($_SESSION['tcr_email'] == "bazli@email.com") {
                                echo "Mr. Bazli";
                            }
                        } else { echo "Teacher Name"; }
                        ?></div>
                    <div class="card-subtitle">Month of salary : November 2021</div>
                    <div class="card-subtitle">Position : Teacher/Tutor</div>
                    <div class="card-subtitle">Subject to teach : Mathematics Standard 4-6, and Mathematics Form 1-3</div>
                </div>
                <div class="card-body">
                    <div class="columns">
                        <div class="column">
                            Gross Pay : RM 1700.00
                            <br>Perfomance Allowance: RM 200.00 (100%)
                            <br>Bonus : RM 100.00
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
                        <p class="text-right">TOTAL PAY: RM 1800.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><br>