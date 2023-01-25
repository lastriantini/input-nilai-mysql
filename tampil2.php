<!DOCTYPE html>
<html lang="en">
<head>
    <title>tapil</title>
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
    $query = mysqli_query($server, 'SELECT * FROM siswa');

    if ($query) {
        echo "berhasil hore! <br>";
    } else {
        echo "gagal:(";
    }
    ?>
</body>
</html>
