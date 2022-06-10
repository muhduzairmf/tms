<?php
include_once 'DbConfig.php';

/**
 * A model class for Teacher table in database.
 */
class Teacher extends DbConfig {
    private $id; // Primary Key
    private $name;
    private $icNumber;
    private $age;
    private $phoneNumber;
    private $email;
    private $maritalStatus;
    private $citizenship;
    private $eduLevel;
    private $userId; // Foreign Key

    public function insertTeacher() {

    }

    public function retrieveAllTeacher() {

    }

    public function modifyTeacher() {

    }

    public function deleteTeacher() {
        
    }
}