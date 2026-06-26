<?php

require_once 'Mahasiswa.php';

class MahasiswaBidikMisi extends Mahasiswa
{
    private $golonganUkt;
    private $NamaWali;

    public function __construct(
            $id_Mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarifUktNominal
            $golonganUkt
            $NamaWali
    ) {
        parent::__construct(
            $id_Mahasiswa,
            $nama_mahasiswa,
            $nim,
            $semester,
            $tarifUktNominal
        );

        $this->golonganUkt = $golonganUkt;
        $this->NamaWali = $NamaWali;
    }

    // Getter
    public function getgolonganUkt()
    {
        return $this->golonganUkt;
    }

    public function getNamaWali()
    {
        return $this->NamaWali;
    }

    // Setter
    public function setgolonganUkt($golonganUkt)
    {
        $this->golonganUkt = $golonganUkt;
    }

    public function setNamaWali($NamaWali)
    {
        $this->NamaWali = $NamaWali;
    }

    // override abstract method
    public function hitungTotalBiaya()
    {
        return round($this->biayaPendaftaranDasar * 1.25);
    }

    public function tampilkanInfoJalur()
    {
        return "Kedinasan | SK: {$this->skIkatanDinas} | Instansi: {$this->instansiSponsor}";
    }

    public function getDaftarKedinasan($db)
    {
        $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pendaftaran = 'Kedinasan'";
        $result = $db->query($query);

        $data = [];

        if ($result) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

        return $data;
    }
}

?>