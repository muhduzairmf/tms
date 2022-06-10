<?php

/**
 * A view class for manager route (manager.php)
 */
class ManagerUI {
    /**
     * An instance method for the view of localhost/manager.php?tab=home&section=main
     */
    public function homePage() {
        include './views/pages/manager/home.page.php';
    }
    
    /**
     * An instance method for the view of localhost/manager.php?tab=teacher&section=approve-salary-payment
     */
    public function approveSalaryPaymentPage() {
        include './views/pages/manager/approveSalaryPayment.page.php';
    }
     
    /**
     * An instance method for the view of localhost/manager.php?tab=timetable&section=approve-new-timetable
     */
    public function approveNewTimetablePage() {
        include './views/pages/manager/approveNewTimetable.page.php';
    }

    /**
     * An instance method for the view of localhost/manager.php?tab=timetable&section=current-timetable
     */
    public function currentTimetablePage() {
        include './views/pages/manager/currentTimetable.page.php';
    }
    
     /**
     * An instance method for the view of localhost/manager.php?tab=setting&section=about-me
     */
    public function aboutMePage() {
        include './views/pages/manager/aboutMe.page.php';
    }

    /**
     * An instance method for the view of localhost/manager.php?tab=setting&section=change-password
     */
    public function changePasswordPage() {
        include './views/pages/manager/changePassword.page.php';
    }

}