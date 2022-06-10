<?php
include './views/components/BasicHeader.php';
basicHeader("Adjust Timetable");

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['Req_Adj_Timetable'])) {

    if (empty($_POST['subject']) || empty($_POST['day']) || empty($_POST['time']) || empty($_POST['teachers'])) {
        $msg = "All field is required";
    } else {
        $msg = "New timetable for " . $_POST['subject'] . " successfully requested";
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
            <form action="./clerk.php?tab=timetable&section=adjust-timetable" method="post" class="form-horizontal my-2" x-data="{
                subject: '',
                day: '',
            }">
                <div class="form-group">
                    <div class="col-3">
                        <label for="subjects" class="form-label">Select subject</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <select class="form-select" id="subjects" name="subject" x-model="subject">
                                <option value="">Choose an option</option>
                                <option value="BMS46">Bahasa Melayu (Standard 4-6)</option>
                                <option value="ENGS46">English (Standard 4-6)</option>
                                <option value="MATHS46">Mathematics (Standard 4-6)</option>
                                <option value="SCIS46">Science (Standard 4-6)</option>
                                <option value="BMF13">Bahasa Melayu (Form 1-3)</option>
                                <option value="ENGF13">English (Form 1-3)</option>
                                <option value="MATHF13">Mathematics (Form 1-3)</option>
                                <option value="SCIF13">Science (Form 1-3)</option>
                                <option value="BIOF45">Biology (Form 4-5)</option>
                                <option value="PHYF45">Physics (Form 4-5)</option>
                                <option value="CHEF45">Chemistry (Form 4-5)</option>
                                <option value="ADDMATHF45">Additional Mathematics (Form 4-5)</option>
                                <option value="ACCF45">Accounting Principles (Form 4-5)</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="days" class="form-label">Select day</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group">
                            <select class="form-select" id="days" name="day" x-model="day">
                                <option value="" selected>Choose an option</option>
                                <option value="Sunday">Sunday</option>
                                <option value="Monday">Monday</option>
                                <option value="Tuesday">Tuesday</option>
                                <option value="Wednesday">Wednesday</option>
                                <option value="Thursday">Thursday</option>
                                <option value="Friday">Friday</option>
                                <option value="Saturday">Saturday</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="times" class="form-label">Select preferred time</label>
                    </div>
                    <div class="col-9">
                        <select id="times" class="form-select" name="time">
                            <option value="" selected>Choose an option</option>
                            <option value="9-10" x-show="day === 'Monday' || day === 'Tuesday' || day === 'Wednesday' || day === 'Thursday' || day === 'Friday'">9pm - 10pm</option>
                            <option value="10-11" x-show="day === 'Monday' || day === 'Tuesday' || day === 'Wednesday' || day === 'Thursday' || day === 'Friday'">10pm - 11pm</option>
                            <option value="11-12" x-show="day === 'Saturday' || day === 'Sunday'">11am - 12pm</option>
                            <option value="12-1" x-show="day === 'Saturday' || day === 'Sunday'">12pm - 1pm</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="teachers" class="form-label">Request teacher availability</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group" x-show="subject === 'BMS46' || subject === 'BMF13'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Mr. Ali">
                                <i class="form-icon"></i> Mr. Ali
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'BMS46' || subject === 'BMF13'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Ms. Erin">
                                <i class="form-icon"></i> Ms. Erin
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'ENGS46' || subject === 'ENGF13'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Mr. Nick">
                                <i class="form-icon"></i> Mr. Nick
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'ENGS46' || subject === 'ENGF13'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Ms. Michelle">
                                <i class="form-icon"></i> Ms. Michelle
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'SCIS46' || subject === 'SCIF13' || subject === 'BIOF45' || subject === 'PHYF45' || subject === 'CHEF45'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Mr. Sathia">
                                <i class="form-icon"></i> Mr. Sathia
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'MATHS46' || subject === 'MATHF13' || subject === 'ADDMATHF45' || subject === 'ACCF45'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Ms. Lim">
                                <i class="form-icon"></i> Ms. Lim
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'SCIS46' || subject === 'SCIF13' || subject === 'BIOF45' || subject === 'PHYF45' || subject === 'CHEF45'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Mr. Alex">
                                <i class="form-icon"></i> Mr. Alex
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'SCIS46' || subject === 'SCIF13' || subject === 'BIOF45' || subject === 'PHYF45' || subject === 'CHEF45'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Mr. Chong">
                                <i class="form-icon"></i> Mr. Chong
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'SCIS46' || subject === 'SCIF13' || subject === 'BIOF45' || subject === 'PHYF45' || subject === 'CHEF45'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Ms. Devii">
                                <i class="form-icon"></i> Ms. Devii
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'MATHS46' || subject === 'MATHF13' || subject === 'ADDMATHF45' || subject === 'ACCF45'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Ms. Syahira">
                                <i class="form-icon"></i> Ms. Syahira
                            </label>
                        </div>
                        <div class="form-group" x-show="subject === 'MATHS46' || subject === 'MATHF13' || subject === 'ADDMATHF45' || subject === 'ACCF45'">
                            <label class="form-switch">
                                <input type="checkbox" name="teachers" value="Mr. Redzza">
                                <i class="form-icon"></i> Mr. Redzza
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <p class="text-right">
                    <button type="submit" name="Req_Adj_Timetable" value="true" class="btn btn-primary">Request changes</button>
                </p>
            </form>
        </div>
    </div>
</section>