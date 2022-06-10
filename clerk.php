<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/spectre.min.css">
    <link rel="stylesheet" href="./static/css/spectre-exp.min.css">
    <link rel="stylesheet" href="./static/css/spectre-icons.min.css">
    <link rel="stylesheet" href="./static/css/main.css">
    <script defer src="./static/js/alpine.min.js"></script>
    <script defer src="./static/js/main.js"></script>
    <title>Clerk | Cyber Tuition Saujana</title>
</head>
<body>
    <?php
    include './views/components/NavClerk.php';
    include './views/components/NotFound.php';
    include './views/ClerkUI.php';
    include './auth/ProtectRoute.auth.php';

    //error_reporting(0);

    // $protectClerk = new ProtectRoute();
    // $protectClerk->validateClerk();

    // Render Navbar for clerk.php
    navClerk();



    //=====================================================================//
    //=========================   ROUTE HANDLER   =========================//
    //=====================================================================//
    //                                ****
    //                                *  *
    //                                *  *
    //                               **  **
    //                                *  *
    //                                 **

    // Render Not Found message if there is 
    // no tab and section params in the URL
    // For example: localhost/clerk.php
    if (empty($_GET['tab']) || empty($_GET['section'])) {
        notFound();
        return;
    }

    // URL: localhost/clerk.php?tab=home&section=main
    if ($_GET['tab'] == 'home' && $_GET['section'] == 'main') {
        $clerkUI = new ClerkUI();
        $clerkUI->homePage();

    // URL: localhost/clerk.php?tab=student&section=register-list
    } else if ($_GET['tab'] == 'student' && $_GET['section'] == 'register-list') {
        $clerkUI = new ClerkUI();
        $clerkUI->registerListPage();
        
    // URL: localhost/clerk.php?tab=student&section=fee-payment
    } else if ($_GET['tab'] == 'student' && $_GET['section'] == 'fee-payment') {
        $clerkUI = new ClerkUI();
        $clerkUI->feePaymentPage();

    // URL: localhost/clerk.php?tab=staff&section=add-new
    } else if ($_GET['tab'] == 'staff' && $_GET['section'] == 'add-new') {
        $clerkUI = new ClerkUI();
        $clerkUI->addNewPage();

    // URL: localhost/clerk.php?tab=staff&section=teacher-salary-payment
    } else if ($_GET['tab'] == 'staff' && $_GET['section'] == 'teacher-salary-payment') {
        $clerkUI = new ClerkUI();
        $clerkUI->teacherSalaryPaymentPage();

    // URL: localhost/clerk.php?tab=timetable&section=adjust-timetable
    } else if ($_GET['tab'] == 'timetable' && $_GET['section'] == 'adjust-timetable') {
        $clerkUI = new ClerkUI();
        $clerkUI->adjustTimetablePage();

    // URL: localhost/clerk.php?tab=timetable&section=check-teacher-availability
    } else if ($_GET['tab'] == 'timetable' && $_GET['section'] == 'check-teacher-availability') {
        $clerkUI = new ClerkUI();
        $clerkUI->checkTeacherAvailabilityPage();

    // URL: localhost/clerk.php?tab=setting&section=about-me
    } else if ($_GET['tab'] == 'setting' && $_GET['section'] == 'about-me') {
        $clerkUI = new ClerkUI();
        $clerkUI->aboutMePage();

    // URL: localhost/clerk.php?tab=setting&section=change-password
    } else if ($_GET['tab'] == 'setting' && $_GET['section'] == 'change-password') {
        $clerkUI = new ClerkUI();
        $clerkUI->changePasswordPage();

    // If user try to access invalid URL
    } else {
        notFound();

    }

    ?>
    <br>
</body>
</html>