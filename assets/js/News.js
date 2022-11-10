class News {
    constructor(id, title, thumbnail, kategori, isiberita, author, tanggalwaktu, tag)
    {
        this.id           = id;
        this.title        = title;
        this.thumbnail    = thumbnail;
        this.kategori     = kategori;
        this.isiberita    = isiberita;
        this.author       = author;
        this.tanggalwaktu = tanggalwaktu;
        this.tag          = tag;
    }
    

    addNews() {
        console.log('can add news');
    }
    deleteNews(id) {
        console.log('can delete news');
    }
    updateNews(id) {
        console.log('can update news');
    }
    findNews(id) {
        console.log('can find news');
    }
    getNews() {
        console.log('can get news');
    }
    like() {
        console.log('user can like');
    }
    comment() {
        console.log('user can comment');
    }
    share() {
        console.log('user can share');
    }
}
