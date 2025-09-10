<?= $this->extend('Template') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4"><?= $page_title ?></h1>
                <p class="lead mb-4">
                    Learn more about our mission, vision, and the dedicated team behind our Learning Management System.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card feature-card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-bullseye text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5 class="card-title">Our Mission</h5>
                        <p class="card-text text-muted"><?= $mission ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card feature-card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-eye-fill text-primary mb-3" style="font-size: 3rem;"></i>
                        <h5 class="card-title">Our Vision</h5>
                        <p class="card-text text-muted"><?= $vision ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Meet Our Team</h2>
                <p class="lead text-muted">The passionate individuals behind our platform</p>
            </div>
        </div>
        
        <div class="row g-4">
            <?php foreach ($team as $member): ?>
            <div class="col-md-4">
                <div class="card feature-card h-100 text-center p-4">
                    <div class="card-body">
                        <i class="bi bi-person-circle text-primary mb-3" style="font-size: 4rem;"></i>
                        <h5 class="card-title"><?= $member['name'] ?></h5>
                        <h6 class="card-subtitle mb-3 text-muted"><?= $member['position'] ?></h6>
                        <p class="card-text text-muted"><?= $member['description'] ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Company Values Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Our Values</h2>
                <p class="lead text-muted">The principles that guide everything we do</p>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3">
                <div class="text-center">
                    <i class="bi bi-heart-fill text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5>Passion</h5>
                    <p class="text-muted">We are passionate about education and technology.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <i class="bi bi-shield-check text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5>Quality</h5>
                    <p class="text-muted">We maintain the highest standards in everything we do.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <i class="bi bi-people-fill text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5>Community</h5>
                    <p class="text-muted">We believe in building strong learning communities.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center">
                    <i class="bi bi-lightbulb-fill text-primary mb-3" style="font-size: 3rem;"></i>
                    <h5>Innovation</h5>
                    <p class="text-muted">We continuously innovate to improve learning experiences.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-6 fw-bold mb-4">Ready to Join Our Learning Community?</h2>
                <p class="lead mb-4">
                    Start your educational journey with us today and discover the power of online learning.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?= base_url('/contact') ?>" class="btn btn-light btn-lg">
                        <i class="bi bi-envelope-fill me-2"></i>Contact Us
                    </a>
                    <a href="<?= base_url('/') ?>" class="btn btn-outline-light btn-lg">
                        <i class="bi bi-house-fill me-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
