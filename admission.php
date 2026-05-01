<?php include("Includes/header.php"); ?>

<?php
$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $class    = trim($_POST['class']);
    $message  = trim($_POST['message']);

    if (!empty($fullname) && !empty($email) && !empty($phone) && !empty($class)) {
        $whatsapp_number = "231000000000"; 

        $text  = "New Admission Application:%0A";
        $text .= "Name: "    . urlencode($fullname) . "%0A";
        $text .= "Email: "   . urlencode($email)    . "%0A";
        $text .= "Phone: "   . urlencode($phone)    . "%0A";
        $text .= "Class: "   . urlencode($class)    . "%0A";
        $text .= "Message: " . urlencode($message);

        $whatsapp_url = "https://wa.me/$whatsapp_number?text=$text";

        $to      = "info@royalheritageschool.lr";
        $subject = "New Admission Application – Royal Heritage School";
        $body    = "\nNew Admission Application:\n\nFull Name: $fullname\nEmail: $email\nPhone: $phone\nClass: $class\nMessage: $message\n";
        $headers = "From: no-reply@royalheritageschool.lr";

        mail($to, $subject, $body, $headers);
        header("Location: $whatsapp_url");
        exit();
    } else {
        $error = "Please fill all required fields.";
    }
}
?>


<!-- ===== PAGE HERO ===== -->
<section id="page-hero" aria-labelledby="page-hero-heading">
    <div class="slide-overlay"></div>
  <div class="page-hero-inner">
    <div class="page-hero-text">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Admissions</span>
      </nav>
    <h1 id="page-hero-heading">Admissions</h1>
    <p>Join Royal Heritage School and give your child a strong foundation.</p>
    </div>

  </div>
</section>
<!-- ══════════════ Info CARDS ══════════════ -->
<section class="py-5" data-animate>
  <div class="container">
    <div class="row g-4">

      <div class="col-lg-4">
        <div class="info-card admission-mini-card">
          <i class="bi bi-calendar-check-fill"></i>
          <h5>Rolling Admissions</h5>
          <p class="mb-0">Applications are reviewed promptly during each intake period.</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="info-card admission-mini-card">
          <i class="bi bi-people-fill"></i>
          <h5>Parent Support</h5>
          <p class="mb-0">Our team guides parents through every step from inquiry to enrollment.</p>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="info-card admission-mini-card">
          <i class="bi bi-mortarboard-fill"></i>
          <h5>Grade Placement</h5>
          <p class="mb-0">Students are placed based on age, records, and readiness assessment.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════ ADMISSION REQUIREMENTS ══════════════ -->
<section class="py-5 bg-light" data-animate>
  <div class="container text-center">
    <h2 class="section-title mb-4">Admission Requirements</h2>
    <div class="row g-4 align-items-start text-start">

      <div class="col-lg-6">
        <div class="info-card h-100">
          <h5 class="mb-3">Required Documents</h5>
          <ul class="list-unstyled admission-checklist mb-0">
            <li><i class="bi bi-check-circle-fill"></i> Completed Application Form</li>
            <li><i class="bi bi-check-circle-fill"></i> Child Birth Certificate (copy)</li>
            <li><i class="bi bi-check-circle-fill"></i> Previous School Records / Transcript</li>
            <li><i class="bi bi-check-circle-fill"></i> Two Recent Passport Photos</li>
            <li><i class="bi bi-check-circle-fill"></i> Parent / Guardian Contact Information</li>
          </ul>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="info-card h-100">
          <h5 class="mb-3">Important Admission Dates</h5>
          <ul class="list-unstyled mb-0 admission-dates">
            <li><span>Application Window Opens</span><strong>Aug 25, 2026</strong></li>
            <li><span>Placement Assessment</span><strong>Sep 2 – Sep 5, 2026</strong></li>
            <li><span>Admission Decisions</span><strong>Sep 7, 2026</strong></li>
            <li><span>Enrollment Confirmation</span><strong>Sep 8 – Sep 12, 2026</strong></li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════ ADMISSION PROCESS ══════════════ -->
