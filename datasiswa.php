<!DOCTYPE html>
<html lang="en">
<head>
    <title>biodata</title>
    <style>
        body {
            background-color: #181D31;
        }
        table, th, td {
            margin-left: auto;
            margin-right: auto;
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            padding: 20px;
            background-color: #F0E9D2;
        }
        img {
            width: 200px;
            max-height: 120px;
        }
        th {
            background-color: #678983;
        }
        h1 {
            color: #F0E9D2;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>DATA SISWA</h1>
    <form method="post" action="index.php">
    <?php
    
    $conn = mysqli_connect("localhost", "root", "", "latihan_xpplg");
    if (!$conn) {
        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
    }
    
    $sql = 'SELECT nis, nama, alamat, tanggallahir, umur, sekolah, rombel, rayon
            FROM profil';
            
    $query = mysqli_query($conn, $sql);
    
    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
    
    echo '<table>
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Tanggal Lahir</th>
                    <th>Umur</th>
                    <th>Sekolah</th>
                    <th>Rombel</th>
                    <th>Rayon</th>
                </tr>
            </thead>
            <tbody>';
            
    while ($row = mysqli_fetch_array($query))
    {
        echo '<tr>
                <td>'.$row['nis'].'</td>
                <td>'.$row['nama'].'</td>
                <td>'.$row['alamat'].'</td>
                <td>'.$row['tanggallahir'].'</td>
                <td>'.$row['umur'].'</td>
                <td>'.$row['sekolah'].'</td>
                <td>'.$row['rombel'].'</td>
                <td>'.$row['rayon'].'</td>
            </tr>';
    }
    echo '
        </tbody>
    </table>';
    ?>
</form>
</body>
</html>
