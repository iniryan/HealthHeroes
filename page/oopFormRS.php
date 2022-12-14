<?php
//id, NamaRumahSakit, Alamat, Fasilitas, Deskripsi, Website, Email, Telepon, Provinsi, Kota, Kecamatan, Kelurahan, KodePos
   class formRS {
    public $id;
    public $NamaRumahSakit;
    public $Alamat;
    public $Fasilitas;
    public $Deskripsi;
    public $Website;
    public $Email;
    public $Telepon;
    public $Provinsi;
    public $Kota;
    public $Kecamatan;
    public $Kelurahan;
    public $KodePos;

    public function __construct($id, $NamaRumahSakit, $Alamat, $Fasilitas, $Deskripsi, $Website, $Email, $Telepon, $Provinsi, $Kota, $Kecamatan, $Kelurahan, $KodePos) {
        $this->id = $id;
        $this->NamaRumahSakit = $NamaRumahSakit;
        $this->Alamat = $Alamat;
        $this->Fasilitas = $Fasilitas;
        $this->Deskripsi = $Deskripsi;
        $this->Website = $Website;
        $this->Email = $Email;
        $this->Telepon = $Telepon;
        $this->Provinsi = $Provinsi;
        $this->Kota = $Kota;
        $this->Kecamatan = $Kecamatan;
        $this->Kelurahan = $Kelurahan;
        $this->KodePos = $KodePos;
    }

    public function addRumahSakit() {
        echo $this->name . ' add rumahSakit';
    }

    public function editRumahSakit() {
        echo $this->name . ' edit rumah sakit';
    }

    public function deleteRumahSakit() {
        echo $this->name . ' delete rumah sakit';
    }

    public function findRumahSakit() {
        echo $this->name . ' find rumah sakit';
    }

    public function getRumahSakit() {
        echo $this->name . ' get rumah sakit';
    }

    public function changedataRumahSakit() {
        echo $this->name . ' change data rumah sakit';
    }
}


    
