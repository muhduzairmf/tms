<?php
include './views/components/BasicHeader.php';
basicHeader("Confirm Availability");

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['Confirm_Availability'])) {
        
        $msg = "The timetable has been recorded as confirmed";

    } else if (isset($_POST['Not_Available'])) {

        $msg = "The timetable has been recorded as not available";
        
    }

}

?>
<section class="container">
    <br><br>
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
        if (empty($msg)) {
        ?>
            <h5>Subject Information</h5>
            <hr>
            <div class="columns">
                <div class="column col-3">Subject name</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; Mathematics (Standard 4-6)
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Day</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; Sunday
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Preferred time</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; 12.00 PM
                </div>
            </div>
            <div class="columns">
                <div class="column col-3">Subject name</div>
                <div class="column col-9">
                    :&nbsp;&nbsp;&nbsp;&nbsp; Mathematics
                </div>
            </div>
            <br>
            <form action="./teacher.php?tab=timetable&section=confirm-availability" method="post">
            <p class="text-right">
                <button class="btn" type="submit" name="Not_Available" value="true">Not Available</button>
                <button class="btn btn-primary" type="submit" name="Confirm_Availability" value="true">Confirm</button>
            </p>
            </form>
            <?php
        } else {
            ?>
            <br><br>
            <h4 class="text-center">No new timetable here</h4>
            <?php
        }
        ?>
        </div>
    </div>
</section>