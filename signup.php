<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up – Nomio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; padding: 20px;">
        <div class="auth-box m-3">
            <!-- Back link -->
            <a href="index.php" style="color: black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5" />
                </svg>
            </a>

            <!-- Title -->
            <div class="container-fluid d-flex justify-content-center me-2">
                <div class="d-flex">
                    <img src="assets/images/icon.png" class="mb-1" style="height: 40px" alt="title icon">
                    <h3 class="mb-4 ms-2 text-center">Sign Up</h3>
                </div>
            </div>

            <!-- Signup Form -->
            <form action="handlers/signup-handler.php" method="POST">
                <input type="hidden" name="user_type" value="admin">

                <!-- Full Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
                </div>

                <!-- Create Account Button -->
                <button type="submit" class="btn btn-primary w-100">Create Account</button>

                <!-- Google Sign Up -->
                <div class="text-center mt-3">
                    <p class="text-muted">or</p>
                    <a href="google-signup-handler.php" class="btn btn-outline-dark w-100">
                        <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo" width="20" class="me-2">
                        Sign up with Google
                    </a>
                </div>

                <!-- Redirect to student login -->
                <div class="mt-4 text-center">
                    <small>Are you a student? Have an account?<a href="login.php" style="color:var(--accent);"> Log in here</a></small>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
