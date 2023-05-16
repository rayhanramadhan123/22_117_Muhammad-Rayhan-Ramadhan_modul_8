
<?php
require("config.php");
$query = "SELECT * FROM data";
$result = mysqli_query($conn, $query);
$no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="buttondata.css">

    <title>butstrep</title>
    <style>
  
    </style>
</head>
<body style="background-color: rgb(214, 214, 214);">
    <nav class="navbar bg-body-tertiary fixed-top"><br>
        <div class="container-fluid" style="background-color: rgb(84, 165, 227); padding: 20px; position: fixed; margin-top: 50px; margin-bottom: 20px;">
          <a class="navbar-brand" href="#" style="color: white;"><span style="color: white;padding-right: 20px; font-family: impact; font-size: 30px;  ">PBW</span> Selamat Datang, Muhammad Rayhan Ramadhan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation" style="color: white;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                Dashboard
              </h5>
              <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" style="color: white;">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3" style="color: white;">
                <li class="nav-item" style="color: white;">
                  <a class="nav-link active" aria-current="page" href="home.php" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#" style="font-weight: bold;">Daftar Mahasiswa</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " aria-current="page" href="#">Informasi Tugas </a>
                  </li>
                  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                  <a href = "login.php" class = "style-logout"><button type="button" class="btn btn-danger style-button"> Logout</button></a>
                  </a>
                </ul>
                <div>
                </div>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <h1 style="text-align: center; color: rgb(54, 51, 51); padding-top: 140px;"><b>DAFTAR MAHASISWA</b></h1>
      <h1 style="text-align: center; color: rgb(54, 51, 51);"><b>PRAKTIKUM PEMROGRAMAN BERBASIS WEBSITE</b></h1>
      <br>
      <div class="card mb-5" style="width: 96%; height: auto; left: 2%; right: 2%; border-radius: 10px; box-shadow: 0px 3px 20px rgba(0,0,0,0.3)">
        <div class="card-body">
          <div class="d-flex justify-content-between" >
            <!-- Button -->
            <a class="btn btn-primary" type="submit" href="tambah.php" style="margin-bottom: 15px; margin-right: 1%; background-color: #72FF70; width: 50%;">Tambah Data</a>
            <button class="btn btn-primary" type="submit" style="margin-bottom: 15px; background-color: #FF4343; width: 50%;">Cetak Laporan <img src="laporan.png" alt="" width="15%"></button>
            <div class="input-group mb-3" style="margin-left: 50%;">
              <input type="text" class="form-control" placeholder="Cari mahasiswa berdasarkan NIM" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" style="background-color: #98CDFE;" > <img src="search.png.png" alt="" style="width: 2vw; height: auto;"><a href="cari.php" style="text-decoration: none" >Cari</a></button>
              </div>
            </div>
          </div>
          <br>
          <table class="table">
            <thead style="background-color:#98CDFE;
            ;">
              <tr>
                <th scope="col">NO</th>
                <th scope="col">NIM</th>
                <th scope="col">NAMA</th>
                <th scope="col">DOSEN</th>
                <th scope="col">STATUS</th>
                <th scope="col">KETERANGAN</th>
                <th scope="col">AKSI</th>
              </tr>
            </thead>
            <tbody>
            <?php
              if ($result) {
                if (mysqli_num_rows($result) > 0) {

                  while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$no++."</td>";
                echo "<td>".$row['NIM']."</td>";
                echo "<td>".$row['NAMA']."</td>";
                echo "<td>".$row['DOSEN']."</td>";
                echo "<td>".$row['STATUS']."</td>";
                echo "<td>".$row['KETERANGAN']."</td>";
                echo "<td>";
                echo "<a href='edit.php?id=".$row['Nomor']."' class='btn btn-primary' style='background-color: #87A9FF;'>EDIT</a> ";
                echo "<a href='hapus.php?id=".$row['Nomor']."' class='btn btn-primary' style='background-color: #FF5E5E;'>HAPUS</a>";
                echo "</td>";
                echo "</tr>";
             } } else {
                  echo "Tidak ada pengguna yang ditemukan.";
                  }
               } else {
                  echo "Terjadi kesalahan dalam menjalankan query.";
              }
              
              // Menutup koneksi
              mysqli_close($conn);
      ?>
            </tbody>
          </table>
        </div>
      </div>
    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"
  ></script>
</body>
</html>