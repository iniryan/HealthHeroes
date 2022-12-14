<?php
    // author: ryn
    class User {
        public $id;
        public $email;
        public $fullname;
        public $password;
        public $role;
        public $dateCreated;

        public function __construct($id, $email, $fullname, $password, $role, $dateCreated) {
            $this->id = $id;
            $this->email = $email;
            $this->fullname = $fullname;
            $this->password = $password;
            $this->role = $role;
            $this->dateCreated = $dateCreated;
        }
        
        public function signup() {
            echo $this->name . ' signed up';
        }

        public function login() {
            echo $this->name . ' logged in';
        }

        public function logout() {
            echo $this->name . ' logged out';
        }

        public function forgotPassword() {
            echo $this->name . ' forgot password';
        }

        public function __destruct() {
            echo 'destructor ran...';
        }
    }

    $user1 = new User(1, 'halo@test.com', 'Halo', '123', 'admin', '2022-01-01');
    $user1->signup();
    $user1->login();
    echo $user1->id;
    echo $user1->email;
    echo $user1->fullname;
    echo $user1->password;
    echo $user1->role;
    echo $user1->dateCreated;
    $user1->forgotPassword();
    $user1->logout();
    unset($user1);
?>