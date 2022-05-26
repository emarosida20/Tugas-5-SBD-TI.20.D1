<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010062";
$db = "klinik_312010062";
$conn = mysqli_connect('localhost','adminklinik','312010062','klinik_312010062');

if ($conn == false)
{
	echo "Koneksi ke server gagal.";
	die();
} #else echo "Koneksi berhasil";
?>