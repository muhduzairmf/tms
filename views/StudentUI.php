<?php

/**
 * A view class for the student route (student.php)
 */
class StudentUI {
    /**
     * An instance method for the view of localhost/student.php?register=step-1
     */
    public function initialPage() {
        include './views/pages/student/initial.page.php';
    }

    /**
     * An instance method for the view of localhost/student.php?register=step-1
     */
    public function registerStep1Page() {
        include './views/pages/student/registerStep1.page.php';
    }

    /**
     * An instace method for the view of localhost/student.php?register=step-2
     */
    public function registerStep2Page() {
        include './views/pages/student/registerStep2.page.php';
    }

    /**
     * An instance method for the view of localhost/student.php?register=step-3
     */
    public function registerStep3Page() {
        include './views/pages/student/registerStep3.page.php';
    }

    /**
     * An instance method for the view of localhost/student.php?register=finish
     */
    public function finishPage() {
        include './views/pages/student/finish.page.php';
    }

    /**
     * An instance method for the view of localhost/student.php?register=success
     */
    public function successPage() {
        include './views/pages/student/success.page.php';
    }
}