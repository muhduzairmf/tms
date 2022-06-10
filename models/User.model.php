<?php
include_once 'DbConfig.php';

/**
 * A model class for User table in database.
 */
class User extends DbConfig {
    private $id; // Primary Key
    private $email;
    private $password;
    private $title;

    public function retrieveAllUser() {

    }

    public function modifyUser() {

    }
}
