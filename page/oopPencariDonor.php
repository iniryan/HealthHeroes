<?php
    class DataPendonor {
        public $id;
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

        public function __construct($id, $NamaLengkap, $DateOfBirth, $KotaKelahiran, $Alamat, $Phone, $Email, $NIK, $KK, $Kota, $Gender) {
            $this->id = $id;
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
        

        public function changeData() {
            echo $this->name . ' can changeData';
        }

        public function findDonation() {
            echo $this->name . ' can findDonation';
        }
        public function getDonation() {
            echo $this->name . ' can getDonation';
        }

    }
?>