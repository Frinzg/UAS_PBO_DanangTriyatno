<?php

class MahasiswaMandiri extends Mahasiswa
{
    private $nomorKipKuliah;
    private $danaSakuSubsidi;

    public function __construct(
        $id_Mahasiswa,
        $nama_mahasiswa,
        $nim,
        $semester,
        $tarifUktNominal,
        $nomorKipKuliah,
        $danaSakuSubsidi
    ){
        parent::__construct(
            $id_Mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarifUktNominal
        );

        $this->nomorKipKuliah = $nomorKipKuliah;
        $this->danaSakuSubsidi = $danaSakuSubsidi;
    }

    public function hitungTotalBiaya()
    {
        return $this->tarifUktNominal;
    }

    public function tampilkanInfoJalur()
    {
        return "Mandiri";
    }
}
?>