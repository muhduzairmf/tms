<?php
include_once 'DbConfig.php';

/**
 * A model class for Attendance table in database.
 */
class Attendance extends DbConfig {
    private $id; // Primary Key
    private $dateOfClass;
    private $teacherId; // Foreign Key

    public function insertAttendance() {

    }

    public function retrieveAllAttendance() {

    }

    public function modifyAttendance() {

    }

    public function deleteAttendance() {

    }
}