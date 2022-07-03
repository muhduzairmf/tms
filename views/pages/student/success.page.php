<?php
if (!isset($_COOKIE['student'])) {

    header("Location: ./student.php?register=initial");

}

setcookie('student', '', time() - 86400);
setcookie('name', '', time() - 86400);
setcookie('icNumber', '', time() - 86400);
setcookie('age', '', time() - 86400);
setcookie('homeAddress', '', time() - 86400);
setcookie('schoolAddress', '', time() - 86400);
setcookie('phoneNumber', '', time() - 86400);
setcookie('email', '', time() - 86400);
setcookie('parentName', '', time() - 86400);
setcookie('parentPhoneNumber', '', time() - 86400);
setcookie('category', '', time() - 86400);
setcookie('subjects', '', time() - 86400);
setcookie('methodPay', '', time() - 86400);
?>
<section class="hero hero-lg bg-gray">
    <article class="hero-body">
        <h1 class="text-center">You have successfully registered!</h1>
        <p class="text-center"><a class="btn btn-primary" href="./">Back to home page</a></p>
    </article>
</section>