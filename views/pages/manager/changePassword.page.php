<?php
include './views/components/BasicHeader.php';
basicHeader("Change Password");

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Change_Passwd'])) {
    
    if (empty($_POST['currentPassword']) || empty($_POST['newPassword']) ||empty($_POST['confirmNewPassword']) ) {
        
        $msg = "All field is required";

    } else if ($_POST['confirmNewPassword'] != $_POST['newPassword']) {
        
        $msg = "Password does not match";
    
    } else if (preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/", $_POST['newPassword']) == 0) {

        $msg = "Password must have at least 8 charachters that contains at least one uppercase letter, one lowercase letter and one number";

    } else {

        $msg = "Your password successfully changed";

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
            <form class="form-horizontal my-2" method="post" action="./manager.php?tab=setting&section=change-password" x-data="{
                newPassword: '',
                isFocusedNew: false,
                passwordChecker: new RegExp('(?=.*[a-z])(?=.*[A-Z])(?=.{8,})'),
                confirmNewPassword: '',
                isFocusedConfirm: false
            }">
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="currentPassword">Current Password</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="password" id="currentPassword" class="form-input" placeholder="Password" autocomplete="current-password" name="currentPassword">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="newPassword">New Password</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="password" id="newPassword" class="form-input" placeholder="Password" autocomplete="new-password" name="newPassword" x-model="newPassword" x-on:focus="isFocusedNew = true">
                        <p class="form-input-hint text-primary" x-show="isFocusedNew && !passwordChecker.test(newPassword)">Password must have at least 8 charachters that contains at least one uppercase letter, one lowercase letter and one number</p>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="confirmNewPassword">Confirm New Password</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="password" id="confirmNewPassword" class="form-input" placeholder="Password" autocomplete="new-password" name="confirmNewPassword" x-model="confirmNewPassword" x-on:focus="isFocusedConfirm = true">
                        <p class="form-input-hint text-primary" x-show="isFocusedConfirm && confirmNewPassword !== newPassword">Password does not match</p>
                    </div>
                </div>
                <p class="text-right">
                    <button class="btn btn-primary" type="submit" name="Change_Passwd" value="true">Change Password</button>
                </p>
            </form>
        </div>
    </div><br><br>
</section>