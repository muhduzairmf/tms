<?php

/**
 * A function that will display the navigation bar for teacher.php
 */
function navTeacher() {
    ?>
    <nav class="navbar bg-primary px-2 py-2">
        <section class="navbar-section px-2 py-2">
            <a class="navbar-brand text-light mr-2">Cyber Saujana Tuition</a>
        </section>
        <section class="navbar-section px-2 py-2">
            <!-- /* Home tab */ -->
            <a href="/teacher.php?tab=home&section=main" class="btn btn-primary hide-md">&nbsp;Home&nbsp;</a>
            <div class="dropdown dropdown-right hide-md">
                <!-- /* My Class tab */ -->
                <button class="btn btn-primary dropdown-toggle" tabindex="0">
                    My Class <i class="icon icon-caret"></i>
                </button>
                <ul class="menu">
                    <li class="text-dark"><a class="btn btn-link" href="/teacher.php?tab=my-class&section=my-subject">My Subject</a></li>
                    <li class="text-dark"><a class="btn btn-link" href="/teacher.php?tab=my-class&section=student-attendance">Student Attendance</a></li>
                    <li class="text-dark"><a class="btn btn-link" href="/teacher.php?tab=my-class&section=my-student-list">My Student List</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-right hide-md">
                <!-- /* Timetable tab */ -->
                <button class="btn btn-primary dropdown-toggle" tabindex="0">
                    Timetable <i class="icon icon-caret"></i>
                </button>
                <ul class="menu">
                    <li class="text-dark"><a class="btn btn-link" href="/teacher.php?tab=timetable&section=confirm-availability">Confirm availability</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-right hide-md">
                <!-- /* Salary tab */ -->
                <button class="btn btn-primary dropdown-toggle" tabindex="0">
                    Salary <i class="icon icon-caret"></i>
                </button>
                <ul class="menu">
                    <li class="text-dark"><a class="btn btn-link" href="/teacher.php?tab=salary&section=salary-payment-history">Salary Payment History</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-right hide-md">
                <!-- /* Setting tab */ -->
                <button class="btn btn-primary dropdown-toggle" tabindex="0">
                    Setting <i class="icon icon-caret"></i>
                </button>
                <ul class="menu">
                    <li class="text-dark"><a class="btn btn-link" href="/teacher.php?tab=setting&section=about-me">About me</a></li>
                    <li class="text-dark"><a class="btn btn-link" href="/teacher.php?tab=setting&section=change-password">Change password</a></li>
                    <li class="text-dark">
                        <form action="./auth/Logout.auth.php" method="post">
                            <button class="btn btn-link" type="submit" name="submit" value="Logout">Logout</button>
                        </form>    
                    </li>
                </ul>
            </div>
            <!-- /* Profile icon */ -->
            <button class="btn btn-action s-circle mx-2"><i class="icon icon-people"></i></button>
            <div>Teacher</div>
        </section>
    </nav>
    <!-- /* Modal menu */ -->
    <div class="modal modal-lg" id="modal-id">
        <a class="modal-overlay" aria-label="Close"></a>
        <div class="modal-container" style="max-height: 100vh !important;">
            <div class="modal-header">
            <a class="btn btn-clear float-right" aria-label="Close" onclick="closeNav()"></a>
            <div class="modal-title h4 text-bold">Menu</div>
            </div>
            <div class="modal-body">
                <div class="content">
                    <ul class="nav">
                        <li class="nav-item">
                            <!-- /* Home tab */ -->
                            <a href="/teacher.php?tab=home&section=main" class="h6 text-bold">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- /* My Class tab */ -->
                            <a class="h6 text-bold">My Class</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="/teacher.php?tab=my-class&section=my-subject">My Subject</a></li>
                                <li class="nav-item"><a href="/teacher.php?tab=my-class&section=student-attendance">Student Attendance</a></li>
                                <li class="nav-item"><a href="/teacher.php?tab=my-class&section=my-student-list">My Student List</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- /* Timetable */ -->
                            <a class="h6 text-bold">Timetable</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="/teacher.php?tab=timetable&section=confirm-availability">Confirm Availability</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- /* Salary tab */ -->
                            <a class="h6 text-bold">Salary</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="/teacher.php?tab=salary&section=salary-payment-history">Salary Payment History</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- /* Setting tab */ -->
                            <a class="h6 text-bold">Setting</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="/teacher.php?tab=setting&section=about-me">About Me</a></li>
                                <li class="nav-item"><a href="/teacher.php?tab=setting&section=change-password">Change Password</a></li>
                                <li class="nav-item">&nbsp;
                                    <form action="./auth/Logout.auth.php" method="post">
                                        <button class="btn" type="submit" name="submit" value="Logout">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- /* Button to toggle modal menu */ -->
    <nav class="navbar bg-primary px-2 py-2 show-md">
        <section class="navbar-section px-2 py-2">
            <button class="navbar-brand btn btn-primary" onclick="openNav()">Menu&nbsp;&nbsp;&nbsp;<i class="icon icon-menu"></i></button>
        </section>
    </nav>
    <?php
}