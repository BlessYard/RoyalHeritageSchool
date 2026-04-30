<!-- ===================== FOOTER ===================== -->
<footer id="footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <a href="index.php" class="logo-wrap" aria-label="Royal Heritage School">
          <div class="logo-icon"><img src="Images/logo.png" alt="Royal logo"></div>
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

<!-- ===================== JAVASCRIPT ===================== -->
<script>
  // ---- Hamburger ----
  const ham = document.getElementById('hamburger');
  const mobileNav = document.getElementById('mobile-nav');
  ham.addEventListener('click', () => {
    const open = ham.classList.toggle('open');
    mobileNav.classList.toggle('open');
    ham.setAttribute('aria-expanded', open);
  });

  // ---- Sticky header shadow ----
  const header = document.getElementById('main-header');
  window.addEventListener('scroll', () => {
    header.style.boxShadow = window.scrollY > 30 ? '0 4px 24px rgba(11,31,58,0.13)' : '';
  });

  // ---- Scroll to Top ----
  const scrollBtn = document.getElementById('scroll-top');
  window.addEventListener('scroll', () => {
    scrollBtn.classList.toggle('show', window.scrollY > 400);
  });
  scrollBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

  // ---- Generic Slider Factory ----
  function createSlider({ slidesEl, dotsEls, prevBtn, nextBtn, auto = true, interval = 5000 }) {
    let current = 0;
    const total = dotsEls.length;

    function goTo(n) {
      current = (n + total) % total;
      slidesEl.style.transform = `translateX(-${current * 100}%)`;
      dotsEls.forEach((d, i) => {
        d.classList.toggle('active', i === current);
        d.setAttribute('aria-selected', i === current);
      });
    }

    prevBtn && prevBtn.addEventListener('click', () => goTo(current - 1));
    nextBtn && nextBtn.addEventListener('click', () => goTo(current + 1));
    dotsEls.forEach((d, i) => d.addEventListener('click', () => goTo(i)));

    let timer;
    if (auto) {
      timer = setInterval(() => goTo(current + 1), interval);
      slidesEl.closest('section, #hero')?.addEventListener('mouseenter', () => clearInterval(timer));
      slidesEl.closest('section, #hero')?.addEventListener('mouseleave', () => { timer = setInterval(() => goTo(current + 1), interval); });
    }

    // Touch swipe
    let startX = 0;
    slidesEl.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
    slidesEl.addEventListener('touchend', e => {
      const diff = startX - e.changedTouches[0].clientX;
      if (Math.abs(diff) > 50) goTo(current + (diff > 0 ? 1 : -1));
    });

    return { goTo };
  }

  // ---- Hero Slider ----
  createSlider({
    slidesEl: document.getElementById('heroSlides'),
    dotsEls: document.querySelectorAll('.dot'),
    prevBtn: document.getElementById('heroPrev'),
    nextBtn: document.getElementById('heroNext'),
    interval: 6000,
  });

  // ---- Testimonials Slider ----
  createSlider({
    slidesEl: document.getElementById('testSlides'),
    dotsEls: document.querySelectorAll('.test-dot'),
    prevBtn: document.getElementById('testPrev'),
    nextBtn: document.getElementById('testNext'),
    interval: 7000,
  });

  // ---- Gallery Slider ----
  createSlider({
    slidesEl: document.getElementById('galSlides'),
    dotsEls: document.querySelectorAll('.gal-dot'),
    prevBtn: document.getElementById('galPrev'),
    nextBtn: document.getElementById('galNext'),
    interval: 5500,
  });

  // ---- Animate stat numbers on scroll ----
  const statNums = document.querySelectorAll('.stat-num');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.3 });
  statNums.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
    observer.observe(el);
  });

  </script>
</body>