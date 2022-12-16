<?php
    class Kategori {
        public $kategori;
        public $deskripsi;
        public $created_at;

        public function __construct($kategori, $deskripsi, $created_at) {
            $this->kategori = $kategori;
            $this->deskripsi = $deskripsi;
            $this->created_at = $created_at;
        }

        public function createKategori()
        {
            echo "Kategori berhasil ditambahkan";
        }

        public function updateKategori()
        {
            echo "Kategori berhasil diupdate";
        }

        public function deleteKategori()
        {
            echo "Kategori berhasil dihapus";
        }

        public function getKategori()
        {
            echo "Kategori berhasil didapatkan";
        }

        public function findKategori()
        {
            echo "Kategori berhasil ditemukan";
        }
    }
?>