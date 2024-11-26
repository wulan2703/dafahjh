<?php

require './../config/db.php';

if (isset($_POST['submit'])) { // Menangani form submit
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari user berdasarkan email
    $user = mysqli_query($db_connect, "SELECT * FROM users WHERE email = '$email'");

    if (mysqli_num_rows($user) > 0) {
        $data = mysqli_fetch_assoc($user);

        // Memeriksa apakah password yang dimasukkan sesuai dengan yang ada di database
        if (password_verify($password, $data['password'])) {
            echo "Selamat datang " . $data['name'];
            die;

            // Proses otorisasi dan redirect bisa ditambahkan di sini
        } else {
            echo "Password salah";
            die;
        }
    } else {
        echo "Email atau password salah";
        die;
    }
}
?>