<?php
include_once 'DbConfig.php';

/**
 * A model class for Student table in database.
 */
class Student extends DbConfig {
    private $id; // Primary Key
    private $name;
    private $icNumber;
    private $age;
    private $phoneNumber;
    private $email;
    private $homeAddress;
    private $schoolAddress;
    private $parentName;
    private $parentPhoneNumber;
    private $categoryId; // Foreign Key

    public function insertStudent() {

    }

    public function retrieveAllStudent() {

    }

    public function modifyStudent() {

    }

    public function deleteStudent() {
        
    }
}