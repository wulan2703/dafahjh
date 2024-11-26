<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CSS (CDN) -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <!-- External login style from bs-brain -->
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-10/assets/css/login-10.css">
    <style>
    /* Custom gradient background style */
    .gradient-custom {
        background: #6a11cb;
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    }
    </style>
</head>

<body>
    <!-- Gradient background section -->
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <!-- Card container -->
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <!-- Register form -->
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                <p class="text-white-50 mb-5">Please fill in the form to create your account.</p>

                                <!-- Form for registration -->
                                <form action="./backend/register.php" method="post">
                                    <!-- Name input field -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="name" class="form-control form-control-lg"
                                            placeholder="Masukkan nama anda" required>
                                    </div>

                                    <!-- Email input field -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" class="form-control form-control-lg"
                                            placeholder="Masukkan email anda" required>
                                    </div>

                                    <!-- Password input field -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" class="form-control form-control-lg"
                                            placeholder="Masukkan password anda" required>
                                    </div>

                                    <!-- Confirm password input field -->
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="confirm" class="form-control form-control-lg"
                                            placeholder="Masukkan konfirmasi password anda" required>
                                    </div>

                                    <!-- Submit button and Login link -->
                                    <div class="d-grid gap-2 mb-4">
                                        <input type="submit" value="Register" name="submit"
                                            class="btn btn-outline-light btn-lg">
                                        <a href="login.php" class="btn btn-link text-white">Already have an account?
                                            Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS (CDN) -->
    <script src="https://unpkg.com/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>