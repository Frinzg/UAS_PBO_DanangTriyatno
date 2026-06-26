<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'databases/database.php';

require_once 'classes/MahasiswaBidikMisi.php';
require_once 'classes/MahasiswaMandiri.php';
require_once 'classes/MahasiswaPrestasi.php';

$db = (new Database())->connect();



$bidikmisi = new MahasiswaBidikMisi(0,'','',0,0,0,'');
$mandiri   = new MahasiswaMandiri(0,'','',0,0,'',0);
$prestasi  = new MahasiswaPrestasi(0,'','',0,0,'','');



$dataReguler = $bidikmisi->getdaftarbidikmisi($db);
$dataPrestasi = $prestasi->getDaftarPrestasi($db);
$datamandiri = $mandiri->getDaftarmandiri($db);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-4">

<!-- ================= BIDIK MISI ================= -->
<h4>Mahasiswa Bidik Misi</h4>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Semester</th>
            <th>UKT</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($dataBidikmisi as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_mahasiswa'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['semester'] ?></td>
            <td><?= $row['tarif_ukt_nominal'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- ================= MANDIRI ================= -->
<h4>Mahasiswa Mandiri</h4>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Semester</th>
            <th>UKT</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($dataMandiri as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_mahasiswa'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['semester'] ?></td>
            <td><?= $row['tarif_ukt_nominal'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- ================= PRESTASI ================= -->
<h4>Mahasiswa Prestasi</h4>
<table class="table table-striped table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Semester</th>
            <th>UKT</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1; foreach ($dataPrestasi as $row): ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $row['nama_mahasiswa'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['semester'] ?></td>
            <td><?= $row['tarif_ukt_nominal'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</div>

</body>
</html>