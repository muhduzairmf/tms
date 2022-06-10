<?php

/**
 * A view class for clerk route (clerk.php)
 */
class ClerkUI {
    /**
     * An instance method for the view of localhost/clerk.php?tab=home&section=main
     */
    public function homePage() {
        include './views/pages/clerk/home.page.php';
    }

    /**
     * An instance method for the view of localhost/clerk.php?tab=student&section=register-list
     */
    public function registerListPage() {
        include './views/pages/clerk/registerList.page.php';
    }

    /**
     * An instance method for the view of localhost/clerk.php?tab=student&section=fee-payment
     */
    public function feePaymentPage() {
        include './views/pages/clerk/feePayment.page.php';
    }

    /**
     * An instance method for the view of localhost/clerk.php?tab=staff&section=add-new
     */
    public function addNewPage() {
        include './views/pages/clerk/addNew.page.php';
    }

    /**
     * An instance method for the view of localhost/clerk.php?tab=staff&section=teacher-salary-payment
     */
    public function teacherSalaryPaymentPage() {
        include './views/pages/clerk/salaryPayment.page.php';
    }

    /**
     * An instance method for the view of localhost/clerk.php?tab=timetable&section=adjust-timetable
     */
    public function adjustTimetablePage() {
        include './views/pages/clerk/adjustTimetable.page.php';
    }

    /**
     * An instance method for the view of localhost /clerk.php?tab=timetable&section=check-teacher-availability
     */
    public function checkTeacherAvailabilityPage() {
        include './views/pages/clerk/checkTeacherAvailability.page.php';
    }

    /**
     * An instance method for the view of localhost/clerk.php?tab=setting&section=about-me
     */
    public function aboutMePage() {
        include './views/pages/clerk/aboutMe.page.php';
    }

    /**
     * An instance method for the view of localhost/clerk.php?tab=setting&section=change-password
     */
    public function changePasswordPage() {
        include './views/pages/clerk/changePassword.page.php';
    }
}