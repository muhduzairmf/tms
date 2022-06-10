<?php
include './views/components/BasicHeader.php';
basicHeader("Register Student - Step 3");
?>
<br><br>
<section class="container py-2">
<div class="columns">
    <div class="column col-6 col-sm-11 col-mx-auto">
        <form class="form-horizontal my-2" x-data="{
            methodPay: 'Cash',
            cash: true,
            onlineBanking: false,
            toggle() {
                if (this.methodPay === 'Cash') {
                    this.cash = true;
                    this.onlineBanking = false;
                } else if (this.methodPay === 'Online Banking') {
                    this.cash = false;
                    this.onlineBanking = true;
                }
            }
        }" x-init="$watch('methodPay', value => toggle())">
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
            <div x-show="cash">
                <div class="divider"></div>
                <p class="text-center"><strong>Cash</strong></p>
                <br>
                <p class="text-center"><strong>Please pay the initial fee to the clerk on duty</strong></p>
            </div>
            <!-- else if methodPay === 'Online banking' -->
            <div x-show="onlineBanking">
                <div class="divider"></div>
                <p class="text-center"><strong>Online banking</strong></p>
                <div class="form-group">
                    <div class="col-6 col-sm-12">
                        <label for="onlineBanking" class="form-label">Upload the payment receipt here</label>
                    </div>
                    <div class="col-6 col-sm-12">
                        <input type="file" name="onlineBanking" id="onlineBanking">
                    </div>
                </div>
            </div>
            <p class="text-right">
                <a href="/student.php?register=step-2" class="btn">Back</a>
                <a href="/student.php?register=finish" class="btn btn-primary">Finish</a>
            </p>
        </form>
    </div>
</div>
</section>