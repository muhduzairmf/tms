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
    <title>Teacher | Cyber Tuition Saujana</title>
</head>
<body>
    <?php
    include './views/components/NavTeacher.php';
    include './views/components/NotFound.php';
    include './views/TeacherUI.php';
    include './auth/ProtectRoute.auth.php';

    error_reporting(0);

    // $protectTeacher = new ProtectRoute();
    // $protectTeacher->validateTeacher();

    // Render Navbar for teacher.php
    navTeacher();



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

    // URL: localhost/teacher.php?tab=home&section=main
    if ($_GET['tab'] == 'home' && $_GET['section'] == 'main') {  
        $teacherUI = new TeacherUI();
        $teacherUI->homePage();    
        
    // URL: localhost/teacher.php?tab=my-class&section=my-subject
    } else if($_GET['tab'] == 'my-class' && $_GET['section'] == 'my-subject') {
        $teacherUI = new TeacherUI();
        $teacherUI->mySubjectPage();

    // URL: localhost/teacher.php?tab=my-class&section=student-attendance
    } else if($_GET['tab'] == 'my-class' && $_GET['section'] == 'student-attendance') {
        $teacherUI = new TeacherUI();
        $teacherUI->studentAttendancePage();

    // URL: localhost/teacher.php?tab=my-class&section=my-student-list
    } else if($_GET['tab'] == 'my-class' && $_GET['section'] == 'my-student-list') {
        $teacherUI = new TeacherUI();
        $teacherUI->myStudentListPage();

    // URL: localhost/teacher.php?tab=timetable&section=confirm-availability
    } else if($_GET['tab'] == 'timetable' && $_GET['section'] == 'confirm-availability') {
        $teacherUI = new TeacherUI();
        $teacherUI->confirmAvailabilityPage();

    // URL: localhost/teacher.php?tab=salary&section=salary-payment-history
    } else if($_GET['tab'] == 'salary' && $_GET['section'] == 'salary-payment-history') {
        $teacherUI = new TeacherUI();
        $teacherUI->salaryPaymentHistoryPage();

    // URL: localhost/teacher.php?tab=setting&section=about-me
    } else if($_GET['tab'] == 'setting' && $_GET['section'] == 'about-me') {
        $teacherUI = new TeacherUI();
        $teacherUI->aboutMePage();

    // URL: localhost/teacher.php?tab=setting&section=change-password
    } else if($_GET['tab'] == 'setting' && $_GET['section'] == 'change-password') {
        $teacherUI = new TeacherUI();
        $teacherUI->changePasswordPage();

    // If user try to access invalid URL
    } else {
        notFound();
        
    }
    
    ?>
    
    <br>
</body>
</html>