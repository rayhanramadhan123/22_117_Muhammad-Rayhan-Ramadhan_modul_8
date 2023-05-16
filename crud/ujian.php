<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Web Ujuan</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="stylee.css">

  </head>
  <body>
   
<!-- Navbar -->

    <nav class="navbar navbar-dark  fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand style-logo" href="#">PBW</a>
          <a class="navbar-brand style-nama" href="#"
            >Selamat Datang, Muhammad Rayhan Ramadhan
          </a>

          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasDarkNavbar"
            aria-controls="offcanvasDarkNavbar"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="offcanvas offcanvas-end text-bg-dark"
            tabindex="-1"
            id="offcanvasDarkNavbar"
            aria-labelledby="offcanvasDarkNavbarLabel"
          >
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">
                Praktikum PBW A
              </h5>
              <button
                type="button"
                class="btn-close btn-close-white"
                data-bs-dismiss="offcanvas"
                aria-label="Close"
              ></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="Tugas5.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="ujian.php">Daftar Mahasiswa</a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">informasi Tugas</a>
                </li>
               
              </ul>
              <form action="post">
                <button class="btn btn-success style-button" type="submit">Logout</button>
              </form>
            </div>
          </div>
        </div>
      </nav>
  
      <!-- Tulisan dibawah navbar -->
      <div class="p-3">WEBSITE PRAKTIKUM PEMROGRAMAN BERBASIS WEB</div>


      <!-- INI BAGIAN ATAS TABLE -->
      <div class="card">
        <div class="button" style="display: flex;">
        <button class="btn-ats" type="submit">Tambah Data</button>
        <button class="btn-atss" type="submit">Cek Laporan</button>
        <form class="d-flex" role="search" style="float: right;">
          <input class="form-control me-2" type="search" placeholder="Cari Berdasarkan Nim" aria-label="Search">
          <button class="btn btn-outline-success style-src" type="submit"><img src="kaca.png" width="20px"></button>
        </form>
      </div>



      <!-- INI TABEL-->
      <br>
      <table class="table table-striped table-hover " border="3" style="border-radius: 40px;">
        <thead>
          <tr>
            <th  scope="col">No</th>
            <th  scope="col">NIM</th>
            <th  scope="col">NAMA</th>
            <th  scope="col">DOSEN</th>
            <th  scope="col">STATUS</th>
            <th  scope="col">KET</th>
            <th style="padding-left: 70px;" scope="col">Aksi</th>
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









    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
