// ---- Hamburger ----
  const ham = document.getElementById('hamburger');
  const mobileNav = document.getElementById('mobile-nav');
  ham.addEventListener('click', () => {
    const open = ham.classList.toggle('open');
    mobileNav.classList.toggle('open');
    ham.setAttribute('aria-expanded', open);
  });

  // ---- Splash screen ----
  const splash = document.getElementById('splash-screen');
  if (splash) {
    setTimeout(() => {
      splash.style.display = 'none';
    }, 1000);
  }

  
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

    // // Touch swipe
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
    interval: 2000,
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

