<?php
include './views/components/BasicHeader.php';
basicHeader("Register Student - Step 1");

if (!isset($_COOKIE['student'])) {

    header("Location: ./student.php?register=initial");

}

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['Next_Step2'])) {

        if (empty($_POST['name']) || empty($_POST['icNumber']) || empty($_POST['age']) || empty($_POST['homeAddress']) || empty($_POST['schoolAddress']) || empty($_POST['phoneNumber']) || empty($_POST['email']) || empty($_POST['parentName']) || empty($_POST['parentPhoneNumber'])) {
            
            $msg = "All field are required";

        } else {
            
            setcookie('student', 'step1', time() + 86400);
            setcookie('name', $_POST['name'], time() + 86400);
            setcookie('icNumber', $_POST['icNumber'], time() + 86400);
            setcookie('age', $_POST['age'], time() + 86400);
            setcookie('homeAddress', $_POST['homeAddress'], time() + 86400);
            setcookie('schoolAddress', $_POST['schoolAddress'], time() + 86400);
            setcookie('phoneNumber', $_POST['phoneNumber'], time() + 86400);
            setcookie('email', $_POST['email'], time() + 86400);
            setcookie('parentName', $_POST['parentName'], time() + 86400);
            setcookie('parentPhoneNumber', $_POST['parentPhoneNumber'], time() + 86400);
            header("Location: ./student.php?register=step-2");

        }        

    } else if (isset($_POST['Cancel_Register'])) {
        
        if (isset($_COOKIE['student'])) {

            if ($_COOKIE['student'] == 'step1') {
                
                setcookie('student', '', time() - 86400);
                setcookie('name', '', time() - 86400);
                setcookie('icNumber', '', time() - 86400);
                setcookie('age', '', time() - 86400);
                setcookie('homeAddress', '', time() - 86400);
                setcookie('schoolAddress', '', time() - 86400);
                setcookie('phoneNumber', '', time() - 86400);
                setcookie('email', '', time() - 86400);
                setcookie('parentName', '', time() - 86400);
                setcookie('parentPhoneNumber', '', time() - 86400);
                header("Location: ./student.php?register=initial");

            } else if ($_COOKIE['student'] == 'step2') {
                
                setcookie('student', '', time() - 86400);
                setcookie('name', '', time() - 86400);
                setcookie('icNumber', '', time() - 86400);
                setcookie('age', '', time() - 86400);
                setcookie('homeAddress', '', time() - 86400);
                setcookie('schoolAddress', '', time() - 86400);
                setcookie('phoneNumber', '', time() - 86400);
                setcookie('email', '', time() - 86400);
                setcookie('parentName', '', time() - 86400);
                setcookie('parentPhoneNumber', '', time() - 86400);
                setcookie('category', '', time() - 86400);
                setcookie('subjects', '', time() - 86400);
                header("Location: ./student.php?register=initial");

            } else if ($_COOKIE['student'] == 'step3') {
                
                setcookie('student', '', time() - 86400);
                setcookie('name', '', time() - 86400);
                setcookie('icNumber', '', time() - 86400);
                setcookie('age', '', time() - 86400);
                setcookie('homeAddress', '', time() - 86400);
                setcookie('schoolAddress', '', time() - 86400);
                setcookie('phoneNumber', '', time() - 86400);
                setcookie('email', '', time() - 86400);
                setcookie('parentName', '', time() - 86400);
                setcookie('parentPhoneNumber', '', time() - 86400);
                setcookie('category', '', time() - 86400);
                setcookie('subjects', '', time() - 86400);
                setcookie('methodPay', '', time() - 86400);
                header("Location: ./student.php?register=initial");

            }            

        } 

        header("Location: ./student.php?register=initial");

    }

}

?>
<br><br>
<section class="container py-2">
<div class="columns">
    <div class="column col-6 col-sm-11 col-mx-auto">
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
        <form class="form-horizontal my-2" action="./student.php?register=step-1" method="post" autocomplete="off">
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="name">Name</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="text" id="name" class="form-input" placeholder="Name" name="name" value="<?php echo (isset($_COOKIE['name'])) ? $_COOKIE['name'] : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="icNumber">IC Number</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="text" id="icNumber" class="form-input" placeholder="IC Number" name="icNumber" value="<?php echo (isset($_COOKIE['icNumber'])) ? $_COOKIE['icNumber'] : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="age">Age</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="number" max="18" id="age" class="form-input" placeholder="Age" name="age" value="<?php echo (isset($_COOKIE['age'])) ? $_COOKIE['age'] : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="homeAddress">Home address</label>
                </div>
                <div class="col-9 col-sm-12">
                    <textarea id="homeAddress" class="form-input" rows="5" placeholder="Home Address" name="homeAddress"><?php echo (isset($_COOKIE['homeAddress'])) ? $_COOKIE['homeAddress'] : '' ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="schoolAddress">School address</label>
                </div>
                <div class="col-9 col-sm-12">
                    <textarea id="schoolAddress" class="form-input" rows="5" placeholder="School Address" name="schoolAddress"><?php echo (isset($_COOKIE['schoolAddress'])) ? $_COOKIE['schoolAddress'] : '' ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="phoneNum">Phone number</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="text" id="phoneNum" class="form-input" placeholder="Phone Number" name="phoneNumber" value="<?php echo (isset($_COOKIE['phoneNumber'])) ? $_COOKIE['phoneNumber'] : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="email">Email</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="email" id="email" class="form-input" placeholder="Email" name="email" value="<?php echo (isset($_COOKIE['email'])) ? $_COOKIE['email'] : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="parentName">Parent name</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="text" id="parentName" class="form-input" placeholder="Parent Name" name="parentName" value="<?php echo (isset($_COOKIE['parentName'])) ? $_COOKIE['parentName'] : '' ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="parentPhoneNum">Parent phone number</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="text" id="parentPhoneNum" class="form-input" placeholder="Parent Phone Number" name="parentPhoneNumber" value="<?php echo (isset($_COOKIE['parentPhoneNumber'])) ? $_COOKIE['parentPhoneNumber'] : '' ?>">
                </div>
            </div>
            <br>
            <div class="float-right">
                <button type="submit" name="Next_Step2" value="true" class="btn btn-primary">Next</button>
                <button type="submit" name="Cancel_Register" value="true" class="btn">Cancel</button>
            </div>
        </form><br><br>
    </div>
</div>
</section>