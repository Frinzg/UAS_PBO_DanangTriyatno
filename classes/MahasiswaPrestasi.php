<?php

require_once 'Mahasiswa.php';

class MahasiswaMandiri extends Mahasiswa
{
    private $namaInstansiBeasiswa;
    private $minimalIpkSyarat;

    public function __construct(
        $id_mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarifUktNominal,
        $namaInstansiBeasiswa,
        $minimalIpkSyarat
    ) {
        parent::__construct(
            $id_mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarifUktNominal
        );

        $this->namaInstansiBeasiswa = $namaInstansiBeasiswa;
        $this->minimalIpkSyarat = $minimalIpkSyarat;
    }

    // =========================
    // WAJIB dari Mahasiswa.php
    // =========================

    public function hitungTagihSemester()
    {
        return $this->tarifUktNominal + 100000;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Mahasiswa Mandiri | Instansi: " . $this->namaInstansiBeasiswa .
               " | Minimal IPK: " . $this->minimalIpkSyarat;
    }
}

?>