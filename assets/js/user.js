class User {
    constructor(id, email, password) {
        this.id = id; 
        this.email = email;
        this.password = password;
    }

    login() {
        console.log(this.email, 'just logged in');
    }

    logout() {
        console.log(this.email, 'just logged out');
    }

    forgotPassword() {
        console.log(this.email, 'forgot password');
    }
}

class DataPendonor extends User {
    constructor(id, email, password, nama, nohp, golongan_darah, alamat, tanggal_lahir, 
        jenis_kelamin, berat_badan, riwayat_penyakit, riwayat_penyakit_keluarga, riwayat_alergi, 
        riwayat_alergi_keluarga, riwayat_operasi, riwayat_operasi_keluarga) {
        super(id, email, password);
        this.nama = nama;
        this.nohp = nohp;
        this.golongan_darah = golongan_darah;
        this.alamat = alamat;
        this.tanggal_lahir = tanggal_lahir;
        this.jenis_kelamin = jenis_kelamin;
        this.berat_badan = berat_badan;
        this.riwayat_penyakit = riwayat_penyakit;
        this.riwayat_penyakit_keluarga = riwayat_penyakit_keluarga;
        this.riwayat_alergi = riwayat_alergi;
        this.riwayat_alergi_keluarga = riwayat_alergi_keluarga;
        this.riwayat_operasi = riwayat_operasi;
        this.riwayat_operasi_keluarga = riwayat_operasi_keluarga;
    }

    donation() {
        console.log(this.email, 'can donation');
    }

    changeDataPendonor() {
        console.log(this.email, 'can change data pendonor');
    }
}

const u = new User(1, 'test@gmail.com', '123456');
u.login();

const adam = new DataPendonor(1, 'test@gmail.com', '123456', 'test', '081234567890', 'A', 'Jl. Test', '1990-01-01', 'Laki-laki', '50', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak');
adam.donation();
adam.changeDataPendonor();

// class Admin extends User {
//     constructor(id, email, password, role) {
//         super(id, email, password);
//         this.role = role;
//     }

//     deleteUser(user) {
//         console.log(user, 'can delete user');
//     }

//     changeRole(user) {
//         console.log(user, 'can change role user');
//     }
// }

// class Donor extends User {
//     constructor(id, email, password, role) {
//         super(id, email, password);
//         this.role = role;
//     }

//     donate() {
//         console.log(this.email, 'can donate');
//     }
// }

// class Volunteer extends User {
//     constructor(id, email, password, role) {
//         super(id, email, password);
//         this.role = role;
//     }

//     volunteer() {
//         console.log(this.email, 'can volunteer');
//     }
// }

// class News {
//     constructor(id, .....) {
//         ......
//     }

//     addNews(news) {
//         console.log(news, 'can add news');
//     }

//     deleteNews(news) {
//         console.log(news, 'can delete news');
//     }

//     updateNews(news) {
//         console.log(news, 'can update news');
//     }

//     findNews(news) {
//         console.log(news, 'can find news');
//     }

//     getNews(news) {
//         console.log(news, 'can get news');
//     }
// }

// class Event extends Admin {
//     constructor(id, email, password, role) {
//         super(id, email, password, role);
//     }

//     addEvent(event) {
//         console.log(event, 'can add event');
//     }

//     deleteEvent(event) {
//         console.log(event, 'can delete event');
//     }

//     updateEvent(event) {
//         console.log(event, 'can update event');
//     }

//     findEvent(event) {
//         console.log(event, 'can find event');
//     }

//     getEvent(event) {
//         console.log(event, 'can get event');
//     }
// }

// class Donation extends Admin {
//     constructor(id, email, password, role) {
//         super(id, email, password, role);
//     }

//     addDonation(donation) {
//         console.log(donation, 'can add donation');
//     }

//     deleteDonation(donation) {
//         console.log(donation, 'can delete donation');
//     }

//     updateDonation(donation) {
//         console.log(donation, 'can update donation');
//     }

//     findDonation(donation) {
//         console.log(donation, 'can find donation');
//     }

//     getDonation(donation) {
//         console.log(donation, 'can get donation');
//     }
// }

// class Volunteer extends Admin {
//     constructor(id, email, password, role) {
//         super(id, email, password, role);
//     }

//     addVolunteer(volunteer) {
//         console.log(volunteer, 'can add volunteer');
//     }

//     deleteVolunteer(volunteer) {
//         console.log(volunteer, 'can delete volunteer');
//     }

//     updateVolunteer(volunteer) {
//         console.log(volunteer, 'can update volunteer');
//     }

//     findVolunteer(volunteer) {
//         console.log(volunteer, 'can find volunteer');
//     }

//     getVolunteer(volunteer) {
//         console.log(volunteer, 'can get volunteer');
//     }
// }

// class findDonation extends Donor {
//     constructor(id, email, password, role) {
//         super(id, email, password, role);
//     }

//     findDonation(donation) {
//         console.log(donation, 'can find donation');
//     }
// }

// class Hospital extends Admin {
//     constructor(id, email, password, role) {
//         super(id, email, password, role);
//     }

//     addHospital(hospital) {
//         console.log(hospital, 'can add hospital');
//     }

//     deleteHospital(hospital) {
//         console.log(hospital, 'can delete hospital');
//     }

//     updateHospital(hospital) {
//         console.log(hospital, 'can update hospital');
//     }

//     findHospital(hospital) {
//         console.log(hospital, 'can find hospital');
//     }

//     getHospital(hospital) {
//         console.log(hospital, 'can get hospital');
//     }
// }
