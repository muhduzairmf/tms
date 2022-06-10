<?php
include './views/components/BasicHeader.php';
basicHeader("Register Student - Finish");

if (!isset($_COOKIE['student'])) {

    header("Location: ./student.php?register=initial");

}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Finish_Register'])) {

    setcookie('student', 'finish', time() + 86400);
    header("Location: ./student.php?register=success");

}

?>
<br><br>
<section class="container py-2">
    <div class="columns">
        <div class="column col-6 col-sm-11 col-mx-auto">
            <br><br>
            <h5 class="text-bold">Student Information</h5>
            <div class="divider"></div>
            <div class="columns">
                <div class="column col-3">Full Name</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['name']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">IC Number</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['icNumber']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Age</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['age']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Phone Number</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['phoneNumber']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Email</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['email']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Category of study</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['category']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Parent Name</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['parentName']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Parent Phone Number</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['parentPhoneNumber']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Home Address</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['homeAddress']; ?>
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">School Address</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $_COOKIE['schoolAddress']; ?>
                </div>
            </div>
            <br><br>
            <h5 class="text-bold">Subject to take</h5>
            <div class="divider"></div>
            <ol>
                <?php
                if ($_COOKIE['category'] == "Standard 4-6") {

                    echo (isset($_COOKIE['BMS46'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['BMS46'] ."</li>" : "";
                    echo (isset($_COOKIE['ENGS46'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['ENGS46'] ."</li>" : "";
                    echo (isset($_COOKIE['SCIS46'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['SCIS46'] ."</li>" : "";
                    echo (isset($_COOKIE['MATHS46'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['MATHS46'] ."</li>" : "";
                
                ?>
                <?php
                } else if ($_COOKIE['category'] == "Form 1-3") {

                    echo (isset($_COOKIE['BMF13'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['BMF13'] ."</li>" : "";
                    echo (isset($_COOKIE['ENGF13'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['ENGF13'] ."</li>" : "";
                    echo (isset($_COOKIE['SCIF13'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['SCIF13'] ."</li>" : "";
                    echo (isset($_COOKIE['MATHF13'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['MATHF13'] ."</li>" : "";
                
                } else if ($_COOKIE['category'] == "Form 4-5") {

                    echo (isset($_COOKIE['BIOF45'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['BIOF45'] ."</li>" : "";
                    echo (isset($_COOKIE['PHY45'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['PHY45'] ."</li>" : "";
                    echo (isset($_COOKIE['CHEF45'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['CHEF45'] ."</li>" : "";
                    echo (isset($_COOKIE['ADDMATHF45'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['ADDMATHF45'] ."</li>" : "";
                    echo (isset($_COOKIE['ACCF45'])) ? "<li>&nbsp;&nbsp;&nbsp;&nbsp; ". $_COOKIE['ACCF45'] ."</li>" : "";

                }
                ?>
            </ol>
            <br><br>
            <h5 class="text-bold">Payment method for initial fee</h5>
            <div class="divider"></div>
            <div class="columns">
                <div class="column col-3">Method</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; <?php echo ($_COOKIE['methodPay'] == "Cash") ? "Cash" : "Online Banking (<a href='./storage/receipt-4.pdf' target='_blank'>receipt-4.pdf</a>) "; ?>
                </div>
            </div>
            <br><br>
            <h5 class="text-bold">Confirmation</h5>
            <div class="divider"></div>
            <p>Please confirm to the clerk on duty of your registration. After the clerk confirm the registration, you can officially become our students by submitting this registration form.</p>
            <br><br>
            <div class="float-right">
                <a href="/student.php?register=step-3" class="btn">Back</a>
                <form action="./student.php?register=finish" method="post" style="display: inline;">
                    <button class="btn btn-primary" type="submit" name="Finish_Register" value="true">Submit</button>
                </form>
            </div>
        </div><br><br>
    </div>
</section>