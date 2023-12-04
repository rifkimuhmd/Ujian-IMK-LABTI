<?php
include 'koneksi.php';

// Periksa apakah id tersedia
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari database berdasarkan id
    $query = "DELETE FROM pesan WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "Data berhasil dihapus.";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "ID tidak tersedia.";
}
?>
