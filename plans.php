<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Plans – Nomio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/icon.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    <style>
        :root {
            --bg: #fdf9f2;
            --primary: #1a3300;
            --secondary: #fcec5b;
            --accent: #e58f65;
            --text: #4a3f35;
            --text-muted: #7c6f65;
            --border: #ddd1c1;
        }

        body {
            background-color: var(--bg);
            color: var(--text);
        }

        /* Heading Section */
        .section-heading {
            background-color: var(--bg);
            text-align: center;
        }

        .section-heading h1 {
            font-size: 3rem;
            font-weight: bold;
            color: var(--primary);
        }

        .section-heading p {
            color: var(--text-muted);
            font-size: 1.1rem;
            margin-top: 0.5rem;
        }

        /* Plan Card */
        .plan-card {
            max-width: 400px;
            margin: 0 auto 4rem auto;
            background: #fff;
            border-radius: 10px;
            padding: 2.5rem;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.05);
            border: 1px solid var(--border);
            text-align: center;
        }

        .plan-card h2 {
            color: var(--primary);
            font-weight: bold;
        }

        .plan-divider {
            height: 1px;
            background-color: var(--border);
            margin: 1.5rem 0;
        }

        .plan-price {
            font-size: 2.5rem;
            font-weight: bold;
            color: var(--accent);
            margin-bottom: 1rem;
        }

        .feature-list {
            text-align: left;
            margin-top: 1.5rem;
        }

        .feature-list li {
            margin-bottom: 0.5rem;
            color: var(--text);
        }

        .btn-select {
            margin-top: 2rem;
            background-color: var(--primary);
            color: var(--secondary);
            border: none;
            transition: all 0.3s ease;
        }

        .btn-select:hover {
            background-color: #142600;
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <div class="d-flex logo align-content-center">
                <a href="index.php"><img src="assets/images/icon.png" style="height: 45px;" alt="Logo Icon"></a>
                <a class="navbar-brand fw-bold mt-1" href="index.php">Nomio</a>
            </div>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="plans.php" class="nav-link ms-3" style="color: var(--accent); border-bottom: 2px solid var(--accent);">Plans</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link ms-3 btn">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Heading Section -->
    <section class="section-heading p-3 mt-5">
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
                <li>✓ Access for unlimited students</li>
                <li>✓ Administrator tools</li>
                <li>✓ Integration with HAC</li>
                <li>✓ Secure student login</li>
                <li>✓ Google account support</li>
                <li>✓ District management</li>
            </ul>

            <a href="signup.php" class="btn btn-select w-100">Select</a>
        </div>
        <div class="text-center">
                <small>Are you a student? Have an account?<a href="login.php" style="color:var(--accent);"> Log in here</a></small>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
