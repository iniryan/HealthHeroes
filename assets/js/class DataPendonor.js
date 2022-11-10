class DataPendonor {
    constructor(NamaLengkap, DateOfBirth, KotaKelahiran, Alamat, Phone, Email, NIK, KK, gender){
        this.NamaLengkap = NamaLengkap;
        this.DateOfBirth = DateOfBirth;
        this.KotaKelahiran = KotaKelahiran;
        this.Alamat = Alamat;
        this.Phone = Phone;
        this.Email = Email;
        this.NIK = NIK;
        this.KK = KK;
        this.gender = gender;
    }
    donation() {
        console.log('can donation');
    }

    changeDataPendonor() {
        console.log('can change data pendonor');
    }
}

