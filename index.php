<!DOCTYPE html>
<head>
    <title>tugas2</title>
    <style>
        body {
            margin : 0 400px 0 400px;
            background-color: #dedede;
        }
        input {
             display: block;
             margin : 0 auto;
             border-radius : 10px;
             width: 100%;
             height : 27px;
             text-align : center;
             background-color: #f7f7f7;
        }
        h1 {
            text-align : center;
            margin-bottom : 30px;
        }
        h2 {
            text-align : center;
            margin-bottom : 35px;
        }
        label {
            text-align : center;
            font-size : 20px;
            display: block;
            margin : 0 auto;
            margin-bottom : -10px;
        }
    </style>
</head>
<body>
    <h1>BIODATA</h1>
    <form method="post" action="tampil.php">
        <label for="nis">NIS</label><br/>
		<input type="text" name="nis"><br/><br/>

		<label for="nama">Nama</label><br/>
		<input type="text" name="nama"><br/><br/>

        <label for="alamat">Alamat</label><br>
        <input type="text" name="alamat"><br><br>

        <label for="ttl">Tanggal Lahir</label><br>
        <input type="date" name="ttl"><br><br>

		<label for="umur">Umur</label><br/>
		<input type="number" name="umur"><br/><br/>

        <label for="sekolah">Sekolah</label><br>
        <input type="text" name="sekolah"><br><br>

        <label for="rombel">Rombel</label><br/>
		<input type="text" name="rombel"><br/><br/>

        <label for="rayon">Rayon</label><br/>
		<input type="text" name="rayon"><br/><br/>

        <h2>INPUT NILAI</h2>

        <label for="np">Nilai Produktif</label> <br/>
        <input type="number" name="np"><br><br>

        <label for="nm">Nilai Matematika</label><br/>
        <input type="number" name="nm"><br><br>

        <label for="ni">Nilai Indonesia</label><br>
        <input type="number" name="ni"> <br><br>

        <label for="ns">Nilai Pipas</label> <br>
        <input type="number" name="ns"><br><br>
       
        <label for="nd">Nilai Sunda</label> <br>
        <input type="number" name="nd"><br><br>

        <input type="submit" value="oke">

	</form>

</body>