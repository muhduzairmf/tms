<?php
// include_once './models/User.model.php';

class Signup {

    private $name;
    private $email;
    private $password;
    private $title;

    public function __construct($name, $email, $password, $title) {
        $this->name = $name;        
        $this->email = $email;        
        $this->password = $password;
        $this->title = $title;
    }

    public function isUserExist() {

        // $users = new User();
        // $result = $users->retrieveOneUsers_whereEmail($this->email);

        // if ($result->num_rows > 0) {
        //     return true;
        // }

        // return false;
    }

    public function proceedSignup() {
        
        // Generate new salt
        // $default_salt = bin2hex(random_bytes(32)); 

        // Hash the password with sha256 algorithm
        // and mix with salt
        // * sha256 better for returning long hashed string
        // $hashed_passwd = hash('sha256', $default_salt . $this->password);

        // Concatenate the salt with the hashed password with salt
        // $salt_and_hashed_passwd = "${default_salt}:${hashed_passwd}";

        // Store the latest concatenation as a password in database
        // Insert a new user into database
        // $newUser = new User();
        // $msg = $newUser->insertNewUser($this->name, $this->email, $salt_and_hashed_passwd, $this->title);

        // if ($msg == "Error") {
        //     return;
        // }

    }

}
