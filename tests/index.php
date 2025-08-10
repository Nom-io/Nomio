<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Nomio – Smart Attendance, Simplified</title>
    <link rel="icon" href="assets/images/icon.png" type="image/png" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="index.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 shadow-sm">
        <div class="container">
            <div class="d-flex logo align-content-center">
                <a href="index.php" class="mt-2"><img src="assets/images/icon.png" style="height: 30px;" alt="Nomio Logo" /></a>
                <a class="navbar-brand fw-bold mt-1 ms-1" href="index.php">Nomio</a>
            </div>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav"><span
                    class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="plans.php" class="nav-link ms-3">Plans</a></li>
                    <li class="nav-item"><a href="login.php" class="nav-link ms-3">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-center">
        <div class="container">
            <h1 class="display-3 fw-bold text-dark mb-4">Smart Attendance, Simplified.</h1>
            <p class="lead text-muted mb-5">Nomio streamlines attendance tracking for schools, empowering educators and administrators with accurate, real-time data to improve student engagement and success.</p>
            <a href="#main-content" class="btn primary-btn btn-lg px-5 py-3 shadow d-inline-flex align-items-center justify-content-center gap-2">
                Get Started – It's Free
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-arrow-down" viewBox="0 0 16 16" aria-hidden="true" focusable="false">
                    <path fill-rule="evenodd" d="M8 12a.5.5 0 0 1-.374-.832l3.5-4a.5.5 0 0 1 .748 0l3.5 4A.5.5 0 0 1 15 12h-7zM8 2a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-1 0v-9A.5.5 0 0 1 8 2z"/>
                </svg>
            </a>
        </div>
    </section>

    <!-- Main Content Start -->
    <main id="main-content">
        <!-- Side by Side Layout -->
        <section class="container py-5 side-by-side">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="image-placeholder w-100"></div>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title mb-4">A Smarter Way to Track Attendance</h2>
                    <p class="text-muted mb-4">Nomio makes attendance tracking effortless for schools of all sizes. From automated roll calls to real-time reports, our platform saves time, reduces paperwork, and keeps students engaged.</p>
                    <ul class="list-unstyled">
                        <li class="mb-2">✔ Instant attendance updates</li>
                        <li class="mb-2">✔ Seamless integration with school systems</li>
                        <li class="mb-2">✔ Mobile-friendly for on-the-go access</li>
                    </ul>
                    <a href="signup.php" class="btn primary-btn mt-3 px-4 py-2">Learn More</a>
                </div>
            </div>
        </section>

        <!-- Features Section -->
        <section class="container py-5">
            <h2 class="text-center section-title mb-5">Why Choose Nomio?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="icon-container mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">Real-time Tracking</h5>
                        <p class="text-muted">Instantly track and manage student attendance with live updates, making manual record-keeping a thing of the past.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="icon-container mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z" />
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 0 0-3-3 3 3 0 0 0-3 3h1a2 2 0 0 1 2-2 2 2 0 0 1 2 2h1zm9 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H10a.5.5 0 0 1-.5.5z" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">Seamless Integration</h5>
                        <p class="text-muted">Connects directly with Home Access Center (HAC) accounts for a smooth and secure login experience for students.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card text-center h-100">
                        <div class="icon-container mx-auto">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                                <path d="M11 2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v7h1V5a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v9h1a1 1 0 0 1 1 1H2a1 1 0 0 1 1-1v-4a.5.5 0 0 1 1 0v4H4V2a.5.5 0 0 1 1 0z" />
                            </svg>
                        </div>
                        <h5 class="fw-bold">Data-Driven Insights</h5>
                        <p class="text-muted">Access powerful analytics and reports to identify attendance trends and support student success effectively.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call to Action Section -->
        <section class="bg-primary-alt text-white text-center py-5">
            <div class="container">
                <h2 class="section-title mb-3">Ready to simplify your school's attendance?</h2>
                <p class="lead mb-4">Join hundreds of schools and start using Nomio for free today.</p>
                <a href="signup.php" class="btn primary-btn btn-lg px-5 py-3 fw-bold">Sign Up Now</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3">
        © 2025 Nomio. All rights reserved.
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
