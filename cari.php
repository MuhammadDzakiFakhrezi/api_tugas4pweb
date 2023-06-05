<?php
include 'sambung.php';
/**
 * @var $connection PDO

*/

$nama = $_GET['nama'];

$statement = $connection->query("select * from mahasiswa WHERE nama_mahasiswa='$nama'");
//atur supaya hasilnya berupa array
$statement->setFetchMode(PDO::FETCH_ASSOC);
//JALAN KAN QUERY
$result = $statement->fetchAll();
//output json
header('Content-Type: application/json');
// echo json_encode($result);
if ($result) {
	echo json_encode($result);
}else{
	echo "Data Mahasiswa Ini tidak ada";
}