<?php
include_once 'DbConfig.php';

/**
 * A model class for Subject table in database.
 */
class Subject extends DbConfig {
    private $id; // Primary Key
    private $name;
    private $timeSchedule;
    private $categoryId; // Foreign Key
    private $teacherId; // Foreign Key

    public function insertSubject() {

    }

    public function retrieveAllSubject() {

    }

    public function modifySubject() {

    }

    public function deleteSubject() {
        
    }
}