class PencariDonor  {
         constructor(NamaLengkap, DateOfBirth, KotaKelahiran, Alamat, Phone, Email, NIK, KK, gender,id,password,role) {
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