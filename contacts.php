<?php include_once 'Includes/header.php'; ?>

<?php
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $subject  = trim($_POST['subject']);
    $message  = trim($_POST['message']);

    if (!empty($fullname) && !empty($email) && !empty($message)) {
        $to      = "info@royalheritageschool.lr";
        $subject_line = "Contact Form Submission: $subject";
        $body    = "New Contact Form Submission:\n\n";
        $body   .= "Name: $fullname\n";
        $body   .= "Email: $email\n";
        $body   .= "Subject: $subject\n";
        $body   .= "Message:\n$message\n";
        
        $headers = "From: $email\r\nReply-To: $email";

        if (mail($to, $subject_line, $body, $headers)) {
            $success = "Thank you for contacting us! We'll get back to you soon.";
        } else {
            $error = "Sorry, there was an issue sending your message. Please try again.";
        }
    } else {
        $error = "Please fill in all required fields.";
    }
}
?>

<style>
    .ls-3 { letter-spacing: 3px; }
    .transition-hover { transition: transform 0.3s ease, background-color 0.3s ease; }
    .transition-hover:hover { transform: translateY(-10px); background-color: #fff !important; box-shadow: 0 1rem 3rem rgba(0,0,0,.05) !important; }
    .min-vh-50 { min-height: 50vh; }
    .form-control:focus { background-color: #fff !important; border: 1px solid var(--royal-gold) !important; box-shadow: none; }
    #bg{
      background-color: #0b1f3a !important;
    }
</style>

<!-- ===== PAGE HERO ===== -->
<section id="page-hero" aria-labelledby="page-hero-heading">
    <div class="slide-overlay"></div>
  <div class="page-hero-inner">
    <div class="page-hero-text">
    <h1 id="page-hero-heading">Contact Us</h1>
    <p>We would love to hear from you.</p>
    </div>

  </div>
</section>

<!-- ══════════════ MINI HIGHLIGHT CARDS ══════════════ -->
<section class="py-5" data-animate>
  <div class="container">
    <div class="row g-4">

      <div class="col-lg-4">
        <div class="info-card admission-mini-card">
          <i class="bi bi-calendar-check-fill"></i>
          <h5>Locate Us</h5>
          <p class="mb-0">24th Street Sinkor <br> Monrovia, Liberia </p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="info-card admission-mini-card">
          <i class="bi bi-people-fill"></i>
          <h5>Contact Us</h5>
          <p class="mb-0">+231 777-006-500</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="info-card admission-mini-card">
          <i class="bi bi-mortarboard-fill"></i>
          <h5>Email Us</h5>
          <p class="mb-0">info@royalheritages.com <br> admissions@royalheritages.com</p>
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
                
                <?php if ($success): ?>
                  <div class="alert alert-success text-center mb-4"><?php echo $success; ?></div>
                <?php endif; ?>
                
                <?php if ($error): ?>
                  <div class="alert alert-danger text-center mb-4"><?php echo $error; ?></div>
                <?php endif; ?>
                
                <form action="contacts.php" method="POST">
                    <div class="mb-3">
                        <input type="text" name="fullname" class="form-control form-control-lg border-0 bg-light" placeholder="Your Name" required>
                    </div>
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control form-control-lg border-0 bg-light" placeholder="Email Address" required>
                    </div>
                    <div class="mb-3">
                        <input type="text" name="subject" class="form-control form-control-lg border-0 bg-light" placeholder="Subject">
                    </div>
                    <div class="mb-4">
                        <textarea name="message" class="form-control form-control-lg border-0 bg-light" rows="5" placeholder="Your Message" required></textarea>
                    </div>
                     <div class="col-12 text-center">
                <button type="submit" class="btn btn-navy btn-lg">Send Message</button>
              </div>
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

<section class="py-5 text-white bg-blue text-center" id="bg">
    <div class="container" data-aos="zoom-in">
        <h4 class="fw-light ls-2 mb-4">SCHOOL OFFICE HOURS</h4>
        <div class="d-flex justify-content-center gap-5 flex-wrap">
            <div>
                <p class="mb-0 text-white small">MONDAY - FRIDAY</p>
                <h5 class="fw-bold">8:00 AM - 4:00 PM</h5>
            </div>
            <div style="width: 1px; "></div>
            <div>
                <p class="mb-0 text-white small">SATURDAY</p>
                <h5 class="fw-bold">9:00 AM - 12:00 PM</h5>
            </div>
        </div>
    </div>
</section>
<?php include_once 'Includes/footer.php'; ?>