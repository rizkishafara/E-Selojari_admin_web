<?php
$koneksi = mysqli_connect("localhost","root","","eselojari");
if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }