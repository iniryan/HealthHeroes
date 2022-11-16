class PencariDonor  {
         constructor(id,NamaLengkap, DateOfBirth, KotaKelahiran, Alamat, Phone, Email, NIK, KK, gender) {
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
FormPencariDonor.addEventListener('submit',(e)=>
{
    e.preventDefauld();
        let.NamaLengkap = document.getElementsByName('NamaLengkap').value;
        let.DateOfBirth = document.getElementsByName('DateOfBirth').value;
        let.KotaKelahiran = document.getElementsByName('KotaKelahiran').value;
        let.Alamat = document.getElementsByName('Alamat').value;
        let.Phone = document.getElementsByName('Phone').value;
        let.Email = document.getElementsByName('Email').value;
        let.NIK = document.getElementsByName('NIK').value;
        let.KK = document.getElementsByName('KK').value;
        let gender = document.querySelectorAll('input[name="gender"]:checked');
        let genderValue = [];
    gender.forEach((checkbox) => {
        genderValue.push(checkbox.value);
    });
    letaddPencariDonor = newFormPencariDonor(1, NamaLengkap, DateOfBirth, KotaKelahiran, Alamat, Phone, Email, NIK, KK, gender);
    console.log(addPencariDonor)
});
