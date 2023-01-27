<!DOCTYPE html>
<html lang="en">
<head>
    <title>data nilai</title>
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
    <h1>DATA NILAI SISWA</h1>
    <form method="post" action="index.php">
    <?php
    
    $conn = mysqli_connect("localhost", "root", "", "latihan_xpplg");
    if (!$conn) {
        die ('Gagal terhubung MySQL: ' . mysqli_connect_error());	
    }
    
    $sql = 'SELECT produktif, matematika, indonesia, pipas, sunda
            FROM nilai';
            
    $query = mysqli_query($conn, $sql);
    
    if (!$query) {
        die ('SQL Error: ' . mysqli_error($conn));
    }
    ?>

    <table>
        <tr>
            <th>Produktif</th>
            <th>Matematika</th>
            <th>Indonesia</th>
            <th>Pipas</th>
            <th>B.Sunda</th>
        </tr>
    <?php while ($row = mysqli_fetch_array($query))
    { ?> 
        <tr>
            <td><?php echo $row["produktif"]?></td>            
            <td><?php echo $row["matematika"]?></td>
            <td><?php echo $row["indonesia"]?></td>
            <td><?php echo $row["pipas"]?></td>
            <td><?php echo $row["sunda"]?></td>
        </tr>
    <?php } ?>
    </table>

    </form>
    </body>
    </html>