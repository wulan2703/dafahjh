<?php 
session_start();

// Memastikan hanya admin yang dapat mengakses halaman ini
if ($_SESSION['role'] != 'admin') {
    session_destroy();
    echo "Anda bukan role admin";
    header('location:index.php');
    exit; // Menghentikan eksekusi setelah header
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <!-- Menambahkan link ke CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <!-- Menampilkan pesan selamat datang dengan class Bootstrap -->
        <div class="alert alert-success" role="alert">
            <h1>Selamat datang, Admin!</h1>
            <p>Anda memiliki akses penuh ke halaman ini.</p>
        </div>

        <!-- Tombol Logout menggunakan <a> -->
        <a href="backend/logout.php" class="btn btn-danger">Logout</a>
    </div>

    <!-- Menambahkan script Bootstrap JS di akhir body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>