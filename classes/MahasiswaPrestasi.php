<?php

require_once __DIR__ . '/Mahasiswa.php';

class MahasiswaPrestasi extends Mahasiswa
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

    public function hitungTagihSemester()
    {
        return $this->tarifUktNominal + 100000;
    }

    public function tampilkanSpesifikasiAkademik()
    {
        return "Mahasiswa Prestasi | Instansi: " . $this->namaInstansiBeasiswa .
               " | Minimal IPK: " . $this->minimalIpkSyarat;
    }

    public function getDaftarPrestasi($db)
    {
        $query = "SELECT * FROM mahasiswa WHERE jalur_pembayaran = 'Prestasi'";
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