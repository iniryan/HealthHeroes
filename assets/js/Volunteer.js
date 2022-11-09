class DataVolunteer {
    constructor (nama, kota_kelahiran, tanggal_lahir, gender, alamat_rumah, kota, no_hp, email, nik, no_kk) {
    
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

    deleteEvent() {
        console.log( 'can delete Event');
    }

    getDataVolunteer() {
        console.log( 'can get Data Volunteer');
    }
    
    findVolunteer() {
        console.log( 'can find Volunteer');
    }
    
    inputEvent() {
        console.log( 'can input Event');
    }

    changeDataVolunteer() {
        console.log( 'can change data pendonor');
    }
}