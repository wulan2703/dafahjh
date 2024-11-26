<?php
session_start();
require './../config/db.php';

if (isset($_POST['submit'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan email
    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");

    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);

        // Verifikasi password yang dimasukkan dengan hash yang ada di database
        if (password_verify($password, $data['password'])) {
            // Set session untuk name dan role
            $_SESSION['name'] = $data['name'];
            $_SESSION['role'] = $data['role'];

            // Redirect berdasarkan role
            if ($_SESSION['role'] == 'admin') {
                header('location:./../admin.php');  // Halaman admin jika role adalah 'admin'
                exit;  // Menghentikan eksekusi kode setelah header
            } else {
                header('location:./../profile.php');  // Halaman profil jika bukan 'admin'
                exit;  // Menghentikan eksekusi kode setelah header
            }

        } else {
            // Password salah
            header('location:./../profile.php');
            exit;  // Menghentikan eksekusi kode setelah header
        }

    } else {
        // Email tidak ditemukan
        echo "Email atau password salah";
        exit;  // Menghentikan eksekusi setelah pesan
    }
}
?>