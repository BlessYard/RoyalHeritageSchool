<?php
$success = "";
$error   = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = trim($_POST['fullname']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $class    = trim($_POST['class']);
    $message  = trim($_POST['message']);

    if (!empty($fullname) && !empty($email) && !empty($phone) && !empty($class)) {
        $whatsapp_number = "250793194659"; // ← update to Royal School WhatsApp number

        $text  = "New Admission Application:%0A";
        $text .= "Name: "    . urlencode($fullname) . "%0A";
        $text .= "Email: "   . urlencode($email)    . "%0A";
        $text .= "Phone: "   . urlencode($phone)    . "%0A";
        $text .= "Class: "   . urlencode($class)    . "%0A";
        $text .= "Message: " . urlencode($message);

        $whatsapp_url = "https://wa.me/$whatsapp_number?text=$text";

        $to      = "timebless19myers@gmail.com"; // ← update to Royal School email
        $subject = "New Admission Application – Royal School";
        $body    = "\nNew Admission Application:\n\nFull Name: $fullname\nEmail: $email\nPhone: $phone\nClass: $class\nMessage: $message\n";
        $headers = "From: timebless19myers@gmail.com"; // ← update to Royal School email

        mail($to, $subject, $body, $headers);
        header("Location: $whatsapp_url");
        exit();
    } else {
        $error = "Please fill in all required fields.";
    }
}
?>
<?php include_once 'includes/header.php'; ?>


<!-- ════════════════ PAGE BANNER ════════════════ -->
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
    <p>Begin your child's journey towards excellence at Royal School.</p>
    </div>

  </div>
</section>
<!-- ════════════════ INTRO ════════════════ -->
<section style="padding: 64px 0 0;" data-animate>
  <div class="container text-center">
    <h2 class="section-title">Join The Royal Family</h2>
    <p style="color:var(--gray); font-size:15px; max-width:620px; margin:16px auto 0; line-height:1.8;">
      We welcome applications from families who share our commitment to academic excellence,
      strong values, and the holistic development of every child.
    </p>
  </div>
</section>

