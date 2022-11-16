class DataVolunteer {
    constructor (id, nama, kota_kelahiran, tanggal_lahir, gender, alamat_rumah, kota, no_hp, email, nik, no_kk) {
        
        this.id = id;
        this.nama = nama;
        this.kota_kelahiran = kota_kelahiran;
        this.tanggal_lahir = tanggal_lahir;
        this.gender = gender;
        this.alamat_rumah = alamat_rumah;
        this.kota = kota;
        this.no_hp = no_hp;
        this.email = email;
        this.nik = nik;
        this.no_kk = no_kk;
    }

    addEvent() {
        console.log( 'can add Event');
    }

    deleteEvent(id) {
        console.log( 'can delete Event');
    }

    getDataVolunteer() {
        console.log( 'can get Data Volunteer');
    }
    
    findVolunteer(id) {
        console.log( 'can find Volunteer');
    }
        
    changeDataVolunteer(id) {
        console.log( 'can change data pendonor');
    }
    
    inputEvent() {
        console.log( 'can input Event');
    }
}

let FormRS = document.getElementById('FormRS');

FormRS.addEventListener('submit', (e) => {
    e.preventDefault();
    let nama = document.getElementById('nama').value;
    let kota_kelahiran = document.getElementById('kota_kelahiran').value;
    let tanggal_lahir = document.getElementById('tanggal_lahir').value;;
    let alamat_rumah = document.getElementById('alamat_rumah').value;
    let kota = document.getElementById('kota').value;
    let no_hp = document.getElementById('no_hp').value;
    let email = document.getElementById('email').value;
    let nik = document.getElementById('nik').value;
    let no_kk = document.getElementById('no_kk').value;
    let checkedValue = null; 
    let gender = document.querySelectorAll('input[name="gender"]:checked');
    let genderValue = [];
    gender.forEach((checkbox) => {
        genderValue.push(checkbox.value);
    });
    let addVolunteer = new Volunteer(1, nama, kota_kelahiran, tanggal_lahir, alamat_rumah, kota, no_hp, email, nik, no_kk, genderValue);
    console.log(addVolunteer);
});
