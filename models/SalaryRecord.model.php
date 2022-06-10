<?php
include_once 'DbConfig.php';

/**
 * A model class for SalaryRecord table in database.
 */
class SalaryRecord extends DbConfig {
    private $id; // Primary Key
    private $monthOfWork;
    private $grossPay;
    private $perfomanceAllowance;
    private $bonus;
    private $kwsp;
    private $socso;
    private $amount;
    private $dateOfPay;
    private $teacherId; // Foreign Key

    public function insertSalaryRecord() {

    }

    public function retrieveAllSalaryRecord() {

    }

    public function modifySalaryRecord() {

    }

    public function deleteSalaryRecord() {
        
    }
}