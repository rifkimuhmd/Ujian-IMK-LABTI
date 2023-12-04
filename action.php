<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$asal = $_POST['asal'];
$pesan = $_POST['pesan'];

mysqli_query($conn, "INSERT INTO pesan VALUES ('$nama', '$asal', '$pesan', '')");

header("location:M1.php");
?>
