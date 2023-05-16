<?php

require_once("config.php");

function submit($name, $username,  $pass) {
    global $conn;

    // Melakukan sanitasi input untuk mencegah SQL injection
    $name = mysqli_real_escape_string($conn, $name);
    $username = mysqli_real_escape_string($conn, $username);
    $pass = mysqli_real_escape_string($conn,$pass);

    // Query untuk memeriksa apakah username atau email sudah digunakan sebelumnya
    $cekQuery = "SELECT * FROM user WHERE username = '$username' OR name = '$name'";
    $cekResult = mysqli_query($conn, $cekQuery);

    // Memeriksa jumlah baris yang terpengaruh oleh query
    $cekcount = mysqli_num_rows($cekResult);
    if ($cekcount > 0) {
        return false;
    }

    // Query untuk menambahkan pengguna baru ke dalam tabel pengguna
    $tambahquery = "INSERT INTO user (name, username,  pass) 
                VALUES ('$name', '$username',  '$pass')";
    $tambahresult = mysqli_query($conn, $tambahquery);

    // Jika registrasi berhasil, kembalikan true
    if ($tambahresult) {
        return true;
    } else {
        return false;
    }
}

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    if (submit($name, $username,  $pass)) {
        // Redirect ke halaman login.php jika register berhasil
        echo "<script> alert('Register Berhasil');
                document.location.href='login.php';
                </script>";
        exit();
    } else {
        // Notifikasi register gagal
        echo "<script> alert('Username atau Email sudah digunakan');
                document.location.href='daftar.php';
                </script>";
    }
}
mysqli_close($conn);
?>