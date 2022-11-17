class DataPendonor {
    constructor(id,NamaLengkap, DateOfBirth, KotaKelahiran, Alamat, Phone, Email, NIK, KK, gender, Domisili){
        this.id = id;
        this.NamaLengkap = NamaLengkap;
        this.DateOfBirth = DateOfBirth;
        this.KotaKelahiran = KotaKelahiran;
        this.Alamat = Alamat;
        this.Phone = Phone;
        this.Email = Email;
        this.NIK = NIK;
        this.KK = KK;
        this.gender = gender;
        this.Domisili = Domisili;
    }
    donation() {
        console.log('can donation');
    }

    changeDataPendonor() {
        console.log('can change data pendonor');
    }
}
let FormDataPendonor = document.getElementById('DataPendonor');
if (FormDataPendonor) {
    FormDataPendonor.addEventListener('submit', formInput);
}    

function formInput(e) 
    {
        e.preventDefault();
            let NamaLengkap = document.getElementById('NamaLengkap').value;
            let DateOfBirth = document.getElementById('DateOfBirth').value;
            let KotaKelahiran = document.getElementById('KotaKelahiran').value;
            let Alamat = document.getElementById('Alamat').value;
            let Phone = document.getElementById('Phone').value;
            let Email = document.getElementById('Email').value;
            let NIK = document.getElementById('NIK').value;
            let KK = document.getElementById('KK').value;
            let Domisili = document.getElementById('Kota').value;
            let gender = document.querySelectorAll('input[name="gender"]:checked');
            let genderValue = [];
            gender.forEach((checkbox) => {
                genderValue.push(checkbox.value);
            });
            let addDataPendonor = new DataPendonor(1, NamaLengkap, DateOfBirth, KotaKelahiran, Alamat, Phone, Email, NIK, KK, genderValue, Domisili);
            console.log(addDataPendonor)
    }
