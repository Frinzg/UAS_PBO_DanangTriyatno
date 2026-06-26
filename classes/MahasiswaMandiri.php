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

    public function hitungTagihSemester()
    {
        return $this->tarifUktNominal + 100000;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Mandiri";
    }
    
    public function getMandiri($db)
    {
    $query = "SELECT * FROM tabel_pendaftaran WHERE jalur_pembayaran = 'Mandiri'";
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