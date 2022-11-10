class formRumahSakit{
    constructor(id,NamaRumahSakit, Alamat, Fasilitas, Deskripsi, Website, Email, Telepon){
        this.id = id;
        this.NamaRumahSakit = NamaRumahSakit;
        this.Alamat = Alamat;
        this.Fasilitas = Fasilitas;
        this.Deskripsi = Deskripsi;
        this.Website = Website;
        this.Email = Email;
        this.Telepon = Telepon;
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
