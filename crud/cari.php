<?php
require_once("config.php");

if (isset($_POST['cari'])) {
    $keyword = $_POST['keyword'];
    
    $query = "SELECT * FROM data WHERE NIM LIKE '%$keyword%'";
    $result = mysqli_query($koneksi, $query);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Nomor: " . $row['Nomor'] . "<br>";
            echo "NIM: " . $row['NIM'] . "<br>";
            echo "Nama: " . $row['NAMA'] . "<br>";
            echo "Dosen: " . $row['DOSEN'] . "<br>";
            echo "Status: " . $row['STATUS'] . "<br>";
            echo "Keterangan: " . $row['KETERANGAN'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Data tidak ditemukan.";
    }
}

mysqli_close($conn);
?>