<!-- ════════════════ FORM + INFO ════════════════ -->
<section style="padding: 48px 0 64px;" data-animate>
  <div class="container">
    <div class="admission-grid">

      <!-- ── Left: Info panel ── -->
      <div class="admission-info">
        <h3>How To Apply</h3>
        <p>Follow these simple steps to submit your child's application. Our admissions team will contact you within 48 hours.</p>

        <ul class="step-list">
          <li>
            <div class="step-num">1</div>
            <div><strong>Complete the form</strong> Fill in all required fields with accurate information about your child.</div>
          </li>
          <li>
            <div class="step-num">2</div>
            <div><strong>WhatsApp confirmation</strong> After submitting, you will be redirected to WhatsApp to confirm your application.</div>
          </li>
          <li>
            <div class="step-num">3</div>
            <div><strong>Await response</strong> Our admissions team will review your application and reach out to schedule an assessment.</div>
          </li>
          <li>
            <div class="step-num">4</div>
            <div><strong>Enrolment</strong> Upon acceptance, you will receive enrolment details and the documents required to complete registration.</div>
          </li>
        </ul>

        <p style="font-size:13px; font-weight:600; color:var(--navy); margin-bottom:10px;">Need help? Contact us directly:</p>
        <div class="contact-strip">
          <a href="tel:+2310000000000">
            +231 000 000 0000
          </a>
          <a href="mailto:timebless19myers@gmail.com">
            info@royalheritage.com
          </a>
          <a href="https://wa.me/250793194659" target="_blank" rel="noopener">
            WhatsApp Us
          </a>
        </div>
      </div>

      <!-- ── Right: Form card ── -->
      <div class="admission-form-card">
        <div class="form-card-head">
          <h4>Admission Application Form</h4>
          <p>2026–2027 Academic Session · All fields marked <span style="color:var(--gold-light)">*</span> are required</p>
        </div>
        <div class="form-card-body">

          <?php if (!empty($error)): ?>
            <div class="alert-royal alert-error">
              <?php echo htmlspecialchars($error); ?>
            </div>
          <?php endif; ?>

          <?php if (!empty($success)): ?>
            <div class="alert-royal alert-success">
              <svg viewBox="0 0 24 24" fill="#27ae60"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41L9 16.17z"/></svg>
              <?php echo htmlspecialchars($success); ?>
            </div>
          <?php endif; ?>

          <form method="POST" action="" novalidate>

            <div class="form-row">
              <div class="form-group">
                <label for="fullname">Full Name <span class="req">*</span></label>
                <input type="text" id="fullname" name="fullname" class="form-control-royal"
                       placeholder="e.g. John Doe"
                       value="<?php echo htmlspecialchars($_POST['fullname'] ?? ''); ?>" required>
              </div>
              <div class="form-group">
                <label for="email">Email Address <span class="req">*</span></label>
                <input type="email" id="email" name="email" class="form-control-royal"
                       placeholder="e.g. john@email.com"
                       value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>" required>
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="phone">Phone / WhatsApp <span class="req">*</span></label>
                <input type="tel" id="phone" name="phone" class="form-control-royal"
                       placeholder="e.g. +231 770 000 000"
                       value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>" required>
              </div>
              <div class="form-group">
                <label for="class">Class Applying For <span class="req">*</span></label>
                <select id="class" name="class" class="form-control-royal" required>
                  <option value="" disabled <?php echo empty($_POST['class']) ? 'selected' : ''; ?>>Select class…</option>
                  <optgroup label="Early Childhood">
                    <option value="Daycare"     <?php echo (($_POST['class'] ?? '') === 'Daycare')     ? 'selected' : ''; ?>>Daycare</option>
                    <option value="Pre-Nursery" <?php echo (($_POST['class'] ?? '') === 'Pre-Nursery') ? 'selected' : ''; ?>>Pre-Nursery</option>
                    <option value="Nursery"     <?php echo (($_POST['class'] ?? '') === 'Nursery')     ? 'selected' : ''; ?>>Nursery</option>
                    <option value="Kindergarten"<?php echo (($_POST['class'] ?? '') === 'Kindergarten')? 'selected' : ''; ?>>Kindergarten</option>
                  </optgroup>
                  <optgroup label="Lower Elementary">
                    <option value="Grade 1"<?php echo (($_POST['class'] ?? '') === 'Grade 1') ? 'selected' : ''; ?>>Grade 1</option>
                    <option value="Grade 2"<?php echo (($_POST['class'] ?? '') === 'Grade 2') ? 'selected' : ''; ?>>Grade 2</option>
                    <option value="Grade 3"<?php echo (($_POST['class'] ?? '') === 'Grade 3') ? 'selected' : ''; ?>>Grade 3</option>
                  </optgroup>
                  <optgroup label="Upper Elementary">
                    <option value="Grade 4"<?php echo (($_POST['class'] ?? '') === 'Grade 4') ? 'selected' : ''; ?>>Grade 4</option>
                    <option value="Grade 5"<?php echo (($_POST['class'] ?? '') === 'Grade 5') ? 'selected' : ''; ?>>Grade 5</option>
                    <option value="Grade 6"<?php echo (($_POST['class'] ?? '') === 'Grade 6') ? 'selected' : ''; ?>>Grade 6</option>
                  </optgroup>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label for="message">Additional Message <span style="color:var(--gray);font-weight:400;">(optional)</span></label>
              <textarea id="message" name="message" class="form-control-royal"
                        placeholder="Any additional information about your child or questions for our admissions team…"><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
            </div>

            <button type="submit" class="btn-submit">
              Submit Application via WhatsApp
            </button>

          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ════════════════ CTA ════════════════ -->
<section class="container pb-5" data-animate>
  <div class="cta-block">
    <h2>Have Questions About Admissions?</h2>
    <p class="mb-4">Our admissions team is ready to guide you through every step of the process.</p>
    <a href="contact.php" class="btn-gold">Contact Us Today</a>
  </div>
</section>

<?php include_once 'includes/footer.php'; ?>