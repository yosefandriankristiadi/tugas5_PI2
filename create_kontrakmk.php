<!doctype html>
<html lang="en">
<head>
	<title>Tambah Kontrak Matakuliah</title>
</head>

<body>
	<h1>Tambah Kontrak Matakuliah</h1>
	<a href="kontrak_mk.php">Kembali</a>
	<br><br>
	<form action="proccess.php" method="post">
		<label>Matakuliah Id</label>
		<br>
		<input type="text" name="matakuliah_id">
		<br>
		<label>Mahasiswa Id</label>
		<br>
		<input type="text" name="mhs_id"><br>
		<br><br>
		<button type="submit" name="submit_simpan_kontrakmk">Submit</button>
		<button type="reset">Reset</button>
	</form>
</body>
</html>