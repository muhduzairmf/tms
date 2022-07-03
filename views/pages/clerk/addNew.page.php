<?php
include './views/components/BasicHeader.php';
basicHeader("Add New Staff");

$msg = "";
$teacherForm = "true";
$clerkManagerForm = "false";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    if (isset($_POST['Submit_New_Teacher'])) {
        
        if (empty($_POST['name']) || empty($_POST['icNumber']) || empty($_POST['age']) || empty($_POST['phoneNumber']) || empty($_POST['email']) || empty($_POST['maritalStatus']) || empty($_POST['eduLevel'])) {
            
            $msg = "All field is required";

        } else {
            
            $msg = "New teacher successfully added";

        }


    } else if (isset($_POST['Submit_New_Staff'])) {

        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['title'])) {
            
            $msg = "All field is required";
            $teacherForm = "false";
            $clerkManagerForm = "true";

        } else {
    
            $msg = "New " . strtolower($_POST['title']) . " successfully added";
            $teacherForm = "false";
            $clerkManagerForm = "true";

        }
        

    }

}

?>
<br><br>
<section class="columns">
    <div class="column col-6 col-mx-auto">
        <br><br>
        <?php
        if (!empty($msg)) {

            ?>
            <div x-data="{ open: true }" x-show="open" x-transition.duration.500ms>
            <div class="toast toast-primary">
                <button class="btn btn-clear float-right" x-on:click="open = ! open"></button>
                <?php echo $msg; ?>
            </div>
            <br><br>
            </div>
            <?php

        }
        ?>
        <div x-data="{
            teacherForm: <?php echo $teacherForm ?>,
            clerkManagerForm: <?php echo $clerkManagerForm ?>,
            changeTab() {
                this.teacherForm = ! this.teacherForm;
                this.clerkManagerForm = ! this.clerkManagerForm;
            }
        }">
            <ul class="tab tab-block">
                <li x-bind:class="teacherForm ? 'tab-item active' : 'tab-item'">
                    <a x-on:click="changeTab()" style="cursor:pointer;">Teacher</a>
                </li>
                <li x-bind:class="clerkManagerForm ? 'tab-item active' : 'tab-item'">
                    <a x-on:click="changeTab()" style="cursor:pointer;">Clerk or Manager</a>
                </li>
            </ul>
            <br><br>
            <form class="form-horizontal my-2" method="post" action="./clerk.php?tab=staff&section=add-new" x-show="teacherForm" autocomplete="off">
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="name">Name</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="text" id="name" class="form-input" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="icNumber">IC Number</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="text" id="icNumber" class="form-input" placeholder="IC Number" name="icNumber">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="homeAddress">Home address</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <textarea id="homeAddress" class="form-input" rows="5" placeholder="Home Address" name="homeAddress"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="age">Age</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="number" max="50" id="age" class="form-input" placeholder="Age" name="age">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="phoneNumber">Phone number</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="text" id="phoneNumber" class="form-input" placeholder="Phone number" name="phoneNumber">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="email" id="email" class="form-input" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="maritalStatus">Marital status</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <label class="form-radio">
                            <input type="radio" name="maritalStatus" checked>
                            <i class="form-icon"></i> Married
                        </label>
                        <label class="form-radio">
                            <input type="radio" name="maritalStatus">
                            <i class="form-icon"></i> Not married
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="eduLevel">Education level</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="text" id="eduLevel" class="form-input" placeholder="Education level" name="eduLevel">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="subjects">Subject to teach</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <div class="divider text-center" data-content="STANDARD 4-6"></div>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Bahasa Melayu Standard 4-6">
                            <i class="form-icon"></i> Bahasa Melayu
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="English Standard 4-6">
                            <i class="form-icon"></i> English
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Science Standard 4-6">
                            <i class="form-icon"></i> Science
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Mathematics Standard 4-6">
                            <i class="form-icon"></i> Mathematics
                        </label>
                        <div class="divider text-center" data-content="FORM 1-3"></div>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Bahasa Melayu Form 1-3">
                            <i class="form-icon"></i> Bahasa Melayu
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="English Form 1-3">
                            <i class="form-icon"></i> English
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Science Form 1-3">
                            <i class="form-icon"></i> Science
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Mathematics Form 1-3">
                            <i class="form-icon"></i> Mathematics
                        </label>
                        <div class="divider text-center" data-content="FORM 4-5"></div>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Biology Form 4-5">
                            <i class="form-icon"></i> Biology
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Physics Form 4-5">
                            <i class="form-icon"></i> Physics
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Chemistry Form 4-5">
                            <i class="form-icon"></i> Chemistry
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Additional Mathematics Form 4-5">
                            <i class="form-icon"></i> Additional Mathematics
                        </label>
                        <label class="form-switch">
                            <input type="checkbox" name="subjectToTeach" value="Accounting Principles Form 4-5">
                            <i class="form-icon"></i> Accounting Principles
                        </label>
                    </div>
                </div>
                <br>
                <p class="text-right">
                    <button class="btn">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="Submit_New_Teacher" value="true">Submit</button>
                </p>
            </form>
            <form class="form-horizontal my-2" method="post" action="./clerk.php?tab=staff&section=add-new" x-show="clerkManagerForm" autocomplete="off">
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="name">Name</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="text" id="name" class="form-input" placeholder="Name" name="name">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3 col-sm-12">
                        <label class="form-label" for="email">Email</label>
                    </div>
                    <div class="col-9 col-sm-12">
                        <input type="email" id="email" class="form-input" placeholder="Email" name="email">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-3">
                        <label for="title" class="form-label">Title</label>
                    </div>
                    <div class="col-9">
                        <select name="title" id="title" class="form-select">
                            <option value="">Choose an option</option>
                            <option value="Clerk">Clerk</option>
                            <option value="Manager">Manager</option>
                        </select>
                    </div>
                </div>
                <p class="text-right">
                    <button class="btn">Cancel</button>
                    <button class="btn btn-primary" type="submit" name="Submit_New_Staff" value="true">Submit</button>
                </p>
            </form>
        </div>
    </div>
</section>