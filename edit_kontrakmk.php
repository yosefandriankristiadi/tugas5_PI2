<?php
$id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_kontrakmk($id);
?>

<!doctype html>
<html lang="en">

<head>
	<title>Edit Kontrak Matakuliah</title>
</head>

<body>
	<h1>Edit Kontrak Matakuliah</h1>
	<a href="kontrak_mk.php">Kembali</a>
	<br><br>
	<form action="proccess.php" method="post">
		<label>Mata Kuliah Id</label>
		<br>
		<input type="text" name="matakuliah_id" value="<?php echo $data->matakuliah_id ?>">
		<br>
		<label>Mahasiswa Id</label>
		<br>
		<input type="text" name="mhs_id" value="<?php echo $data->mhs_id ?>">
		<br>
		<br><br>
		<button type="submit" name="submit_edit_kontrakmk">Submit</button>
	</form>
</body>
</html>