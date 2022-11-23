<?php
include_once('connection.php');

$no_nota = $_POST['no_nota'];
$gambar = $_POST['gambar'];
$response = array();
$query = "UPDATE mjual SET status = 1, bukti_tf = '$gambar' WHERE no_nota='$no_nota'";
$sql = mysqli_query ($koneksi,$query);
$response['message'] = "Upload bukti berhasil";
echo json_encode($response);
?>