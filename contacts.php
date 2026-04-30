<?php include_once 'includes/header.php'; ?>
<style>
    .ls-3 { letter-spacing: 3px; }
    .transition-hover { transition: transform 0.3s ease, background-color 0.3s ease; }
    .transition-hover:hover { transform: translateY(-10px); background-color: #fff !important; box-shadow: 0 1rem 3rem rgba(0,0,0,.05) !important; }
    .min-vh-50 { min-height: 50vh; }
    .form-control:focus { background-color: #fff !important; border: 1px solid var(--royal-gold) !important; box-shadow: none; }
</style>

<!-- ===== PAGE HERO ===== -->
<section id="page-hero" aria-labelledby="page-hero-heading">
    <div class="slide-overlay"></div>
  <div class="page-hero-inner">
    <div class="page-hero-text">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Contact Us</span>
      </nav>
    <h1 id="page-hero-heading">contact Us</h1>
    <p>We would love to hear from you.</p>
    </div>

  </div>
</section>

<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row g-4 text-center">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="p-5 border-0 shadow-sm h-100 bg-light transition-hover">
                    <div class="mb-4 text-primary" style="color: var(--royal-blue) !important;">
                        <i class="bi bi-geo-alt fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Our Location</h5>
                    <p class="text-muted small">24th Street Beach Side, Sinkor,<br>Monrovia, Liberia</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="p-5 border-0 shadow-sm h-100 bg-light transition-hover">
                    <div class="mb-4 text-danger" style="color: var(--royal-red) !important;">
                        <i class="bi bi-telephone-outbound fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Call Us</h5>
                    <p class="text-muted small">+231 XX-XXX-XXX<br>+231 XX-XXX-XXX</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="p-5 border-0 shadow-sm h-100 bg-light transition-hover">
                    <div class="mb-4 text-warning" style="color: var(--royal-gold) !important;">
                        <i class="bi bi-envelope-paper fs-1"></i>
                    </div>
                    <h5 class="fw-bold">Email Support</h5>
                    <p class="text-muted small">info@royalheritage.edu.lr<br>admissions@royalheritage.edu.lr</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row g-0 shadow-lg rounded overflow-hidden">
            <div class="col-lg-6 p-5 bg-white" data-aos="fade-right">
                <h2 class="fw-bold mb-4">Send a Message</h2>
                <form action="#" method="POST">
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg border-0 bg-light" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control form-control-lg border-0 bg-light" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control form-control-lg border-0 bg-light" placeholder="Subject">
                    </div>
                    <div class="mb-4">
                        <textarea class="form-control form-control-lg border-0 bg-light" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-gold btn-lg w-100 py-3">Send Message</button>
                </form>
            </div>
            
            <div class="col-lg-6" data-aos="fade-left">
                <div class="h-100 w-100 min-vh-50">
                    <iframe 
                       src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4324.768571538522!2d-10.773942588605209!3d6.286072484640816!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xf0a029a047b19b7%3A0xdc020e8b6299563a!2s24th%20St%2C%20Monrovia%2C%20Liberia!5e0!3m2!1sen!2srw!4v1777447981530!5m2!1sen!2srw"
                        width="100%" height="100%" style="border:0; min-height: 450px;" 
                        allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-dark text-white text-center">
    <div class="container" data-aos="zoom-in">
        <h4 class="fw-light ls-2 mb-4">SCHOOL OFFICE HOURS</h4>
        <div class="d-flex justify-content-center gap-5 flex-wrap">
            <div>
                <p class="mb-0 text-muted small">MONDAY - FRIDAY</p>
                <h5 class="fw-bold">8:00 AM - 4:00 PM</h5>
            </div>
            <div style="width: 1px; background: rgba(255, 255, 255, 0.1);"></div>
            <div>
                <p class="mb-0 text-muted small">SATURDAY</p>
                <h5 class="fw-bold">9:00 AM - 12:00 PM</h5>
            </div>
        </div>
    </div>
</section>
<?php include_once 'includes/footer.php'; ?>