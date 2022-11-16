class formRumahSakit{
    constructor(id, NamaRumahSakit, Alamat, Fasilitas, Deskripsi, Website, Email, Telepon, Provinsi, Kota, Kecamatan, Kelurahan, KodePos){
        this.id = id;
        this.NamaRumahSakit = NamaRumahSakit;
        this.Alamat = Alamat;
        this.Fasilitas = Fasilitas;
        this.Deskripsi = Deskripsi;
        this.Website = Website;
        this.Email = Email;
        this.Telepon = Telepon;
        this.Provinsi = Provinsi;
        this.Kota = Kota;
        this.Kecamatan = Kecamatan;
        this.Kelurahan = Kelurahan;
        this.KodePos = KodePos;
    }

    addRumahSakit(){
        console.log('can add rumahSakit');
    }

    editRumahSakit(id){
        console.log('can edit rumah sakit')
    }

    deleteRumahSakit(id){
        console.log('can delete rumah sakit')
    }

    findRumahSakit(id){
        console.log('can find rumah sakit')
    }

    getRumahSakit(){
        console.log('can get rumah sakit')
    }

    changedataRumahSakit(id){
        console.log('can cange data rumah sakit');
    }
}

let FormRS = document.getElementById('FormRS');

FormRS.addEventListener('submit', (e) => {
    e.preventDefault();
    let namaRS = document.getElementById('namaRS').value;
    let Deskripsi = document.getElementById('deskripsi').value;
    let Website = document.getElementById('website').value;
    let Email = document.getElementById('email').value;
    let Telepon = document.getElementById('notelp').value;
    let Alamat = document.getElementById('alamat').value;
    let Provinsi = document.getElementById('provinsi').value;
    let Kota = document.getElementById('kota').value;
    let Kecamatan = document.getElementById('kecamatan').value;
    let Kelurahan = document.getElementById('kelurahan').value;
    let KodePos = document.getElementById('kodepos').value;
    let checkedValue = null; 
    let Fasilitas = document.querySelectorAll('input[name="fasilitas"]:checked');
    let FasilitasValue = [];
    Fasilitas.forEach((checkbox) => {
        FasilitasValue.push(checkbox.value);
    });
    let addRS = new formRumahSakit(1, namaRS, Alamat, FasilitasValue, Deskripsi, Website, Email, Telepon, Provinsi, Kota, Kecamatan, Kelurahan, KodePos);
    console.log(addRS);
});