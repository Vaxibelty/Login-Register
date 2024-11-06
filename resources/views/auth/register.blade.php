<?php
// Proses pengiriman form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data form
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi form (bisa ditambahkan logika validasi lainnya)
    if (empty($fullName) || empty($email) || empty($password)) {
        $error_message = "All fields are required!";
    } else {
        // Simulasi registrasi sukses
        $success_message = "Registration successful! You can now <a href='login.php'>login</a>.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminLTE 4 | Register Page</title>
    <!-- External CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        /* Global Styles */
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


/* Styling for the register box */
.register-box {
    width: 100%;
    max-width: 450px;
    background: #ffffff;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    padding: 40px;
    margin-top: 50px; /* Add space between the top of the page and the form */
    margin-bottom: 50px; /* Add some space below the form */
}

/* Heading Styling */
h2 {
    font-size: 1.8rem;
    font-weight: bold;
    color: #00b4d8;
    margin-bottom: 30px;
}

/* Input fields styling */
.input-field {
    font-size: 16px;
    padding: 15px;
    border-radius: 10px;
    border: 1px solid #ddd;
    transition: border-color 0.3s ease;
    margin-bottom: 15px;
}

.input-field:focus {
    border-color: #00b4d8;
    box-shadow: 0 0 5px rgba(0, 180, 216, 0.5);
    outline: none;
}

/* Button styling */
.btn-primary {
    background-color: #00b4d8;
    border-color: #00b4d8;
    font-size: 16px;
    padding: 12px;
    border-radius: 8px;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

.btn-primary:hover {
    background-color: #007f8e;
    border-color: #007f8e;
}

.btn-block {
    width: 100%;
}

/* Social Media Button Styling */
.social-auth-links .btn {
    font-size: 14px;
    padding: 12px;
    border-radius: 8px;
}

.btn-facebook {
    background-color: #3b5998;
    color: #fff;
}

.btn-google {
    background-color: #db4437;
    color: #fff;
}

/* Links and form text */
a {
    color: #00b4d8;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

/* Checkbox and Terms Style */
.form-check-input {
    border-radius: 4px;
}

.form-check-label {
    font-size: 14px;
}

.form-label {
    font-weight: bold;
    color: #333;
}

.form-check {
    margin-top: 10px;
}

/* Responsive Design */
@media (max-width: 576px) {
    .register-box {
        padding: 20px;
        margin: 10px;
    }

    h2 {
        font-size: 1.6rem;
    }

    .input-field {
        padding: 12px;
    }

    .btn-primary {
        padding: 14px;
    }
}

    </style>
</head>
    
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="register-box p-4 shadow-lg rounded-lg">
            <h2 class="text-center text-primary mb-4">Create an Account</h2>

            <!-- Menampilkan pesan error atau sukses -->
            <?php if (isset($error_message)): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $error_message; ?>
                </div>
            <?php endif; ?>

            <?php if (isset($success_message)): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo $success_message; ?>
                </div>
            <?php endif; ?>

            <!-- Form Register -->
            <form action="register.php" method="post">
                <div class="mb-3">
                    <label for="fullName" class="form-label">Full Name</label>
                    <input type="text" name="fullName" class="form-control input-field" id="fullName" required placeholder="Enter your full name">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" name="email" class="form-control input-field" id="email" required placeholder="Enter your email">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control input-field" id="password" required placeholder="Enter your password">
                </div>

                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" value="" id="termsCheck" required>
                    <label class="form-check-label" for="termsCheck">
                        I agree to the <a href="#">terms and conditions</a>
                    </label>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                </div>
            </form>

            <div class="text-center mt-3">
                <p>Already have an account? <a href="login.php" class="link-primary">Login here</a></p>
            </div>

            <!-- Optional: Social Media Sign-in Buttons -->
            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-facebook mb-2 w-100"><i class="bi bi-facebook me-2"></i> Sign in with Facebook</a>
                <a href="#" class="btn btn-google mb-2 w-100"><i class="bi bi-google me-2"></i> Sign in with Google</a>
            </div>

        </div>
    </div>

    <!-- External JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
