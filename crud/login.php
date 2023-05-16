<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />

    <link rel="stylesheet" href="login.css">
    <title>Login </title>
  </head>
  <body>
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-5 col-sm-5 col-md-5 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body" style="text-align: center;">
                <h1 style="color: rgb(0, 162, 255); font-weight: bold ;">Login</h1>
                <p style="font-size: 15px;">Masukkan nim dan Password</p>
               
                  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                </svg>
                <form  action="konfig_log.php" method="POST">
                  <input
                    type="text"
                    name="username"
                    id="username"
                    class="form-control my-4 py-2"
                    placeholder="Username"
                  />
                  <input
                    type="password"
                    name="pass"
                    id="pass"
                    class="form-control my-4 py-2"
                    placeholder="Password"
                  />
                  <div class="text-center mt-3">
                    <button class="btn btn-primary style-button">
                      <a class="style-login"  href="">Login</a>
                    </button>
                    <a href="daftar.php" class="nav-link" style="color: black"
                      >Belum Punya Akun?
                      <span style="font-weight: bold">klik disini</span></a
                    >
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  </body>
</html>