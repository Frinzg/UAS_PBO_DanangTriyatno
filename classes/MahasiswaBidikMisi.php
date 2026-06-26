<?php

require_once 'Pendaftaran.php';

class MahasiswaBidikMisi extends Mahasiswa
{
    private $;
    private $instansiSponsor;

    public function __construct(
        $id_pendaftaran,
        $nama_calon,
        $asal_sekolah,
        $nilai_ujian,
        $biayaPendaftaranDasar,
        $skIkatanDinas,
        $instansiSponsor
    ) {
        parent::__construct(
            $id_pendaftaran,
            $nama_calon,
            $asal_sekolah,
            $nilai_ujian,
            $biayaPendaftaranDasar
        );

        $this->skIkatanDinas = $skIkatanDinas;
        $this->instansiSponsor = $instansiSponsor;
    }

    // Getter
    public function getSkIkatanDinas()
    {
        return $this->skIkatanDinas;
    }

    public function getInstansiSponsor()
    {
        return $this->instansiSponsor;
    }

    // Setter
    public function setSkIkatanDinas($skIkatanDinas)
    {
        $this->skIkatanDinas = $skIkatanDinas;
    }

    public function setInstansiSponsor($instansiSponsor)
    {
        $this->instansiSponsor = $instansiSponsor;
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