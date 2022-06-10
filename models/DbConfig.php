<?php

/**
 * A config class for connecting MySQL database
 */
class DbConfig {

    private $db_server = "localhost";
    private $db_user = "root";
    private $db_passwd = "";
    private $db_name = "tms";

    protected function createConnection() {
        // Create connection
        $conn = new mysqli($this->db_server, $this->db_user, $this->db_passwd, $this->db_name);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed : " . $conn->connect_error);
        }

        return $conn;
    }

    protected function closeConnection($conn) {
        $conn->close();
    }

}