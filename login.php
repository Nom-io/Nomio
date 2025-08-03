<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login – Nomio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/auth.css" rel="stylesheet">
    <style>
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 100vh; padding: 20px;">
        <div class="auth-box m-3">
            <a href="index.php" style="color: black;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg></a>
            <div class="container-fluid d-flex justify-content-center me-2">
                <div class="d-flex">
                    <img src="assets/images/icon.png" class="mb-1" style="height: 40px" alt="title icon">
                    <h3 class="mb-4 ms-2 text-center">Login to Nomio</h3>
                </div>
            </div>

            <!-- Tabs for role selection -->
            <ul class="nav nav-tabs justify-content-center" id="roleTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="student-tab" data-bs-toggle="tab" data-bs-target="#student"
                        type="button" role="tab">Student</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="admin-tab" data-bs-toggle="tab" data-bs-target="#admin" type="button"
                        role="tab">Administrator</button>
                </li>
            </ul>

            <!-- Tab content -->
            <div class="tab-content" id="roleTabContent">

                <!-- Student Tab -->
                <div class="tab-pane fade show active" id="student" role="tabpanel">
                    <form action="login-handler.php" method="POST">
                        <input type="hidden" name="user_type" value="student">

                        <!-- School District Dropdown -->
                        <div class="mb-3 mt-3">
                            <label for="district" class="form-label">Select Your School District</label>
                            <select class="form-select" name="district" id="district" required>
                                <option value="">Choose...</option>
                                <option value="district1">North Valley ISD</option>
                                <option value="district2">Lakeside School District</option>
                                <option value="district3">Greenridge Unified</option>
                            </select>
                        </div>

                        <!-- HAC Email -->
                        <div class="mb-3">
                            <label for="studentEmail" class="form-label">HAC Email</label>
                            <input type="email" class="form-control" id="studentEmail" name="email" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="studentPassword" class="form-label">HAC Password</label>
                            <input type="password" class="form-control" id="studentPassword" name="password" required>
                        </div>

                        <!-- Login Button -->
                        <button type="submit" class="btn btn-primary w-100">Log in with your HAC</button>

                        <!-- Forgot HAC Credentials -->
                        <div class="text-center mt-3">
                            <a href="#" data-bs-toggle="tooltip"
                                title="Visit your district’s HAC website. Contact your school administrator if you’re unable to log in.">
                                Forgot your HAC credentials?
                            </a>
                        </div>
                    </form>
                </div>

                <!-- Admin Tab -->
                <div class="tab-pane fade" id="admin" role="tabpanel">
                    <form action="login-handler.php" method="POST">
                        <input type="hidden" name="user_type" value="admin">

                        <!-- Email -->
                        <div class="mb-3 mt-3">
                            <label for="adminEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="adminEmail" name="email" required>
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label for="adminPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="adminPassword" name="password" required>
                        </div>

                        <!-- Submit -->
                        <button type="submit" class="btn btn-primary w-100">Log in</button>

                        <!-- Google Login -->
                        <div class="text-center mt-3">
                            <p class="text-muted">or</p>
                            <a href="google-login-handler.php" class="btn btn-outline-dark w-100">
                                <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google logo"
                                    width="20" class="me-2">
                                Sign in with Google
                            </a>
                        </div>

                        <!-- Signup Redirect -->
                        <div class="mt-4 text-center">
                            <small>Don't have an account? <a href="signup.php" style="color:var(--accent);">Sign up here</a></small>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        tooltipTriggerList.forEach(function (tooltipTriggerEl) {
            new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
</body>

</html>