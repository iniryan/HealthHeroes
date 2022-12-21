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
            //insert to database
            $database = new Database('localhost', 'healthheroes', 'root', '');
            $db = $database->getConnection();
            $query = "INSERT INTO users (email, fullname, username, password, role, dateCreated) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $db->prepare($query);
            // $params = [$this->email, $this->fullname, $this->username, $this->password, $this->role, $this->dateCreated];
            //encrypt password
            $params = [$this->email, $this->fullname, $this->username, password_hash($this->password, PASSWORD_DEFAULT), $this->role, $this->dateCreated];
            return $stmt->execute($params);
        }

        //function login
        public function login() {
            //login from database
            $database = new Database('localhost', 'healthheroes', 'root', '');
            $db = $database->getConnection();
            $query = "SELECT * FROM users WHERE email = :email AND password = :password";
            $stmt = $db->prepare($query);
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':password', $this->password);
            $stmt->execute();
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if ($row) {
                session_start();
                $_SESSION['email'] = $row['email'];
                $_SESSION['role'] = $row['role'];
                $url = 'http://localhost/HealthHeroes';
                header('Location: '.$url.'/page/php/home.php');
            } else {
                echo 'Email atau password salah';
            }
        }

        //function logout
        public function logout() {
            //destroy session
            session_start();
            session_destroy();
        }

        //function forgot password
        public function forgotPassword() {
            echo 'forgot password';
        }
    }
?>