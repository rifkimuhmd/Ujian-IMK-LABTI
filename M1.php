<?php
include 'koneksi.php';
include "data.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah Hari Proklamasi Kemerdekaan Indonesia
    </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body class="animation-complete">
    <div class="flag-container">
        <div class="flag">
            <div class="center">
                <img src="https://i.pinimg.com/originals/ce/fc/fd/cefcfd06b26c3d9e73d647823ae75a30.png" 
                alt="Pancasila">
                <h1>Sejarah Hari Proklamasi Kemerdekaan Indonesia</h1>
                <p>Proklamasi Kemerdekaan Indonesia terjadi pada tanggal 17 Agustus 1945. 
                    Pada saat itu hingga saat ini, 
                    Hari tersebut merupakan saat yang penting dalam sejarah Indonesia ketika dua pemimpin nasional, 
                    Soekarno dan Mohammad Hatta, 
                    secara resmi menyatakan kemerdekaan Indonesia dari penjajahan Belanda. 
                    Proklamasi ini dilakukan di Jalan Pegangsaan 56, Jakarta, 
                    dengan pembacaan teks proklamasi oleh Soekarno. 
                    Ini menjadi tonggak penting dalam perjuangan kemerdekaan Indonesia yang selanjutnya diakui oleh banyak negara, 
                    meskipun Belanda baru mengakui kemerdekaan Indonesia setelah perundingan yang panjang dan konflik bersenjata. 
                    17 Agustus kemudian dijadikan hari nasional dan dirayakan sebagai Hari Kemerdekaan Indonesia setiap tahun.</p>
            </div>
        </div>
    </div>
    <div class="subjudul-container">
        <iframe height="300px" width="500px" src="https://www.youtube.com/embed/6ETqk1s6XS8?autoplay=1&mute=0" frameborder="0" allowfullscreen></iframe>
        <div class="text">
            <h2>Momentum Terjadi Proklamasi Kemerdekaan Indonesia </h2>
            <p>"Proklamasi Kemerdekaan RI 17 Agustus 1945 berawal dari kabar bahwa Jepang menyerah tanpa syarat kepada Sekutu setelah Kota Hiroshima dan Nagasaki dibom oleh Sekutu pada 15 Agustus dua hari sebelumnya. 
                Para pejuang golongan muda yang mendengar kabar tersebut dari Radio BBC kemudian mulai mendesak Sukarno dan Hatta agar memanfaatkan momentum sesegera mungkin untuk memproklamasikan kemerdekaan." 
            </p>
        </div>
    </div>
    <div class ="pesan">
    <h1>Sampaikan Pesan Kemerdekaan Kalian di bawah ini</h1>
    <form id="pesanForm" action="action.php" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Asal Kota</td>
                <td><input type="text" name="asal"></td>
            </tr>
            <tr>
                <td>Pesan</td>
                <td><textarea name="pesan" rows="4"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="SUBMIT" value="SIMPAN"></td>
            </tr>
        </table>
    </form>
    </div>
    <div class ="hasil-pesan">
    <h1>Pesan</h1>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Asal</th>
            <th>Pesan</th>
            <th>Edit</th>
            <th>Delete</th>

        </tr>
        <?php
        // Menampilkan data dari hasil query ke dalam tabel HTML
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['asal'] . "</td>";
            echo "<td>" . $row['pesan'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a></td>";
            echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    </div>
    <footer>
        <p>Referensi : <a href="https://www.detik.com/edu/detikpedia/d-6853124/sejarah-kemerdekaan-indonesia-17-agustus-1945-dan-isi-makna-teks-proklamasi" 
            target="_blank" rel="noopener noreferrer">Sumber 1</a>
        <br>
        Created by Muhammad Rifki (51421058)
        </p>
    </footer>
    <script>
    // Function to reset form fields after successful submission
    function resetForm() {
        document.getElementById("pesanForm").reset();
    }
</script>
</body>
</html>
