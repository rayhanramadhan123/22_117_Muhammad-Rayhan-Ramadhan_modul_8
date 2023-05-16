<?php
require_once "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $query = "DELETE FROM data WHERE Nomor=?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);
        
        if (mysqli_stmt_affected_rows($stmt) > 0) {
            header("Location: UTS_PBW.php");
            exit;
        } else {
            echo "Data tidak ditemukan.";
        }
    } catch (Exception $e) {
        echo "Terjadi kesalahan: " . $e->getMessage();
    }
} else {
    header("Location: UTS_PBW.php");
    exit;
}

mysqli_close($conn);
?>
