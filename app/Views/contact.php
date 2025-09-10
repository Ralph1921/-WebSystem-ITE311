<?= $this->extend('Template') ?>

<?= $this->section('content') ?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4"><?= $page_title ?></h1>
                <p class="lead mb-4">
                    We'd love to hear from you. Get in touch with us for any questions, support, or feedback.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-5">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card feature-card h-100 p-4">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Contact Information</h3>
                        
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-envelope-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <h6 class="mb-1">Email</h6>
                                        <p class="mb-0 text-muted"><?= $contact_info['email'] ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-telephone-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <h6 class="mb-1">Phone</h6>
                                        <p class="mb-0 text-muted"><?= $contact_info['phone'] ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <i class="bi bi-geo-alt-fill text-primary me-3 mt-1" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <h6 class="mb-1">Address</h6>
                                        <p class="mb-0 text-muted"><?= $contact_info['address'] ?></p>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-12">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-clock-fill text-primary me-3" style="font-size: 1.5rem;"></i>
                                    <div>
                                        <h6 class="mb-1">Business Hours</h6>
                                        <p class="mb-0 text-muted"><?= $contact_info['hours'] ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="card feature-card h-100 p-4">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Send us a Message</h3>
                        
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Enter your full name">
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter your email">
                            </div>
                            
                            <div class="mb-3">
                                <label for="subject" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="subject" placeholder="Enter subject">
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">Message</label>
                                <textarea class="form-control" id="message" rows="5" placeholder="Enter your message"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-lg w-100">
                                <i class="bi bi-send-fill me-2"></i>Send Message
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Frequently Asked Questions</h2>
                <p class="lead text-muted">Find answers to common questions</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="faqAccordion">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq1">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1">
                                How do I enroll in a course?
                            </button>
                        </h2>
                        <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Simply browse our course catalog, select the course you're interested in, and click the "Enroll" button. You'll need to create an account if you haven't already.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq2">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2">
                                Is there a mobile app available?
                            </button>
                        </h2>
                        <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                Yes! Our platform is fully responsive and works great on mobile devices. You can access all features through your mobile browser.
                            </div>
                        </div>
                    </div>
                    
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="faq3">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3">
                                How do I get a certificate?
                            </button>
                        </h2>
                        <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                            <div class="accordion-body">
                                To earn a certificate, you need to complete all course requirements, including watching all lessons, completing assignments, and passing the final quiz with a minimum score of 70%.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="display-6 fw-bold mb-4">Still Have Questions?</h2>
                <p class="lead mb-4">
                    Our support team is here to help you succeed in your learning journey.
                </p>
                <div class="d-flex justify-content-center gap-3 flex-wrap">
                    <a href="<?= base_url('/about') ?>" class="btn btn-outline-primary btn-lg">
                        <i class="bi bi-info-circle-fill me-2"></i>Learn More About Us
                    </a>
                    <a href="<?= base_url('/') ?>" class="btn btn-primary btn-lg">
                        <i class="bi bi-house-fill me-2"></i>Back to Home
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>
