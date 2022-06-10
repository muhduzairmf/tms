<?php
include './views/components/BasicHeader.php';
basicHeader("Register Student - Step 2");

if (!isset($_COOKIE['student'])) {

    header("Location: ./student.php?register=initial");

}

$msg = "";

function SetCookies($cookie_name) {

    setcookie($cookie_name, $_POST[$cookie_name], time() + 86400);

    return $cookie_name;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Next_Step3'])) {

    if (empty($_POST['category']) || (empty($_POST['BMS46']) && empty($_POST['ENGS46']) && empty($_POST['SCIS46']) && empty($_POST['MATHS46']) && empty($_POST['BMF13']) && empty($_POST['ENGF13']) && empty($_POST['SCIF13']) && empty($_POST['MATHF13']) && empty($_POST['BIOF45']) && empty($_POST['PHYF45']) && empty($_POST['CHEF45']) && empty($_POST['ADDMATHF45']) && empty($_POST['ACCF45']))) {
        
        $msg = "Category must be selected with at least one subject";

    } else {

        setcookie('student', 'step2', time() + 86400);
        setcookie('category', $_POST['category'], time() + 86400);
        
        if ($_POST['category'] == "Standard 4-6") {
            
            if (isset($_POST['BMS46'])) {
                SetCookies('BMS46');
            } 
            if (isset($_POST['ENGS46'])) {
                SetCookies('ENGS46');
            } 
            if (isset($_POST['SCIS46'])) {
                SetCookies('SCIS46');
            } 
            if (isset($_POST['MATHS46'])) {
                SetCookies('MATHS46');
            }
            

        } else if ($_POST['category'] == "Form 1-3") {
            
            if (isset($_POST['BMF13'])) {
                SetCookies('BMF13');
            } 
            if (isset($_POST['ENGF13'])) {
                SetCookies('ENGF13');
            } 
            if (isset($_POST['SCIF13'])) {
                SetCookies('SCIF13');
            } 
            if (isset($_POST['MATHF13'])) {
                SetCookies('MATHF13');
            }

        } else if ($_POST['category'] == "Form 4-5") {
            
            if (isset($_POST['BIOF45'])) {
                SetCookies('BIOF45');
            } 
            if (isset($_POST['PHYF45'])) {
                SetCookies('PHYF45');
            } 
            if (isset($_POST['CHEF45'])) {
                SetCookies('CHEF45');
            } 
            if (isset($_POST['ADDMATHF45'])) {
                SetCookies('ADDMATHF45');
            } 
            if (isset($_POST['ACCF45'])) {
                SetCookies('ACCF45');
            }

        }

        header("Location: ./student.php?register=step-3");

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
        <form class="form-horizontal my-2" x-data="{
            category: '<?php echo (isset($_COOKIE['category'])) ? $_COOKIE['category'] : "Standard 4-6"; ?>',
        }" action="./student.php?register=step-2" method="post" autocomplete="off">
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="category">Category</label>
                </div>
                <div class="col-9 col-sm-12">
                    <label class="form-radio">
                        <input type="radio" name="category" value="Standard 4-6" x-model="category">
                        <i class="form-icon"></i> Standard 4-6 
                    </label>
                    <label class="form-radio">
                        <input type="radio" name="category" value="Form 1-3" x-model="category">
                        <i class="form-icon"></i> Form 1-3
                    </label>
                    <label class="form-radio">
                        <input type="radio" name="category" value="Form 4-5" x-model="category">
                        <i class="form-icon"></i> Form 4-5
                    </label>
                </div>
            </div>
            <!-- if category === 'Standard 4-6' -->
            <div x-show="category === 'Standard 4-6'"> 
                <div class="divider"></div>
                <p class="text-center"><strong>Standard 4-6</strong></p>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="subject1">Subject to choose</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <label class="form-checkbox">
                            <input type="checkbox" name="BMS46" value="Bahasa Melayu Standard 4-6" <?php echo (isset($_COOKIE['BMS46'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Bahasa Melayu
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="ENGS46" value="English Standard 4-6" <?php echo (isset($_COOKIE['ENGS46'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> English
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="SCIS46" value="Science Standard 4-6" <?php echo (isset($_COOKIE['SCIS46'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Science
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="MATHS46" value="Mathematics Standard 4-6" <?php echo (isset($_COOKIE['MATHS46'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Mathematics
                        </label>
                    </div>
                </div>
            </div>
            <!-- else if category === 'Form 1-3' -->
            <div x-show="category === 'Form 1-3'">
                <div class="divider"></div>
                <p class="text-center"><strong>Form 1-3</strong></p>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label for="" class="form-label">Subject to choose</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <label class="form-checkbox">
                            <input type="checkbox" name="BMF13" value="Bahasa Melayu Form 1-3" <?php echo (isset($_COOKIE['BMF13'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Bahasa Melayu
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="ENGF13" value="English Form 1-3" <?php echo (isset($_COOKIE['ENGF13'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> English
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="SCIF13" value="Science Form 1-3" <?php echo (isset($_COOKIE['SCIF13'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Science
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="MATHF13" value="Mathematics Form 1-3" <?php echo (isset($_COOKIE['MATHF13'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Mathematics
                        </label>
                    </div>
                </div>
            </div>
            <!-- else if category === 'Form 4-5' -->
            <div x-show="category === 'Form 4-5'">
                <div class="divider"></div>
                <p class="text-center"><strong>Form 4-5</strong></p>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label for="" class="form-label">Subject to choose</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <label class="form-checkbox">
                            <input type="checkbox" name="BIOF45" value="Biology Form 4-5" <?php echo (isset($_COOKIE['BIOF45'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Biology
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="PHYF45" value="Physics Form 4-5" <?php echo (isset($_COOKIE['PHYF45'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Physics
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="CHEF45" value="Chemistry Form 4-5" <?php echo (isset($_COOKIE['CHEF45'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Chemistry
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="ADDMATHF45" value="Additional Mathemtics 4-5" <?php echo (isset($_COOKIE['ADDMATHF45'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Additional
                            Mathematics
                        </label>
                        <label class="form-checkbox">
                            <input type="checkbox" name="ACCF45" value="Accounting Principles" <?php echo (isset($_COOKIE['ACCF45'])) ? "checked" : "" ?>>
                            <i class="form-icon"></i> Accounting Principles
                        </label>
                    </div>
                </div>
            </div>
            <div class="float-right">
                <a href="./student.php?register=step-1" class="btn">Back to Step 1</a>
                <button type="submit" name="Next_Step3" value="true" class="btn btn-primary">Next</button>
            </div>
        </form><br><br>
    </div>
</div>
</section>