<?php
include_once 'DbConfig.php';

/**
 * A model class for FeeRecord table in database.
 */
class FeeRecord extends DbConfig {
    private $id; // Primary Key
    private $monthToPay;
    private $amountToPay;
    private $dateOfPay;
    private $studentId; // Foreign Key

    public function insertFeeRecord() {

    }

    public function retrieveAllFeeRecord() {

    }

    public function modifyFeeRecord() {

    }

    public function deleteFeeRecord() {
        
    }
}