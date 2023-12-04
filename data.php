<?php
include 'koneksi.php';

$query = "SELECT * FROM pesan";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query error: " . mysqli_error($conn));
}
?>
