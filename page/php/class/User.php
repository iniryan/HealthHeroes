<?php
    // author: ryn
    require 'Database.php';
    class User {
        // properties
        public $email;
        public $fullname;
        public $username;
        public $password;
        public $role;
        public $dateCreated;

        // constructor
        public function __construct($email, $fullname, $username, $password, $role, $dateCreated) {
            $this->email = $email;
            $this->fullname = $fullname;
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
            $this->dateCreated = $dateCreated;
        }

        //function signup
        public function signup() {
            //check Null
            
        }

        //function login
        public function login() {
            echo $this->name . ' logged in';
        }

        //function logout
        public function logout() {
            echo $this->name . ' logged out';
        }

        //function forgot password
        public function forgotPassword() {
            echo $this->name . ' forgot password';
        }
    }
?>