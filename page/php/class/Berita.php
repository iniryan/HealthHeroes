<?php

    require '../class/Database.php';
    class Berita {

        public $title;
        public $thumbnail;
        public $kategori;
        public $isiberita;
        public $author;
        public $tanggalwaktu;
        public $tag;

        public function __construct ($title, $thumbnail, $kategori, $isiberita, $author, $tanggalwaktu, $tag)
        {
            $this->title        = $title;
            $this->thumbnail    = $thumbnail;
            $this->kategori     = $kategori;
            $this->isiberita    = $isiberita;
            $this->author       = $author;
            $this->tanggalwaktu = $tanggalwaktu;
            $this->tag          = $tag;
        }

        public function addnews() {
            $database = new Database('localhost', 'healthheroes', 'root', '');
            $db = $database->getConnection();
            $query = "INSERT INTO `berita` (`judul`, `thumb`, `kategori`, `isiberita`, `author`, `date`, `tag` ) VALUES (?,?,?,?,?,?,?)";
            $statement = $db->prepare($query);
            $parameters = [$this->title, $this->thumbnail, $this->kategori, $this->isiberita, $this->author, $this->tanggalwaktu, $this->tag];
            return $statement->execute($parameters);
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