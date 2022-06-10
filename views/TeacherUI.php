<?php

/**
 * A view class for teacher route (teacher.php)
 */
class TeacherUI {
    /**
     * An instance method for the view of localhost/teacher.php?tab=home&section=main
     */
    public function homePage() {
        include './views/pages/teacher/home.page.php';
    }

    /**
     * An instance method for the view of localhost/teacher.php?tab=my-class&section=my-subject
     */
    public function mySubjectPage() {
        include './views/pages/teacher/mySubject.page.php';
    }

    /**
     * An instance method for the view of localhost/teacher.php?tab=my-class&section=student-attendance
     */
    public function studentAttendancePage() {
        include './views/pages/teacher/studentAttendance.page.php';
    }

    /**
     * An instance method for the view of localhost/teacher.php?tab=my-class&section=my-student-list
     */
    public function myStudentListPage() {
        include './views/pages/teacher/myStudentList.page.php';
    }

    /**
     * An instance method for the view of localhost/teacher.php?tab=timetable&section=confirm-availability
     */
    public function confirmAvailabilityPage() {
        include './views/pages/teacher/confirmAvailability.page.php';
    }

    /**
     * An instance method for the view of localhost/teacher.php?tab=salary&section=salary-payment-history
     */
    public function salaryPaymentHistoryPage() {
        include './views/pages/teacher/salaryPaymentHistroy.page.php';
    }

    /**
     * An instance method for the view of localhost/teacher.php?tab=setting&section=about-me
     */
    public function aboutMePage() {
        include './views/pages/teacher/aboutMe.page.php';
    }

    /**
     * An instance method for the view of localhost /teacher.php?tab=setting&section=change-password
     */
    public function changePasswordPage() {
        include './views/pages/teacher/changePassword.page.php';
    }
   
}