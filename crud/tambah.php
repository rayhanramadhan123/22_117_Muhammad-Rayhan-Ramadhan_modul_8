<?php
require("config.php");

if(isset($_POST['submit'])) {
    $NIM = $_POST['nim'];
    $NAMA = $_POST['nama'];
    $DOSEN = $_POST['dosen'];
    $STATUS = $_POST['status'];
    $KETERANGAN = $_POST['keterangan'];
    $query = "INSERT INTO data (Nomor, NIM, NAMA, DOSEN, STATUS, KETERANGAN) VALUES (NULL, '$NIM', '$NAMA', '$DOSEN', '$STATUS', '$KETERANGAN')";
    $result = mysqli_query($conn, $query);
    
    if ($result) {
      echo "<script> alert('Login Berhasil');
      document.location.href='UTS_PBW.php';
      </script>";
        exit;
    } else {
      echo "<script> alert('Username atau Password salah');
      document.location.href='tambah.php';
      </script>";
    }
}

// Menutup koneksi
mysqli_close($conn);
?>


<form method="post" action="">
  
  <input type="hidden" name="id" value=""><br><br>
  <label for="nim">NIM:</label>
  <input type="text" id="nim" name="nim" value=""><br><br>
  <label for="nama">Nama:</label>
  <input type="text" id="nama" name="nama" value=""><br><br>
  <label for="dosen">Dosen:</label>
  <input type="text" id="dosen" name="dosen" value=""><br><br>
  <label for="status">Status:</label>
  <input type="text" id="status" name="status" value=""><br><br>
  <label for="keterangan">Keterangan:</label>
  <input type="text" id="keterangan" name="keterangan" value=""><br><br>
  <input type="submit" name="submit" value="submit">
</form>
