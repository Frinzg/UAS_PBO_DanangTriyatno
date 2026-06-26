<?php

require_once 'Pendaftaran.php';

class PendaftaranKedinasan extends Pendaftaran
{
    private $skIkatanDinas;
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

    public function getSkIkatanDinas()
    {
        return $this->skIkatanDinas;
    }

    public function getInstansiSponsor()
    {
        return $this->instansiSponsor;
    }

    public function setSkIkatanDinas($skIkatanDinas)
    {
        $this->skIkatanDinas = $skIkatanDinas;
    }

    public function setInstansiSponsor($instansiSponsor)
    {
        $this->instansiSponsor = $instansiSponsor;
    }

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