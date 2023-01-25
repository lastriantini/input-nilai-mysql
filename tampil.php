<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
<form method="post" action="index.php">
<?php

$server = mysqli_connect("localhost", "root", "", "latihan_xpplg");

if ($server) {
   echo "berhasil hore! <br>";
} else {
   echo "gagal:(";
}

echo "<b>BIODATA SISWA</b>";
echo "<br><br>";

$nis = $_POST ['nis'];
echo "NIS : <b>$nis</b>";
echo "<br> <br>";

$nama = $_POST ['nama'];
echo "Nama : <b>$nama</b>";
echo "<br> <br>";

$alamat = $_POST ['alamat'];
echo "Alamat : <b>$alamat</b>";
echo "<br> <br>";

$ttl = $_POST ['ttl'];
echo "Tanggal lahir: <b>$ttl</b>";
echo "<br> <br>";

$umur = $_POST ['umur'];
echo "Umur : <b>$umur</b>";
echo "<br> <br>";

$sekolah = $_POST ['sekolah'];
echo "sekolah : <b>$sekolah</b>";
echo "<br> <br>";

$rombel = $_POST ['rombel'];
echo "rombel : <b>$rombel</b>";
echo "<br> <br>";

$rayon = $_POST ['rayon'];
echo "Rayon : <b>$rayon</b>";
echo "<br> <br>";

$sqlprofil ="INSERT INTO profil (nis, nama, alamat, tanggallahir, umur, sekolah, rombel, rayon)
values('$nis', '$nama', '$alamat', '$ttl', '$umur', '$sekolah', '$rombel', '$rayon')";

if (mysqli_query($server, $sqlprofil)) {
  echo "berhasil!!! <br> <br>";
} else {
  echo "gagla";
}

echo "<b>HASIL NILAI</b>";
echo "<br> <br>";

$np = $_POST ['np'];
echo "Nilai Produktif : $np";
echo "<br> <br>";

$nm = $_POST ['nm'];
echo "Nilai Matematika : $nm";
echo "<br> <br>";

$ni = $_POST ['ni'];
echo "Nilai Indonesia : $ni";
echo "<br> <br>";

$ns = $_POST ['ns'];
echo "Nilai Pipas : $ns";
echo "<br> <br>";

$nd = $_POST ['nd'];
echo "Nilai Sunda : $nd";
echo "<br> <br>";

$sqlnilai ="INSERT INTO `nilai` (`Nilai Produktif`, `Nilai Matematika`, `Nilai Indonesia`, `Nilai Pipas`, `Nilai Sunda`)
values('$np', '$nm', '$ni', '$ns', '$nd')";

if (mysqli_query($server, $sqlnilai)) {
  echo "berhasil!!! <br> <br>";
} else {
  echo "gagla";
}

$np = $_POST ['np'];
$nm = $_POST ['nm'];
$ns = $_POST ['ns'];
$ni = $_POST ['ni'];
$ni = $_POST ['nd'];

$sum = $np + $ni + $nm + $ns + $nd;
$mean = $sum/5;
echo "<b>rata rata nilai : $mean";
echo "<br> <br>";

echo "<b>nilai max : ";
echo max ($np, $nm, $ni, $ns, $nd);
echo "</b><br><br>";

echo "<b>nilai min : ";
echo min ($np, $ni, $nm, $ns, $nd);
echo "</b><br><br>";

if ($mean >= 90) {
    echo "rata rata nilai anda adalah <b>A</b>";
    echo "<br> <br>";
} elseif ($mean >= 75) {
    echo "rata rata nilai anda adalah <b>B</b>";
    echo "<br> <br>";
} elseif ($mean >= 65) {
    echo "rata rata nilai anda adalah <b>C</b>";
    echo "<br> <br>";
} elseif ($mean < 70) {
    echo "rata rata nilai anda adalah <b>D</b>";
    echo "<br> <br>";
}

echo "NAMA KELOMPOK";
echo "<br> <br>";

echo "Alya nursyifa";
echo "<br> <br>";

echo "Awittia Ananda Oktaviani";
echo "<br> <br>";

echo "Lastriantini";
echo "<br> <br>";

echo "Siti Lubna Salsabila Muslimah";
echo "<br> <br>";

echo "Rainy Nur Baeti Putri";
echo "<br> <br>";
?>
    <input type="submit" value="kembali">
</body>
</html>