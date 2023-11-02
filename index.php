<?php
require 'function.php';
$sebelas = query("SELECT * FROM sebelas11");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	
</head>
<body>

<h1><center>Mata Pelajaran</center></h1>

<br><br>

<br>
<table border="1" cellpadding="10" cellspacing="0" align="center">
<tr style="background-color: pink">
<th>Id</th>
<th>kode_guru</th>
<th>Nama_Guru</th>
<th>Hari</th>
<th>Mapel</th>
<th>Waktu</th>
</tr>

<?php $i = 1; ?>
<?php foreach ( $sebelas as $row) : ?>
<tr>
	<td><?= $i; ?></td>
<td><?= $row["kode_guru"]; ?></td>
<td><?= $row["nama_guru"]; ?></td>
<td><?= $row["hari"]; ?></td>
<td><?= $row["mapel"]; ?></td>
<td><?= $row["waktu"]; ?></td>

</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
<a href="tambah.php">tambah data</a>
</body>
</html>