<?php
$page_title = "Donate to Royal Heritage School";
$meta_description = "Support Royal Heritage School with a donation and help us provide scholarships, learning materials, and better facilities for every child.";
$meta_keywords = "Royal Heritage School, donate, school donation, scholarship support, school funding, Liberia";
include_once 'Includes/header.php';

$success = "";
$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $full_name = trim($_POST['full_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $amount = trim($_POST['amount'] ?? '');
    $custom_amount = trim($_POST['custom_amount'] ?? '');
    $focus = trim($_POST['focus'] ?? '');
    $frequency = trim($_POST['frequency'] ?? '');
    $message = trim($_POST['message'] ?? '');

    $donation_amount = $amount === 'other' ? $custom_amount : $amount;

    if ($full_name !== '' && $email !== '' && $phone !== '' && $donation_amount !== '' && $focus !== '' && $frequency !== '') {
        $whatsapp_number = "231777006500";

        $text = "New Donation Pledge:%0A";
        $text .= "Name: " . urlencode($full_name) . "%0A";
        $text .= "Email: " . urlencode($email) . "%0A";
        $text .= "Phone: " . urlencode($phone) . "%0A";
        $text .= "Amount: " . urlencode($donation_amount) . "%0A";
        $text .= "Focus: " . urlencode($focus) . "%0A";
        $text .= "Frequency: " . urlencode($frequency) . "%0A";
        $text .= "Message: " . urlencode($message);

        $whatsapp_url = "https://wa.me/$whatsapp_number?text=$text";

        $to = "info@royalheritages.com";
        $subject = "New Donation Pledge - Royal Heritage School";
        $body = "New Donation Pledge:\n\n";
        $body .= "Full Name: $full_name\n";
        $body .= "Email: $email\n";
        $body .= "Phone: $phone\n";
        $body .= "Amount: $donation_amount\n";
        $body .= "Focus: $focus\n";
        $body .= "Frequency: $frequency\n";
        $body .= "Message: $message\n";
        $headers = "From: no-reply@royalheritages.com\r\nReply-To: $email\r\n";

        mail($to, $subject, $body, $headers);
        header("Location: $whatsapp_url");
        exit();
    } else {
        $error = "Please complete all required fields before sending your pledge.";
    }
}
?>

<!-- ===== PAGE HERO ===== -->
<section id="page-hero" aria-labelledby="page-hero-heading">
  <div class="slide-overlay"></div>
  <div class="page-hero-inner">
    <div class="page-hero-text">
      <span class="section-label">Give With Purpose</span>
      <h1 id="page-hero-heading">Support Royal Heritage School</h1>
      <p>Help us provide scholarships, learning materials, safer classrooms, and better opportunities for every child.</p>
    </div>
  </div>
</section>

<!-- ===================== IMPACT CARDS ===================== -->
<section class="py-5" data-animate>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="info-card admission-mini-card">
          <i class="fas fa-child"></i>
          <h5>Sponsor Learners</h5>
          <p class="mb-0">Help cover school fees, meals, and uniforms for children who need support.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card admission-mini-card">
          <i class="fas fa-book-open"></i>
          <h5>Equip Classrooms</h5>
          <p class="mb-0">Fund books, furniture, stationery, and practical learning tools.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="info-card admission-mini-card">
          <i class="fas fa-school"></i>
          <h5>Build for the Future</h5>
          <p class="mb-0">Support facilities, safety upgrades, and a stronger learning environment.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== DONATION FORM ===================== -->
<section class="py-5 bg-light" data-animate>
  <div class="container">
    <div class="row g-4 align-items-stretch">
      <div class="col-lg-7">
        <div class="donation-card donation-form">
          <span class="section-label">Make a Donation</span>
          <h2 class="section-title mb-2">Send your pledge</h2>
          <p class="section-sub mb-4">Pick a giving level or enter your own amount. We'll receive your pledge and follow up right away.</p>

          <?php if ($error): ?>
            <div class="alert alert-danger text-center mb-4"><?php echo $error; ?></div>
          <?php endif; ?>

          <form method="POST" action="donation.php">
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" name="full_name" class="form-control" placeholder="Your Full Name" required>
              </div>
              <div class="col-md-6">
                <input type="email" name="email" class="form-control" placeholder="Email Address" required>
              </div>
              <div class="col-md-6">
                <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required>
              </div>
              <div class="col-md-6">
                <select name="frequency" class="form-select" required>
                  <option value="">Giving Frequency</option>
                  <option value="One-time gift">One-time gift</option>
                  <option value="Monthly support">Monthly support</option>
                  <option value="Termly support">Termly support</option>
                  <option value="Annual support">Annual support</option>
                </select>
              </div>
              <div class="col-md-6">
                <select name="amount" class="form-select" required>
                  <option value="">Select an Amount</option>
                  <option value="25">25</option>
                  <option value="50">50</option>
                  <option value="100">100</option>
                  <option value="250">250</option>
                  <option value="other">Other amount</option>
                </select>
              </div>
              <div class="col-md-6">
                <input type="number" name="custom_amount" min="1" step="0.01" class="form-control" placeholder="Enter custom amount">
              </div>
              <div class="col-12">
                <select name="focus" class="form-select" required>
                  <option value="">Select Donation Focus</option>
                  <option value="Scholarships and tuition support">Scholarships and tuition support</option>
                  <option value="Learning materials and classroom supplies">Learning materials and classroom supplies</option>
                  <option value="Meals and child welfare">Meals and child welfare</option>
                  <option value="Facilities and campus improvements">Facilities and campus improvements</option>
                  <option value="Where needed most">Where needed most</option>
                </select>
              </div>
              <div class="col-12">
                <textarea name="message" class="form-control" rows="5" placeholder="Add a note or dedication"></textarea>
              </div>
              <div class="col-12 d-grid gap-3">
                <button type="submit" class="btn-navy-solid justify-content-center">Send Donation Pledge</button>
                <a class="btn-wa-green" href="https://wa.me/231777006500" target="_blank" rel="noopener">Chat With Us on WhatsApp</a>
              </div>
            </div>
          </form>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="donation-card donation-summary">
          <span class="section-label">How Your Gift Helps</span>
          <h2 class="section-title mb-3">Every contribution is used with care</h2>
          <p class="section-sub mb-4">We use donations to strengthen teaching, support learners, and improve the school environment.</p>

          <ul class="donation-highlight-list">
            <li><i class="fas fa-check-circle"></i><span>Cover learning support for children who need extra help.</span></li>
            <li><i class="fas fa-check-circle"></i><span>Provide books, classroom materials, and activity supplies.</span></li>
            <li><i class="fas fa-check-circle"></i><span>Improve safe, welcoming spaces for lessons and play.</span></li>
            <li><i class="fas fa-check-circle"></i><span>Support school projects that benefit the full community.</span></li>
          </ul>

          <div class="donation-impact mt-4">
            <div class="donation-impact-item">
              <i class="fas fa-graduation-cap"></i>
              <div>
                <h5>Education First</h5>
                <p>Your support helps more children access quality learning every day.</p>
              </div>
            </div>
            <div class="donation-impact-item">
              <i class="fas fa-shield-halved"></i>
              <div>
                <h5>Child Wellbeing</h5>
                <p>We prioritize safety, care, and dignity in everything we do.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== SUPPORT OPTIONS ===================== -->
<section class="py-5" data-animate>
  <div class="container">
    <div class="row g-4 align-items-stretch">
      <div class="col-lg-5">
        <div class="donation-cta-panel h-100">
          <span class="section-label">Need Help Giving?</span>
          <h3 class="section-title mb-3">Contact the school office</h3>
          <p class="mb-4">If you would like bank details, a donation receipt, or a custom giving arrangement, our team is ready to help.</p>
          <div class="donation-meta">
            <div class="donation-meta-item"><i class="fas fa-phone"></i><span>+231 777-006-500</span></div>
            <div class="donation-meta-item"><i class="fas fa-envelope"></i><span>info@royalheritages.com</span></div>
            <div class="donation-meta-item"><i class="fas fa-map-marker-alt"></i><span>Monrovia, Liberia</span></div>
          </div>
          <a href="contacts.php" class="btn-wa-green">Send a Direct Inquiry</a>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="donation-card">
          <span class="section-label">Frequently Asked</span>
          <h2 class="section-title mb-3">A few quick notes</h2>
          <div class="row g-3">
            <div class="col-md-6">
              <div class="info-card h-100">
                <h5>Can I dedicate my gift?</h5>
                <p class="mb-0">Yes. Use the message box to tell us how you would like the donation recorded or directed.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-card h-100">
                <h5>Will I get a follow-up?</h5>
                <p class="mb-0">Yes. We review each pledge and reply with the next steps and any needed details.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-card h-100">
                <h5>How are funds used?</h5>
                <p class="mb-0">Donations support students, teachers, learning materials, and campus improvements.</p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-card h-100">
                <h5>Can groups help too?</h5>
                <p class="mb-0">Absolutely. Churches, businesses, and families are welcome to partner with us.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include_once 'Includes/footer.php'; ?>