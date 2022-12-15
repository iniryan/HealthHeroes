<?php
    class Berita {

        public $id;
        public $title;
        public $thumbnail;
        public $kategori;
        public $isiberita;
        public $author;
        public $tanggalwaktu;
        public $tag;

        public function __construct ($id, $title, $thumbnail, $kategori, $isiberita, $author, $tanggalwaktu, $tag)
        {
            $this->id           = $id;
            $this->title        = $title;
            $this->thumbnail    = $thumbnail;
            $this->kategori     = $kategori;
            $this->isiberita    = $isiberita;
            $this->author       = $author;
            $this->tanggalwaktu = $tanggalwaktu;
            $this->tag          = $tag;
        }

        public function addnews() {
            echo $this->author . 'can add news';
        }

        public function deletenews() {
            echo $this->author . 'can delete news';
        }
        
        public function updatenews() {
            echo $this->author . 'can update news';
        }
        
        public function findnews() {
            echo $this->author . 'can find news';
        }

        public function getnews() {
            echo $this->author . 'can get news';
        }
        
        public function like() {
            echo $this->author . 'user can like';
        }

        public function comment() {
            echo $this->author . 'user can comment';
        }

        public function share() {
            echo $this->author . 'user can share';
        }
    }
  
    


?>