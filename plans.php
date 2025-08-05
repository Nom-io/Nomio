<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Plans – Nomio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/plans.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <div class="d-flex logo align-content-center">
                <a href="index.php" class="mt-2"><img src="assets/images/icon.png" style="height: 30px;"
                        alt="Logo Icon"></a>
                <a class="navbar-brand fw-bold mt-1 ms-1" href="index.php">Nomio</a>
            </div>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="plans.php" class="nav-link ms-3"
                            style="color: var(--accent); border-bottom: 2px solid var(--accent);">Plans</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link ms-3">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Heading Section -->
    <section class="plans-section-heading p-3 mt-5 mb-4 text-center">
        <h1>Our Pricing</h1>
    </section>

    <!-- Plan Card Section -->
    <div class="container">
        <div class="plan-card">
            <img src="assets/images/icon.png" alt="Nomio icon" style="height: 40px;" class="mb-3">
            <h2>Free Plan</h2>

            <div class="plan-divider"></div>

            <div class="plan-price">$0.00</div>
            <p class="text-muted">All the features. No cost.</p>

            <ul class="feature-list list-unstyled">
                <li>✓ Real-time attendance tracking</li>
                <li>✓ Tools for administrators and teachers</li>
                <li>✓ Automated and customizable attendance</li>
                <li>✓ Secure student check-in</li>
                <li>✓ Seamless login with HAC accounts</li>
                <li>✓ School-wide attendance insights</li>
            </ul>

            <a href="signup.php" class="btn primary-btn w-100 mt-4">Select</a>
        </div>
        <div class="text-center">
            <small>Are you a student? Have an account?<a href="login.php" style="color:var(--accent);"> Log in
                    here</a></small>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>