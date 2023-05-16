<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="bootstrap.css" />
  </head>
  <body>
    <!-- Navigasi -->
    <nav class="navbar bg-info fixed-top">
      <div class="container-fluid atas">
        <a class="navbar-brand style-logo" href="#">PBW</a>
        <h3 class="navbar-brand style-tulisan" href="#">
          Selamat Datang di Website, Muhammad Rayhan Ramadhan
        </h3>
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
          class="offcanvas offcanvas-end style-warna"
          tabindex="-1"
          id="offcanvasDarkNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel"
        >
        <div class="offcanvas-header">
          <h5 class="offcanvas-title style-judul" id="offcanvasNavbarLabel">
            Praktikum PBW A
          </h5>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="offcanvas"
            aria-label="Close"
          ></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link style-color1" aria-current="page" href="home.php"
                ><span>Home</span></a
                
              >
            </li>
            <li class="nav-item">
              <a class="nav-link style-color" href="UTS_PBW.php">Daftar Mahasiswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link style-color" href="#">Informasi Tugas</a>
            </li>
          </ul>
          <a href="login.php">
              <button
                class="btn btn-danger rounded-pill style-button"
                type="submit"
              >
                Log Out
              </button>
              </a>
            </form>
          </div>
        </div>
      </div>
    </nav>
    <br>
    <div class="container mt-3">
    <!-- Row untuk baris -->
    <div class="row">
        <!-- untuk colomnya -->
        <div class="p-3">WEBSITE PRAKTIKUM PEMROGRAMAN BERBASIS WEB</div>
        <div class="col-4">
        <div class="card " style="width: 100%;">
            <img src="avatar.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h1 class="style-h1">Muhammad Rayhan Ramadhan</h1>
              <h3 class="style-h3">220441100117 - Praktikan</h3>
              <p class="card-text">Hallo.. Perkenalkan nama saya Muhammad Rayhan Ramadhan, biasa dipangil Rayhan, saya  adalah mahasiswa prodi Sistem informasi Universitas  trunojoyo madura, hobi saya adalah basket</p>
            </div>
          </div>
        </div>

        <div class="col-4">
            <div class="card " style="width: 100%;">
                <img src="avatar.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h1 class="style-h1">Muhammad Rayhan Ramadhan</h1>
                  <h3 class="style-h3">220441100117 - Praktikan</h3>
                  <p class="card-text">Hallo.. Perkenalkan nama saya Muhammad Rayhan Ramadhan, biasa dipangil Rayhan, saya  adalah mahasiswa prodi Sistem informasi Universitas  trunojoyo madura, hobi saya adalah basket</p>
                </div>
              </div>
            </div>

            <div class="col-4">
                <div class="card " style="width: 100%;">
                    <img src="avatar.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h1 class="style-h1">Muhammad Rayhan Ramadhan</h1>
                      <h3 class="style-h3">220441100117 - Praktikan</h3>
                      <p class="card-text">Hallo.. Perkenalkan nama saya Muhammad Rayhan Ramadhan, biasa dipangil Rayhan, saya  adalah mahasiswa prodi Sistem informasi Universitas  trunojoyo madura, hobi saya adalah basket</p>        
                    </div>
                    </div>
                </div>
            </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
