<?php
// Simulasi login (Anda dapat mengganti ini dengan autentikasi database)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cek apakah email dan password cocok
    if ($email == "admin@example.com" && $password == "password123") {
        echo "<script>alert('Login Berhasil'); window.location.href='dashboard.php';</script>";
    } else {
        echo "<script>alert('Email atau Password salah');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | AdminLTE</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Reset untuk semua margin, padding, dan box-sizing */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    background: #f0f4f8;
    font-family: 'Arial', sans-serif;
}

/* Login Box Styling */
.login-box {
    width: 100%;
    max-width: 400px;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 30px;
    background-color: #fff;
}

h2 {
    color: #007bff;
    font-weight: bold;
}

input[type="email"],
input[type="password"] {
    height: 45px;
    font-size: 16px;
}

.form-label {
    font-weight: bold;
    color: #333;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    font-size: 16px;
    padding: 12px;
    width: 100%;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.btn-danger {
    background-color: #db4437;
    border-color: #db4437;
    font-size: 16px;
    padding: 12px;
    width: 100%;
}

.btn-danger:hover {
    background-color: #c1351d;
    border-color: #c1351d;
}

/* Styling untuk link */
a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Social media login buttons */
button.mb-2 {
    margin-bottom: 10px;
}

/* Responsif */
@media (max-width: 576px) {
    .login-box {
        padding: 20px;
    }
}

    </style>
</head>
<body>

    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="login-box p-4 shadow rounded">
            <h2 class="text-center mb-4">Login</h2>

            <form action="" method="POST">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="email" required placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" required placeholder="Enter your password">
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">
                        Remember Me
                    </label>
                </div>

                <button type="submit" class="btn btn-primary w-100">Sign In</button>
            </form>

            <div class="text-center mt-3">
                <p>Or</p>
                <button class="btn btn-primary w-100 mb-2">Login with Facebook</button>
                <button class="btn btn-danger w-100">Login with Google</button>
            </div>

            <div class="mt-3 text-center">
                <a href="#">I forgot my password</a> | <a href="http://127.0.0.1:8000/register">Create a new account</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