<section class="py-5" data-animate>
  <div class="container">
    <h2 class="section-title text-center mb-4">Admission Process</h2>
    <div class="row g-3">

      <div class="col-md-6 col-lg-3">
        <div class="process-card admission-process-card" data-num="1">
          <span class="step">Step 1</span>
          <h6>Apply Online</h6>
          <p class="mb-0">Submit the admission form with child details.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="process-card admission-process-card" data-num="2">
          <span class="step">Step 2</span>
          <h6>Document Review</h6>
          <p class="mb-0">Our team verifies submitted records and contacts you.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="process-card admission-process-card" data-num="3">
          <span class="step">Step 3</span>
          <h6>Assessment</h6>
          <p class="mb-0">Child placement and readiness checks are completed.</p>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="process-card admission-process-card" data-num="4">
          <span class="step">Step 4</span>
          <h6>Enrollment</h6>
          <p class="mb-0">Receive approval and complete registration.</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ══════════════ ONLINE APPLICATION FORM ══════════════ -->
<section id="apply-now" class="py-5 bg-light" data-animate>
  <div class="container">
    <h2 class="section-title text-center mb-4">Online Application Form</h2>

    <?php if ($error): ?>
      <div class="alert alert-danger text-center"><?php echo $error; ?></div>
    <?php endif; ?>

    <div class="row g-4 align-items-stretch">

      <!-- Form -->
      <div class="col-lg-8">
        <div class="contact-card h-100">
          <form method="POST">
            <div class="row g-3">

              <div class="col-md-6">
                <input type="text" name="fullname" class="form-control" placeholder="Full Name *" required>
              </div>

              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email Address *" required>
              </div>

              <div class="col-md-6">
                <input type="text" name="phone" class="form-control" placeholder="Phone Number *" required>
              </div>

              <div class="col-md-6">
                <select name="class" class="form-select" required>
                  <option value="">Select Class *</option>
                  <option>Day Care (6 months – 2 years)</option>
                  <option>Kindergarten 1 (Age 3)</option>
                  <option>Kindergarten 2 (Age 4)</option>
                  <option>Kindergarten 3 (Age 5)</option>
                  <option>Grade 1</option>
                  <option>Grade 2</option>
                  <option>Grade 3</option>
                  <option>Grade 4</option>
                  <option>Grade 5</option>
                  <option>Grade 6</option>
                </select>
              </div>

              <div class="col-12">
                <textarea name="message" rows="4" class="form-control" placeholder="Additional Information (Optional)"></textarea>
              </div>

              <div class="col-12 text-center">
                <button type="submit" class="btn btn-navy-solid btn-lg">Submit Application</button>
              </div>

            </div>
          </form>
        </div>
      </div>

      <!-- Help Sidebar -->
      <div class="col-lg-4">
        <div class="contact-card h-100 admission-help-card">
          <h5 class="mb-3">Need Help?</h5>
          <p class="mb-3">Our admissions desk can help with forms, document preparation, and class placement guidance.</p>
          <p class="mb-2"><i class="bi bi-telephone-fill me-2"></i>+231 000 000 000</p>
          <p class="mb-3"><i class="bi bi-envelope-fill me-2"></i>info@royalheritageschool.lr</p>
          <div class="d-grid gap-2">
            <a href="https://wa.me/231000000000?text=Hello%20Admissions%20Team,%20I%20need%20help%20with%20my%20application."
               target="_blank" class="btn-wa-green">
              <i class="bi bi-whatsapp me-1"></i> Chat on WhatsApp
            </a>
            <a href="contacts.php" class="btn slide-cta-outline" style="color: #fff; text-align: center !important;">Visit Contact Page</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include_once 'Includes/footer.php'; ?>