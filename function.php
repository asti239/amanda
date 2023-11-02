`<?php
$conn = mysqli_connect("localhost", "root", "", "sebelas");
function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){
	//ambil data dari tiap elemen dalam form
	global $conn;
	$kode_guru = htmlspecialchars($data["kode_guru"]);
	$nama_guru = htmlspecialchars($data["nama_guru"]);
	$hari = htmlspecialchars($data["hari"]);
	$mapel = htmlspecialchars($data["mapel"]);
    $waktu = htmlspecialchars($data["waktu"]);

	//query insert data
	$query = "INSERT INTO sebelas11
		VALUES
	('', '$kode_guru', '$nama_guru', '$hari', '$mapel', '$waktu')
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

?>