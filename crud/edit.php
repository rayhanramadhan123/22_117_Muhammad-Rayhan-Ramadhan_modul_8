<?php
// Menghubungkan ke database
require("config.php");

// Mengambil data dari tabel
$id = $_GET['id'];
$query = "SELECT * FROM data WHERE Nomor=$id";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo "Data tidak ditemukan.";
    exit;
}
mysqli_close($conn);
?>
<form method="post" action="update.php">
 
  <input type="hidden" name="id" value="<?php echo $row['Nomor']; ?>"><br><br>
  <label for="nim">NIM:</label>
  <input type="text" id="nim" name="nim" value="<?php echo $row['NIM']; ?>"><br><br>
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" value="<?php echo $row['NAMA']; ?>"><br><br>
  <label for="dosen">Dosen:</label>
  <input type="text" id="dosen" name="dosen" value="<?php echo $row['DOSEN']; ?>"><br><br>
  <label for="status">Status:</label>
  <input type="text" id="status" name="status" value="<?php echo $row['STATUS']; ?>"><br><br>
  <label for="keterangan">Keterangan:</label>
  <input type="text" id="keterangan" name="keterangan" value="<?php echo $row['KETERANGAN']; ?>"><br><br>
  <input type="submit" value="Update">
</form>
