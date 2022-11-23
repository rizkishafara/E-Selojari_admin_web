<?php
include('connection.php');
$username = $_POST["username"];
$sql = "SELECT no_nota,tgl_jual,subtot,ongkir,total_biaya,status FROM mjual WHERE kd_kons='$username'";

$query = mysqli_query($koneksi, $sql);

if (mysqli_num_rows($query) > 0) {
    while ($row = mysqli_fetch_object($query)) {
        $data['result'][] = $row;
    }
} else {
    $data['result'][] = "Data not Found";
}
print_r(json_encode($data));