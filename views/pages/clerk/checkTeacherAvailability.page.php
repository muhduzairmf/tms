<?php
include './views/components/BasicHeader.php';
basicHeader("Check Teacher Availability");
?>
<br><br>
<section class="container"><br><br>
    <div class="columns">
        <div class="column col-6 col-mx-auto">
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
            <br><br>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>Teacher</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ms. Lim</td>
                        <td>Not Available</td>
                    </tr>
                    <tr>
                        <td>Ms. Syahira</td>
                        <td>Available</td>
                    </tr>
                    <tr>
                        <td>Mr. Redzza</td>
                        <td><em>Not confirmed</em></td>
                    </tr>
                </tbody>
            </table>
            <br><br>
        </div>
    </div>
</section>