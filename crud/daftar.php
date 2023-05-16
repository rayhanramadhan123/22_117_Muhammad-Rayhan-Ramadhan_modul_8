
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
    <link rel="stylesheet" href="utslogin.css" />
  </head>
  <body>
    <section>
      <div class="container mt-5 pt-5">
        <div class="row">
          <div class="col-5 col-sm-5 col-md-5 m-auto">
            <div class="card border-0 shadow">
              <div class="card-body" style="text-align: center">
                <h1 style="color: rgb(63, 116, 154); font-weight: bold">
                  Login
                </h1>
                <p style="font-size: 20px">Masukkan NIM dan Password</p>
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path
                  fill-rule="evenodd"
                  d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"
                />
                <form  action="daftar_log.php" method="POST">
                  <input
                    type="text"
                    name="username"
                    class="form-control my-4 py-2"
                    placeholder="Username"
                  />
                  <input
                    type="text"
                    name="name"
                    class="form-control my-4 py-2"
                    placeholder="Name"
                  />
                  <input
                    type="password"
                    name="pass"
                    class="form-control my-4 py-2"
                    placeholder="Password"
                  />
                  <div class="text-center mt-3">
                    <button class="btn btn-primary style-button" name="submit">
                      <a class="style-login" href="">Login</a>
                    </button>
                    <a href="#" class="nav-link" style="color: black"
                      >Lupa Password?
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
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
