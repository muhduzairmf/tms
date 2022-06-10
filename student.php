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
    <title>Student Registration | Cyber Tuition Saujana</title>
</head>
<body>
    <?php
    include './views/components/NavBasic.php';
    include './views/components/NotFound.php';
    include './views/StudentUI.php';

    // error_reporting(0);

    // Render Navbar Basic
    navBasic();

    switch ($_GET['register']) {
        // URL: localhost/student.php?register=initial
        case 'initial':
            $studentUI = new StudentUI();
            $studentUI->initialPage();
            break;

        // URL: localhost/student.php?register=step-1
        case 'step-1':
            $studentUI = new StudentUI();
            $studentUI->registerStep1Page();
            break;

        // URL: localhost/student.php?register=step-2
        case 'step-2':
            $studentUI = new StudentUI();
            $studentUI->registerStep2Page();
            break;

        // URL: localhost/student.php?register=step-3
        case 'step-3':
            $studentUI = new StudentUI();
            $studentUI->registerStep3Page();
            break;

        // URL: localhost/student.php?register=finish
        case 'finish':
            $studentUI = new StudentUI();
            $studentUI->finishPage();
            break;

        // URL: localhost/student.php?register=success
        case 'success':
            $studentUI = new StudentUI();
            $studentUI->successPage();
            break;
        
        // If user try to access invalid URL
        default:
            notFound();     
            break;
    }
    ?>
</body>
</html>