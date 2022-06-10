<?php
include './views/components/BasicHeader.php';
basicHeader("Register Student - Step 1");
?>
<br><br>
<section class="container py-2">
<div class="columns">
    <div class="column col-6 col-sm-11 col-mx-auto">
        <form class="form-horizontal my-2">
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
                    <label class="form-label" for="age">Age</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="number" max="18" id="age" class="form-input" placeholder="Age" name="age">
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
                    <label class="form-label" for="schoolAddress">School address</label>
                </div>
                <div class="col-9 col-sm-12">
                    <textarea id="schoolAddress" class="form-input" rows="5" placeholder="School Address" name="schoolAddress"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="phoneNum">Phone number</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="text" id="phoneNum" class="form-input" placeholder="Phone Number" name="phoneNum">
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
                    <label class="form-label" for="parentName">Parent name</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="text" id="parentName" class="form-input" placeholder="Parent Name" name="parentName">
                </div>
            </div>
            <div class="form-group">
                <div class="col-3 col-sm-12">
                    <label class="form-label" for="parentPhoneNum">Parent phone number</label>
                </div>
                <div class="col-9 col-sm-12">
                    <input type="text" id="parentPhoneNum" class="form-input" placeholder="Parent Phone Number" name="parentPhoneNum">
                </div>
            </div>
            <br>
            <p class="text-right">
                <a href="/student.php?register=initial" class="btn">Cancel</a>
                <a href="/student.php?register=step-2" class="btn btn-primary">Next</a>
            </p>
        </form>
    </div>
</div>
</section>