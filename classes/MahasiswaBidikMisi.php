<?php

require_once 'Mahasiswa.php';

class MahasiswaBidikMisi extends Mahasiswa
{
    private $golonganUkt;
    private $namaWali;

    public function __construct(
        $id_mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarifUktNominal,
        $golonganUkt,
        $namaWali
    ) {
        parent::__construct(
            $id_mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarifUktNominal
        );

        $this->golonganUkt = $golonganUkt;
        $this->namaWali = $namaWali;
    }

    // =========================
    // WAJIB dari Mahasiswa
    // =========================

    public function hitungTagihSemester()
    {
        // contoh: Bidik Misi dapat potongan UKT
        return $this->tarifUktNominal * 0.5;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Mahasiswa Bidik Misi | Golongan UKT: "
            . $this->golonganUkt .
            " | Wali: " . $this->namaWali;
    }
}

?>