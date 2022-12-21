<?php 
    class Administrator extends User {
        // properties
        public $id;
        public $email;
        public $fullname;
        public $username;
        public $password;
        public $role;
        public $dateCreated;

        // constructor
        public function __construct($id, $email, $fullname, $username, $password, $role, $dateCreated) {
            $this->id = $id;
            $this->email = $email;
            $this->fullname = $fullname;
            $this->username = $username;
            $this->password = $password;
            $this->role = $role;
            $this->dateCreated = $dateCreated;
        }

        //delete user
        public function deleteUser($id) {
            echo 'delete user';
        }

        //update user
        public function updateUser($id) {
            echo 'update user';
        }

        //get user
        public function getUser($id) {
            echo 'get user';
        }

        //block user
        public function blockUser($id) {
            echo 'block user';
        }

        //find user
        public function findUser($id) {
            echo 'find user';
        }

        //change role user
        public function changeRoleUser($id) {
            echo 'change role user';
        }

        //change password
        public function changePassword($id) {
            echo 'change password';
        }
    }
?>