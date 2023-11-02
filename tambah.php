<?php 
require 'function.php';
//langkah 1 ubah text jadi file pada input gambar
//langkah ke 2 tambahkan enctype

//koneksi ke DBMS
//cek apakah tombol submit sudah ditekan atau belum
if ( isset($_POST["submit"])) {


	//cek apakah data berhasil ditambahkan atau tidak
	if(tambah($_POST) > 0 ){
		echo "
		<script>
		alert('Data Berhasil Ditambahkan!');
		document.location.href = 'index.php';
		</script>
		";
	}else {
		echo "
		<script>
		alert('Data Gagal Ditambahkan!');
		document.location.href = 'index.php';
		</script>
		";
	}
}
?>

<!DOCTYPE html>
<html>

	</style>
<head>
	<title>Tambah Data Guru</title>
</head>
<body bgcolor = "pink">
<h1>Tambah Data Guru</h1>

<form action="" method="post" enctype="multipart/form-data">
	<ul>
		<li>
			<label for="kode_guru">Kode Guru :  </label>
			<input type="text" name="kode_guru" id="kode_guru" required>
		</li>
		<li>
			<label for="nama_guru">Nama Guru : </label>
			<input type="text" name="nama_guru" id="nama_guru" required>
		</li>
		<li>
			<label for="hari">Hari : </label>
			<input type="text" name="hari" id="hari">
		</li>
		<li>
			<label for="mapel">Mata Pelajaran : </label>
			<input type="text" name="mapel" id="mapel">
		</li>
        <li>
			<label for="waktu">Waktu : </label>
			<input type="text" name="waktu" id="waktu">
		</li>
		<li>
			<button type="submit" name="submit">Tambah Data!</button>
		</li>


	</ul>

</form>

</body>
</html>