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


    public function hitungTagihSemester()
    {

        return $this->tarifUktNominal * 0.5;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Mahasiswa Bidik Misi | Golongan UKT: "
            . $this->golonganUkt .
            " | Wali: " . $this->namaWali;
    }
    public function getBidikMisi($db)
    {
    $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pembayaran = 'BidikMisi'";
    $result = $db->query($query);

    $data = [];

    if ($result) 
        {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }

    return $data;
    }
}

?>