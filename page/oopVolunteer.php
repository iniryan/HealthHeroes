<?php
    class formVolunteer {
        public $id;
        public $nama;
        public $kota_kelahiran;
        public $tanggal_lahir;
        public $gender;
        public $alamat_rumah;
        public $kota;
        public $no_hp;
        public $email;
        public $nik;
        public $no_kk;

        public function __construct($id, $nama, $kota_kelahiran, $tanggal_lahir, $gender, $alamat_rumah, $kota, $no_hp, $email, $nik, $no_kk) {
            $this->id = $id;
            $this->nama = $nama;
            $this->kota_kelahiran = $kota_kelahiran;
            $this->tanggal_lahir = $tanggal_lahir;
            $this->gender = $gender;
            $this->alamat_rumah = $alamat_rumah;
            $this->kota = $kota;
            $this->no_hp = $no_hp;
            $this->email = $email;
            $this->nik = $nik;
            $this->no_kk = $no_kk;
            
        }
        public function addEvent() {
            echo $this->name . 'can add Event';
        }
    
        public function deleteEvent() {
            echo $this->name . 'can delete Event';
        }
    
        public function getDataVolunteer() {
            echo $this->name . 'can get Data Volunteer';
        }
        
        public function findVolunteer() {
            echo $this->name . 'can find Volunteer';
        }
            
        public function changeDataVolunteer() {
            echo $this->name . 'can change data pendonor';
        }
        
        public function inputEvent() {
            echo $this->name . 'can input Event';
        }
    }
?>    