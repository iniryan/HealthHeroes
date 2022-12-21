<?php

require '../class/Database.php';
    class DataPendonor {
        public $NamaLengkap;
        public $DateOfBirth;
        public $KotaKelahiran;
        public $Alamat;
        public $Phone;
        public $Email;
        public $NIK;
        public $KK;
        public $Kota;
        public $Gender;

        public function __construct($NamaLengkap, $DateOfBirth, $KotaKelahiran, $Alamat, $Phone, $Email, $NIK, $KK, $Kota, $Gender) {
            $this->NamaLengkap = $NamaLengkap;
            $this->DateOfBirth = $DateOfBirth;
            $this->KotaKelahiran = $KotaKelahiran;
            $this->Alamat = $Alamat;
            $this->Phone = $Phone;
            $this->Email = $Email;
            $this->NIK = $NIK;
            $this->KK = $KK;
            $this->Kota = $Kota;
            $this->Gender = $Gender;
        }
        

        public function donation() {
            $database = new Database('localhost', 'healthheroes', 'root', '');
            $db = $database->getConnection();
            $query = "INSERT INTO `mitra` (`nama`, `dateofbirth`, `kotakelahiran`, `alamatrumah`, `phone`, `email`, `nik`, `nokk`, `kota`, `gender`, `status`, `dateCreated` ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
            $statement = $db->prepare($query);
            $parameters = [$this->NamaLengkap,$this->DateOfBirth,$this->KotaKelahiran,$this->Alamat,$this->Phone,$this->Email,$this->NIK,$this->KK,$this->Kota,$this->Gender ,1, date('Y-m-d')];
            return $statement->execute($parameters); 
        }

        public function changeDataPendonor() {
            echo $this->name . ' can changeDataPendonor';
        }

    }
?>