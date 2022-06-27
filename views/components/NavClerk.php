<?php

/**
 * A function that will display the navigation bar for clerk.php
 */
function navClerk() {
    ?>
    <nav class="navbar bg-primary px-2 py-2">
        <section class="navbar-section px-2 py-2">
            <a class="navbar-brand text-light mr-2">Cyber Saujana Tuition</a>
        </section>
        <section class="navbar-section px-2 py-2">
            <a href="./clerk.php?tab=home&section=main" class="btn btn-primary hide-md">&nbsp;Home&nbsp;</a>
            <div class="dropdown dropdown-right hide-md">
                <!-- /* Student tab */ -->
                <button class="btn btn-primary dropdown-toggle" tabindex="0">
                    Student <i class="icon icon-caret"></i>
                </button>
                <ul class="menu">
                    <li class="text-dark"><a class="btn btn-link" href="./clerk.php?tab=student&section=register-list">Register List</a></li>
                    <li class="text-dark"><a class="btn btn-link" href="./clerk.php?tab=student&section=fee-payment">Fee Payment</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-right hide-md">
                <!-- /* Staff tab */ -->
                <button class="btn btn-primary dropdown-toggle" tabindex="0">
                    Staff <i class="icon icon-caret"></i>
                </button>
                <ul class="menu">
                    <li class="text-dark"><a class="btn btn-link" href="./clerk.php?tab=staff&section=add-new">Add New</a></li>
                    <li class="text-dark"><a class="btn btn-link" href="./clerk.php?tab=staff&section=teacher-salary-payment">Teacher Salary Payment</a></li>
                </ul>
            </div>
            <div class="dropdown dropdown-right hide-md">
                <!-- /* Timetable tab */ -->
                <button class="btn btn-primary dropdown-toggle" tabindex="0">
                    Timetable <i class="icon icon-caret"></i>
                </button>
                <ul class="menu">
                    <li class="text-dark"><a class="btn btn-link" href="./clerk.php?tab=timetable&section=adjust-timetable">Adjust Timetable</a></li>
                    <li class="text-dark"><a class="btn btn-link" href="./clerk.php?tab=timetable&section=check-teacher-availability">Check Teacher<br>Availability</a></li><br>
                </ul>
            </div>
            <div class="dropdown dropdown-right hide-md">
                <!-- /* Setting tab */ -->
                <button class="btn btn-primary dropdown-toggle" tabindex="0">
                    Setting <i class="icon icon-caret"></i>
                </button>
                <ul class="menu">
                    <li class="text-dark"><a class="btn btn-link" href="./clerk.php?tab=setting&section=about-me">About me</a></li>
                    <li class="text-dark"><a class="btn btn-link" href="./clerk.php?tab=setting&section=change-password">Change password</a></li>
                    <li class="text-dark">
                        <form action="./auth/Logout.auth.php" method="post">
                            <button class="btn btn-link" type="submit" name="submit" value="Logout">Logout</button>
                        </form>    
                    </li>
                </ul>
            </div>
            <!-- Profile icon -->
            <button class="btn btn-action s-circle mx-2"><i class="icon icon-people"></i></button>
            <div>Clerk</div>
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
                            <a href="./clerk.php?tab=home&section=main" class="h6 text-bold">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- /* Student tab */ -->
                            <a class="h6 text-bold">Student</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="./clerk.php?tab=student&section=register-list">Register List</a></li>
                                <li class="nav-item"><a href="./clerk.php?tab=student&section=fee-payment">Fee Payment</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- /* Teacher */ -->
                            <a class="h6 text-bold">Teacher</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="./clerk.php?tab=teacher&section=add-new">Add New</a></li>
                                <li class="nav-item"><a href="./clerk.php?tab=teacher&section=salary-payment">Salary Payment</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- /* Timetable tab */ -->
                            <a class="h6 text-bold">Timetable</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="./clerk.php?tab=timetable&section=adjust-timetable">Adjust Timetable</a></li>
                                <li class="nav-item"><a href="./clerk.php?tab=timetable&section=check-teacher-availability">Check Teacher Availability</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <!-- /* Setting tab */ -->
                            <a class="h6 text-bold">Setting</a>
                            <ul class="nav">
                                <li class="nav-item"><a href="./clerk.php?tab=setting&section=about-me">About Me</a></li>
                                <li class="nav-item"><a href="./clerk.php?tab=setting&section=change-password">Change Password</a></li>
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