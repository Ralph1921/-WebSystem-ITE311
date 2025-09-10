<?= $this->extend('Template') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4"><?= $page_title ?></h1>
                <p class="lead mb-4">
                    Transform your learning experience with our comprehensive Learning Management System. 
                    Access courses, track progress, and achieve your educational goals.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn btn-light btn-lg">
                        <i class="bi bi-play-circle-fill me-2"></i>Get Started
                    </a>
                    <a href="#" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-info-circle-fill me-2"></i>Learn More
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <i class="bi bi-mortarboard-fill" style="font-size: 15rem; opacity: 0.3;"></i>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Why Choose Our LMS?</h2>
                <p class="lead text-muted">Discover the features that make learning effective and enjoyable</p>
            </div>
        </div>
        
        <div class="row g-4">
            <?php foreach ($features as $feature): ?>
            <div class="col-md-6 col-lg-3">
                <div class="card feature-card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="<?= $feature['icon'] ?> text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5 class="card-title"><?= $feature['title'] ?></h5>
                        <p class="card-text text-muted"><?= $feature['description'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="h2 text-primary fw-bold">500+</div>
                <p class="text-muted">Active Students</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="h2 text-primary fw-bold">50+</div>
                <p class="text-muted">Expert Instructors</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="h2 text-primary fw-bold">100+</div>
                <p class="text-muted">Available Courses</p>
            </div>
            <div class="col-md-3 mb-4">
                <div class="h2 text-primary fw-bold">95%</div>
                <p class="text-muted">Success Rate</p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-6 fw-bold mb-4">Ready to Start Learning?</h2>
                <p class="lead mb-4">
                    Join thousands of students who are already advancing their careers with our courses.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="#" class="btn btn-primary btn-lg">
                        <i class="bi bi-person-plus-fill me-2"></i>Create Account
                    </a>
                    <a href="#" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-eye-fill me-2"></i>Browse Courses
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
