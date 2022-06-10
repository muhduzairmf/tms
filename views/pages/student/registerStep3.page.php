<?php
include './views/components/BasicHeader.php';
basicHeader("Register Student - Step 3");

if (!isset($_COOKIE['student'])) {

    header("Location: ./student.php?register=initial");

}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Next_Finish'])) {

    setcookie('student', 'step3', time() + 86400);
    setcookie('methodPay', $_POST['methodPay'], time() + 86400);
    header("Location: ./student.php?register=finish");

}

?>
<br><br>
<section class="container py-2">
<div class="columns">
    <div class="column col-6 col-sm-11 col-mx-auto">
        <form class="form-horizontal my-2" x-data="{
            methodPay: '<?php echo (isset($_COOKIE['methodPay'])) ? $_COOKIE['methodPay'] : "Cash"; ?>',
        }" action="./student.php?register=step-3" method="post" autocomplete="off">
            <div class="form-group">
                <div class="col-6 col-sm-12">
                    <label for="methodPay" class="form-label">Payment method for initial fee</label>
                </div>
                <div class="col-6 col-sm-12">
                    <label class="form-radio">
                        <input type="radio" name="methodPay" value="Cash" x-model="methodPay">
                        <i class="form-icon"></i> Cash 
                    </label>
                    <label class="form-radio">
                        <input type="radio" name="methodPay" value="Online Banking" x-model="methodPay">
                        <i class="form-icon"></i> Online banking 
                    </label>
                </div>
            </div>
            <!-- if methodPay === 'Cash' -->
            <div x-show="methodPay === 'Cash'">
                <div class="divider"></div>
                <p class="text-center"><strong>Cash</strong></p>
                <br>
                <p class="text-center"><strong>Please pay the initial fee to the clerk on duty</strong></p>
            </div>
            <!-- else if methodPay === 'Online Banking' -->
            <div x-show="methodPay === 'Online Banking'">
                <div class="divider"></div>
                <p class="text-center"><strong>Online banking</strong></p>
                <div class="form-group">
                    <div class="col-6 col-sm-12">
                        <label for="onlineBanking" class="form-label">Upload the payment receipt here</label>
                    </div>
                    <div class="col-6 col-sm-12">
                        <input type="file" id="onlineBanking">
                    </div>
                </div>
            </div>
            <div class="float-right">
                <a href="./student.php?register=step-2" class="btn">Back</a>
                <button type="submit" name="Next_Finish" value="true" class="btn btn-primary">Finish</button>
            </div>
        </form><br><br>
    </div>
</div>
</section>