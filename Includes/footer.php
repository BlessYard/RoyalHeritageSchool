<!-- Footer style -->
<style>
  /* ===== FOOTER ===== */
    #footer { 
      background: var(--navy); 
      padding: 72px 0 0; 
    }
    .footer-grid {
      display: grid; 
      grid-template-columns: 2fr 1fr 1fr 1.5fr;
      gap: 40px; 
      padding-bottom: 48px;
    }
    .footer-brand .logo-wrap { margin-bottom: 16px; }
    .footer-brand .logo-name { color: var(--white); }
    .footer-brand p { font-size: 0.86rem; color: rgba(255,255,255,.60); line-height: 1.7; margin-bottom: 18px; }
    .footer-socials { display: flex; gap: 10px; }
    .social-btn {
      width: 36px; height: 36px; border-radius: 50%;
      background: rgba(255,255,255,.08); border: 1px solid rgba(255,255,255,.14);
      display: flex; align-items: center; justify-content: center;
      color: rgba(255,255,255,.65); font-size: 0.9rem;
      transition: background var(--transition), color var(--transition);
    }
    .social-btn:hover { background: var(--gold); color: var(--navy); border-color: var(--gold); }
    .footer-col h5 {
      font-size: 0.80rem; font-weight: 700;
      letter-spacing: .12em; text-transform: uppercase;
      color: var(--gold); margin-bottom: 18px;
    }
    .footer-col ul { list-style: none; display: flex; flex-direction: column; gap: 10px; }
    .footer-col ul li a { font-size: 0.86rem; color: rgba(255,255,255,.60); transition: color var(--transition); display: flex; align-items: center; gap: 6px; }
    .footer-col ul li a:hover { color: var(--gold); }
    .footer-contact-item {
      display: flex; gap: 12px; margin-bottom: 14px;
    }
    .footer-contact-item i { color: var(--gold); margin-top: 3px; flex-shrink: 0; }
    .footer-contact-item span { font-size: 0.86rem; color: rgba(255,255,255,.60); line-height: 1.6; }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,.08);
      padding: 20px 0;
      display: flex; align-items: center; justify-content: space-between;
      gap: 12px; flex-wrap: wrap;
    }
    .footer-bottom p { font-size: 0.80rem; color: rgba(255,255,255,.40); }

    /* ===== RESPONSIVE FOOTER ===== */
    @media (max-width: 1024px) {
      .footer-grid { grid-template-columns: 2fr 2fr !important; gap: 24px !important; }
    }
    @media (max-width: 768px) {
      .footer-grid { grid-template-columns: 2fr 2fr !important; gap: 20px !important; }
    }
    @media (max-width: 480px) {
      .footer-grid { grid-template-columns: 2fr 2fr !important; gap: 12px !important; padding-bottom: 24px !important; }
      .footer-grid > div { padding: 0; }
      .footer-col h5 { font-size: 1rem; margin-bottom: 12px; }
      .footer-col p { font-size: 0.85rem; line-height: 1.4; }
      .footer-col ul { font-size: 0.85rem; }
    }
</style>
<!-- ===================== FOOTER ===================== -->
<footer id="footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="logo-wrap" aria-label="Royal Heritage School">
          <div class="logo-icon"><img src="Assets/images/logo.png" alt="Royal logo"></div>
          <div class="logo-text-wrap">
            <div class="logo-name">Royal Heritage</div>
            <div class="logo-motto">Quality Education for Future Generations</div>
          </div>
        </a>
        <p style="margin-top:16px;">Royal Heritage School is dedicated to delivering high-quality, holistic education in a safe and supportive environment — empowering each child to reach their full potential.</p>
        <div class="footer-socials">
          <a href="#" class="social-btn" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-btn" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-btn" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-btn" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h5>Quick Links</h5>
        <ul>
          <li><a href="index.php"><i class="fas fa-chevron-right"></i> Home</a></li>
          <li><a href="about-us.php"><i class="fas fa-chevron-right"></i> About Us</a></li>
          <li><a href="academics.php"><i class="fas fa-chevron-right"></i> Academics</a></li>
          <li><a href="admission.php"><i class="fas fa-chevron-right"></i> Admissions</a></li>
          <li><a href="contacts.php"><i class="fas fa-chevron-right"></i> Contact</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Our Programs</h5>
        <ul>
          <li><a href="academics.php"><i class="fas fa-chevron-right"></i> Day Care</a></li>
          <li><a href="academics.php"><i class="fas fa-chevron-right"></i> Kindergarten</a></li>
          <li><a href="academics.php"><i class="fas fa-chevron-right"></i> Primary School</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Contact Us</h5>
        <div class="footer-contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <span>Monrovia, Liberia<br>24th Street Sinkor</span>
        </div>
        <div class="footer-contact-item">
          <i class="fas fa-phone"></i>
          <span>+231 000 000 000</span>
        </div>
        <div class="footer-contact-item">
          <i class="fas fa-envelope"></i>
          <span>info@royalheritageschool.com</span>
        </div>
        <div class="footer-contact-item">
          <i class="fas fa-clock"></i>
          <span>Mon – Fri: 7:30 AM – 5:00 PM</span>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; <?= date('Y') ?> Royal Heritage School. All rights reserved. 
      <p>Developed by <a href="https://www.techliberia.com" target="_blank">Tech Liberia</a></p>
    </div>
  </div>
</footer>

<!-- Scroll to Top -->
<button id="scroll-top" aria-label="Scroll to top"><i class="fas fa-chevron-up"></i></button>

<script src="Assets/script.js"></script>
  <!-- ================= SPLASH SCREEN ================= -->
<script>
window.addEventListener("load", function() {
  setTimeout(function() {
    const splash = document.getElementById("splash-screen");
    if (splash) splash.style.display = "none";
  }, 1200);
});
</script>