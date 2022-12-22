<?php   
    require 'Database.php';
    require 'User.php';
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
            $database = new Database('localhost', 'healthheroes', 'root', '');
            $db = $database->getConnection();
            $query = "DELETE FROM users WHERE id = ?";
            $stmt = $db->prepare($query);
            $params = [$id];
            return $stmt->execute($params);
        }

        //update user
        public function updateUser($id) {
            $database = new Database('localhost', 'healthheroes', 'root', '');
            $db = $database->getConnection();
            $query = "UPDATE users SET email = ?, fullname = ?, username = ?, password = ?, role = ?, dateCreated = ? WHERE id = ?";
            $stmt = $db->prepare($query);
            $params = [$this->email, $this->fullname, $this->username, password_hash($this->password, PASSWORD_DEFAULT), $this->role, $this->dateCreated, $id];
            return $stmt->execute($params);
        }

        //get user
        public static function getUser() {
            $database = new Database('localhost', 'healthheroes', 'root', '');
            $db = $database->getConnection();
            $query = "SELECT * FROM users";
            $stmt = $db->prepare($query);
            return $stmt->fetchAll();
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