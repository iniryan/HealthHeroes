class formRumahSakit{
    constructor(NamaRumahSakit, Alamat, Fasilitas, Deskripsi, Website, Email, Telepon){
    super(id,email,password);
        this.NamaRumahSakit = NamaRS;
        this.Alamat = AlamatRS;
        this.Fasilitas = FasilitasRS;
        this.Deskripsi = DeskripsiRS;
        this.Website = WebsiteRS;
        this.Email = EmailRS;
        this.Telepon = TeleponRS;
    }
    RumahSakit(){
        console.log(this.email, 'can add rumahSakit');
    }

    changedataRumahSakit(){
        console.log(this.email, 'can cange data rumah sakit');
    }
}