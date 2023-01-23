<?php
 $server = mysqli_connect("localhost", "root", "", "latihan_xpplg");

 if ($server) {
    echo "berhasil hore! <br>";
 } else {
    echo "gagal:(";
 }

 $sql ="insert into profil (nis, nama, alamat, tanggallahir, umur, sekolah, rombel)
 values('12209087', 'Lastriantini', 'tajur', '2006/08/05', '16', 'SMK WIKRAMA BOGOR', 'PPLG X-4')";

 if (mysqli_query($server, $sql)) {
   echo "brshail";
 } else {
   echo "gagla";
 }
 ?>