
<?php
require '../class/Database.php';
   class FormRS {
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

    public function __construct($NamaRumahSakit, $Alamat, $Fasilitas, $Deskripsi, $Website, $Email, $Telepon, $Provinsi, $Kota, $Kecamatan, $Kelurahan, $KodePos) {
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
    $database = new Database('localhost', 'healthheroes', 'root', '');
    $db = $database->getConnection();
    $query = "INSERT INTO `rs` (`namaRS`, `deskripsi`, `website`, `email`, `notelp`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kelurahan`, `kodepos`, `dateCreated` ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
    $statement = $db->prepare($query);
    $parameters = [$this->NamaRumahSakit,$this->Deskripsi,$this->Website,$this->Email,$this->Telepon,$this->Alamat,$this->Provinsi,$this->Kota,$this->Kecamatan,$this->Kelurahan,$this->KodePos,date('Y-m-d')];
    return $statement->execute($parameters); 
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

//RumahSakit = newRumahSakit ("223", "rs ibunda", )

    
