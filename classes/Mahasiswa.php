<?php
    abstract class Mahasiswa
    {
        protected $id_mahasiswa;
        protected $nama_mahasiswa;
        protected $nim;
        protected $semester;
        protected $tarifUktNominal;
        
        abstract public function hitungTagihSemester();
        abstract public function tampilkanSpesifikasiAkademik();
    }
?>