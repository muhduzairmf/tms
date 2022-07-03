<?php
include './views/components/BasicHeader.php';
basicHeader("Approve New Timetable");

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['Reject_New_Timetable'])) {
        
        $msg = "The new timetable has been rejected";

    } else if (isset($_POST['Approve_New_Timetable'])) {

        $msg = "The new timetable has been approved";
        
    }

}

?>
<br><br>
<section class="container">
<div class="columns">
    <div class="column col-6 col-mx-auto">
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
        <h5>Subject Information</h5>
        <hr><br>
        <?php
        if (empty($msg)) {
        ?>
        <div class="columns mt-2">
            <div class="column col-3">Subject name</div>
            <div class="column col-9">
                :&nbsp;&nbsp;&nbsp;&nbsp; Mathematics (Standard 4-6)
            </div>
        </div>
        <div class="columns mt-2">
            <div class="column col-3">Day</div>
            <div class="column col-9">
                :&nbsp;&nbsp;&nbsp;&nbsp; Sunday
            </div>
        </div>
        <div class="columns mt-2">
            <div class="column col-3">Preferred time</div>
            <div class="column col-9">
                :&nbsp;&nbsp;&nbsp;&nbsp; 12.00 PM
            </div>
        </div>
        <div class="columns mt-2">
            <div class="column col-3">Subject name</div>
            <div class="column col-9">
                :&nbsp;&nbsp;&nbsp;&nbsp; Mathematics
            </div>
        </div>
        <div class="columns mt-2">
            <div class="column col-3">Available Teacher</div>
            <div class="column col-9">
                <div class="form-group">
                    <select class="form-select">
                        <option>Choose an option</option>
                        <option>Ms. Syahira</option>
                        <option>Mr. Redzza</option>
                    </select>
                </div>
            </div>
        </div>
        <br><br>
        <div class="float-right">
            <form action="./manager.php?tab=timetable&section=approve-new-timetable" method="post" style="display: inline;">
                <button class="btn" type="submit" name="Reject_New_Timetable" value="1">Reject</button>
            </form>
            <form action="./manager.php?tab=timetable&section=approve-new-timetable" method="post" style="display: inline;">
                <button class="btn btn-primary" type="submit" name="Approve_New_Timetable" value="1">Approve</button>
            </form>
        </div>
        <?php
        } else {
        ?>
            <br><br>
            <h3 class="text-center">No new timetable here</h3>
            <br>
            <p class="text-right">
                <a href="./manager.php?tab=timetable&section=current-timetable" class="btn btn-primary">View current timetable</a>
            </p>
        <?php
        }
        ?>
    </div>
</div><br><br>
</section>