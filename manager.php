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
    <title>Manager | Cyber Tuition Saujana</title>
</head>
<body>    
    <?php
    include './views/components/NavManager.php';
    include './views/components/NotFound.php';
    include './views/ManagerUI.php';
    include './auth/ProtectRoute.auth.php';
    
    error_reporting(0);

    // $protectManager = new ProtectRoute();
    // $protectManager->validateManager();

    //Render Navbar for manager.php
    navManager();



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

    // URL: localhost/manager.php?tab=home&section=main
    if ($_GET['tab'] == 'home' && $_GET['section'] == 'main') {
        $managerUI = new ManagerUI();
        $managerUI->homePage(); 
        
    // URL: localhost/manager.php?tab=teacher&section=approve-salary-payment
    } else if ($_GET['tab'] == 'teacher' && $_GET['section'] == 'approve-salary-payment') {
        $managerUI = new ManagerUI();
        $managerUI->approveSalaryPaymentPage();

    // URL: localhost/manager.php?tab=timetable&section=approve-new-timetable
    } else if ($_GET['tab'] == 'timetable' && $_GET['section'] == 'approve-new-timetable') {
        $managerUI = new ManagerUI();
        $managerUI->approveNewTimetablePage();
    
    // URL: localhost/manager.php?tab=timetable&section=current-timetable
    } else if ($_GET['tab'] == 'timetable' && $_GET['section'] == 'current-timetable') {
        $managerUI = new ManagerUI();
        $managerUI->currentTimetablePage();

    // URL: localhost/manager.php?tab=setting&section=about-me
    } else if ($_GET['tab'] == 'setting' && $_GET['section'] == 'about-me') {
        $managerUI = new ManagerUI();
        $managerUI->aboutMePage();

    // URL: localhost/manager.php?tab=setting&section=change-password
    } else if ($_GET['tab'] == 'setting' && $_GET['section'] == 'change-password') {
        $managerUI = new ManagerUI();
        $managerUI->changePasswordPage();

    // If user try to access invalid URL
    } else {
        notFound();
    }
    
    ?>
    
    <br>
</body>
</html>