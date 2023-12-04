<?php
include 'koneksi.php';

// Check if ID parameter exists in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Fetch data based on the provided ID
    $query = "SELECT * FROM pesan WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $data = mysqli_fetch_assoc($result);
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request. Please provide an ID.";
}

// Check if the form is submitted for updating
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize the input data
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $asal = mysqli_real_escape_string($conn, $_POST['asal']);
    $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);

    // Update the data in the database
    $updateQuery = "UPDATE pesan SET nama='$nama', asal='$asal', pesan='$pesan' WHERE id=$id";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        // Redirect to the page displaying all messages after successful update
        header("Location: index.php");
        exit();
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pesan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Pesan</h1>
    <form id="pesan" action="action.php" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" value="<?php echo $data['nama']; ?>" required>

        <label for="asal">Asal Kota:</label>
        <input type="text" name="asal" value="<?php echo $data['asal']; ?>" required>

        <label for="pesan">Pesan:</label>
        <textarea name="pesan" rows="4" required><?php echo $data['pesan']; ?></textarea>

        <input type="submit" value="Update">
    </form>
</body>
</html>
