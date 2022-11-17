class PencariDonor  {
         constructor(id,NamaLengkap, DateOfBirth, Domisili, KotaKelahiran, Alamat, Phone, Email, NIK, KK, gender) {
         this.id = id;
         this.NamaLengkap = NamaLengkap;
         this.DateOfBirth = DateOfBirth;
         this.Domisili = Domisili;
         this.KotaKelahiran = KotaKelahiran;
         this.Alamat = Alamat;
         this.Phone = Phone;
         this.Email = Email;
         this.NIK = NIK;
         this.KK = KK;
         this.gender = gender;
    }
         changeData() {
         console.log('can change data');
         }
    
         findDonation() {
             console.log('can find donation');
         }
    
         getDonation() {
             console.log('can get donation');
         }
}
let FormPencariDonor = document.getElementById('FormPencariDonor');
if(FormPencariDonor) {  
    FormPencariDonor.addEventListener('submit', formPencari);
}

function formPencari(e)
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
        let gender = document.querySelectorAll('input[name="jenis_kelamin"]:checked');
        let genderValue = [];
        gender.forEach((checkbox) => {
            genderValue.push(checkbox.value);
        });
        let addPencariDonor = new PencariDonor(1, NamaLengkap, DateOfBirth, Domisili, KotaKelahiran, Alamat, Phone, Email, NIK, KK, gender);
        console.log(addPencariDonor)
}
