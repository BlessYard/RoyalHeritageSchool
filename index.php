<?php include_once 'includes/header.php'; ?>


<!-- ===================== HERO SLIDER ===================== -->
<section id="hero" aria-label="Hero banner slideshow">
  <div class="slides" id="heroSlides">
    
    <!-- Slide 1 -->
    <div class="slide" role="group" aria-label="Slide 1 of 3">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <h1>Nurturing <em>Excellence</em>,<br> in academics, character, and creativity</h1>
        <p>A modern curriculum with strong moral values, designed to enhance every child's potential from Day Care to Primary level.</p>
        <a href="academics.php" class="slide-cta"><i class="fas fa-book-open"></i>Academics</a>
        <a href="about-us.php" class="slide-cta-outline">Our Story</a>
      </div>
    </div>


    <!-- Slide 2 -->
    <div class="slide" role="group" aria-label="Slide 2 of 3">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-tag"><i class="fas fa-users"></i> &nbsp;Community & Values</span>
        <h1>More Than a School —<br>A <em>Community</em> of Leaders</h1>
        <p>We build character, discipline, and teamwork through sports, clubs, and community service that shape future leaders.</p>
        <a href="student-life.php" class="slide-cta"><i class="fas fa-running"></i> Discover Student Life</a>
        <a href="about-us.php" class="slide-cta-outline">Our Values</a>
      </div>
    </div>


    <!-- Slide 3 -->
    <div class="slide" role="group" aria-label="Slide 3 of 3">
      <div class="slide-overlay"></div>
      <div class="slide-content">
        <span class="slide-tag"><i class="fas fa-door-open"></i> &nbsp;Admissions Open</span>
        <h1>Your Child's Journey to<br><em>Success</em> Starts Here</h1>
        <p>Join a safe, inclusive, and inspiring learning environment. Admissions are now open for Day Care, Kindergarten, and Primary.</p>
        <a href="admission.php" class="slide-cta"><i class="fas fa-pen"></i> Apply Now</a>
        <a href="contacts.php" class="slide-cta-outline">Contact Us</a>
      </div>
    </div>

  </div>


  <!-- Dots -->
  <div class="slider-dots" role="tablist" aria-label="Slide indicators">
    <button class="dot active" role="tab" aria-selected="true" aria-label="Go to slide 1"></button>
    <button class="dot" role="tab" aria-selected="false" aria-label="Go to slide 2"></button>
    <button class="dot" role="tab" aria-selected="false" aria-label="Go to slide 3"></button>
  </div>


  <!-- Arrows -->
  <div class="slider-arrows">
    <button class="arrow-btn" id="heroPrev" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></button>
    <button class="arrow-btn" id="heroNext" aria-label="Next slide"><i class="fas fa-chevron-right"></i></button>
  </div>
</section>


<!-- ===================== STATS ===================== -->
<section id="stats" aria-labelledby="stats-heading">
  <div class="container">
    <h2 id="stats-heading" class="sr-only">School Quick Facts</h2>
    <div class="stats-grid">
      <div class="stat-card">
        <div class="stat-icon"><i class="fas fa-graduation-cap"></i></div>
        <div class="stat-num">2025</div>
        <div class="stat-label">Year Founded</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon"><i class="fas fa-user-tie"></i></div>
        <div class="stat-num">100%</div>
        <div class="stat-label">Qualified Teachers</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon"><i class="fas fa-shield-alt"></i></div>
        <div class="stat-num">Safe</div>
        <div class="stat-label">Inclusive Environment</div>
      </div>
      <div class="stat-card">
        <div class="stat-icon"><i class="fas fa-book"></i></div>
        <div class="stat-num">3</div>
        <div class="stat-label">Academic Levels</div>
      </div>
    </div>
  </div>
</section>


<!-- ===================== WELCOME / ABOUT ===================== -->
<section id="welcome" class="section" aria-labelledby="welcome-heading">
  <div class="container">
    <div class="welcome-grid">
      <div class="welcome-img-wrap">
        <div class="welcome-img-placeholder">
        </div>
        <div class="founder-badge">
          <i class="fas fa-user-circle"></i>
          <div class="founder-badge-text">
            <strong>Mr. Emmanuel D. Sao</strong>
            <span>Proprietor, Royal Heritage School</span>
          </div>
        </div>
      </div>
      <div>
        <span class="section-label">Who We Are</span>
        <h2 class="section-title" id="welcome-heading">A Legacy of Quality Education Since 2025</h2>
        <div class="divider"></div>
        <p style="color:var(--gray);line-height:1.75;margin-bottom:18px;font-size:.95rem;">
          Royal Heritage School was founded with a clear vision: to provide quality, value-based education that empowers young minds and transforms communities. We nurture confident, responsible learners from Day Care through Primary School.
        </p>
        <p style="color:var(--gray);line-height:1.75;margin-bottom:24px;font-size:.95rem;">
          Academic excellence is balanced with moral and social development. Through engaging lessons, practical activities, and innovative teaching, students build critical thinking, creativity, and problem-solving skills for life.
        </p>
        <ul class="values-list" aria-label="Core values">
          <li><i class="fas fa-check-circle"></i><span><strong>Excellence</strong> — We strive for the highest standards in all we do.</span></li>
          <li><i class="fas fa-check-circle"></i><span><strong>Integrity</strong> — We are honest and responsible at all times.</span></li>
          <li><i class="fas fa-check-circle"></i><span><strong>Discipline</strong> — We work hard, stay focused, and follow the rules.</span></li>
          <li><i class="fas fa-check-circle"></i><span><strong>Faith</strong> — We trust in God and uphold good moral principles.</span></li>
        </ul>
        <a href="about-us.php" class="btn-navy"><i class="fas fa-arrow-right"></i> Read Our Full Story</a>
      </div>
    </div>
  </div>
</section>


<!-- ===================== PROGRAMS ===================== -->
<section id="programs" class="section" aria-labelledby="programs-heading">
  <div class="container">
    <div class="programs-header">
      <span class="section-label">What We Offer</span>
      <h2 class="section-title" id="programs-heading">Our Academic Programs</h2>
      <div class="divider"></div>
      <p class="section-sub">From the earliest years through primary education, we provide structured, holistic programs that develop the whole child.</p>
    </div>
    <div class="programs-grid">
      <article class="prog-card">
        <div class="prog-card-top">
          <div class="prog-icon"><i class="fas fa-baby"></i></div>
          <h3>Day Care</h3>
          <p>A nurturing, stimulating environment for our youngest learners, focusing on early development, play-based discovery, and social skills.</p>
        </div>
        <div class="prog-card-bottom">
          <span>Ages 6 months – 2 years</span>
          <a href="academics.php">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>
      <article class="prog-card">
        <div class="prog-card-top">
          <div class="prog-icon"><i class="fas fa-paint-brush"></i></div>
          <h3>Kindergarten</h3>
          <p>Building strong academic and social foundations through creative play, literacy, numeracy, and character formation in a safe environment.</p>
        </div>
        <div class="prog-card-bottom">
          <span>Ages 3 – 5 years</span>
          <a href="academics.php">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>
      <article class="prog-card">
        <div class="prog-card-top">
          <div class="prog-icon"><i class="fas fa-book-open"></i></div>
          <h3>Primary School</h3>
          <p>A structured, modern curriculum that develops critical thinking, creativity, and leadership — preparing students for secondary education</p>
        </div>
        <div class="prog-card-bottom">
          <span>Ages 6 – 12 years</span>
          <a href="academics.php">Learn More <i class="fas fa-arrow-right"></i></a>
        </div>
      </article>
    </div>
  </div>
</section>

<!-- ===================== TESTIMONIALS SLIDER ===================== -->
<section id="testimonials" aria-labelledby="test-heading">
  <div class="container">
    <div class="test-header">
      <span class="section-label">What Parents Say</span>
      <h2 class="section-title" id="test-heading">Trusted by Families in Our Community</h2>
      <div class="divider"></div>
    </div>
    <div class="test-slider-wrap">
      <div class="test-slides" id="testSlides">


        <!-- Testimonials group 1 -->
        <div class="test-slide" role="group" aria-label="Testimonials 1 to 3">
          <div class="test-card">
            <div class="test-quote">"</div>
            <p>Royal Heritage has transformed my daughter's confidence and love for learning. The teachers are genuinely caring and professional — she looks forward to school every day!</p>
            <div class="test-author">
              <div class="author-avatar">AM</div>
              <div class="author-info">
                <strong>Amina Mutoni</strong>
                <span>Parent of Kindergarten Student</span>
              </div>
            </div>
          </div>
          <div class="test-card">
            <div class="test-quote">"</div>
            <p>The values and discipline taught here are remarkable. My son has grown so much academically and in character. This school truly lives up to its motto.</p>
            <div class="test-author">
              <div class="author-avatar">JN</div>
              <div class="author-info">
                <strong>Jean Niyonzima</strong>
                <span>Parent of Primary School Student</span>
              </div>
            </div>
          </div>
          <div class="test-card">
            <div class="test-quote">"</div>
            <p>I am proud to have my child enrolled at Royal Heritage. The school genuinely cares about every child and it shows in the results and the warm atmosphere.</p>
            <div class="test-author">
              <div class="author-avatar">GU</div>
              <div class="author-info">
                <strong>Grace Uwimana</strong>
                <span>Parent of Day Care Student</span>
              </div>
            </div>
          </div>
        </div>


        <!-- Testimonials group 2 -->
        <div class="test-slide" role="group" aria-label="Testimonials 4 to 6">
          <div class="test-card">
            <div class="test-quote">"</div>
            <p>The structured curriculum and innovative teaching methods at Royal Heritage are impressive. My children are developing critical thinking skills I never expected at their age.</p>
            <div class="test-author">
              <div class="author-avatar">PM</div>
              <div class="author-info">
                <strong>Pierre Mugisha</strong>
                <span>Parent of Two Enrolled Children</span>
              </div>
            </div>
          </div>
          <div class="test-card">
            <div class="test-quote">"</div>
            <p>From the moment we walked in, the warmth and professionalism of the staff was evident. Royal Heritage is everything we hoped for in a school for our family.</p>
            <div class="test-author">
              <div class="author-avatar">EK</div>
              <div class="author-info">
                <strong>Esperance Kayitesi</strong>
                <span>Parent of Primary Student</span>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>
    <div class="test-controls" role="group" aria-label="Testimonials navigation">
      <button class="test-arrow" id="testPrev" aria-label="Previous testimonials"><i class="fas fa-chevron-left"></i></button>
      <button class="test-dot active" aria-selected="true" aria-label="Go to testimonial group 1"></button>
      <button class="test-dot" aria-selected="false" aria-label="Go to testimonial group 2"></button>
      <button class="test-arrow" id="testNext" aria-label="Next testimonials"><i class="fas fa-chevron-right"></i></button>
    </div>
  </div>
</section>


<!-- ===================== GALLERY SLIDER ===================== -->
<section id="gallery" class="section" aria-labelledby="gallery-heading">
  <div class="container">
    <div class="gallery-header">
      <span class="section-label">School Life</span>
      <h2 class="section-title" id="gallery-heading">Life at Royal Heritage</h2>
      <div class="divider"></div>
      <p class="section-sub" style="margin:0 auto;">A glimpse into our vibrant campus, activities, and the smiling faces that make Royal Heritage a special place to learn.</p>
    </div>
    <div class="gallery-slider-wrap">
      <div class="gallery-slides" id="galSlides">


        <!-- Gallery row 1 -->
        <div class="gallery-slide" role="group" aria-label="Gallery photos 1 to 3">
          <div class="gal-item"><div class="gal placeholder1"><span>Classroom Activity</span></div></div>
          <div class="gal-item"><div class="gal placeholder2"><span>Sports Day</span></div></div>
          <div class="gal-item"><div class="gal placeholder3"><span>Art & Creativity</span></div></div>
      
      </div>
    </div>
    <div class="gallery-controls" role="group" aria-label="Gallery navigation">
      <button class="gal-arrow" id="galPrev" aria-label="Previous gallery"><i class="fas fa-chevron-left"></i></button>
      <button class="gal-dot active" aria-selected="true" aria-label="Go to gallery row 1"></button>
      <button class="gal-dot" aria-selected="false" aria-label="Go to gallery row 2"></button>
      <button class="gal-arrow" id="galNext" aria-label="Next gallery"><i class="fas fa-chevron-right"></i></button>
    </div>
    <div class="gallery-cta">
      <a href="about-us.php" class="btn-navy"><i class="fas fa-images"></i> View More</a>
    </div>
  </div>
</section>

<section class="py-5 bg-white">
  <div class="container-xl">
 
    <!-- Section Header -->
    <div class="text-center mb-5 reveal">
      <span class="section-label">Resources</span>
      <h2 class="section-title mt-1">Download School Documents</h2>
      <div class="rh-divider mx-auto my-3"></div>
      <p class="text-muted mx-auto" style="max-width:520px;">
        Get the latest brochure and information sheet for admissions and programs.
      </p>
    </div>
 
    <!-- Download Cards -->
    <div class="row g-4 justify-content-center">
 
      <!-- School Brochure -->
      <div class="col-md-6 col-lg-5">
        <div class="download-card reveal">
          <div class="dl-icon">
            <i class="fas fa-file-pdf"></i>
          </div>
          <h4 class="fw-bold text-navy mt-4 mb-2">School Brochure</h4>
          <p class="text-muted lh-lg mb-4">
            Overview of our programs, facilities, and student life at Royal Heritage School.
            Everything you need to know about what we offer.
          </p>
          <a href="docs/rhs-brochure.pdf" download class="btn-dl-solid">
            <i class="fas fa-download"></i> Download Brochure
          </a>
        </div>
      </div>
 
      <!-- Information Sheet -->
      <div class="col-md-6 col-lg-5">
        <div class="download-card reveal">
          <div class="dl-icon">
            <i class="fas fa-file-alt"></i>
          </div>
          <h4 class="fw-bold text-navy mt-4 mb-2">Information Sheet</h4>
          <p class="text-muted lh-lg mb-4">
            Quick facts on the admission process, school calendar, contacts,
            and key requirements for enrolling your child.
          </p>
          <a href="docs/rhs-info-sheet.pdf" download class="btn-dl-outline">
            <i class="fas fa-download"></i> Download Info Sheet
          </a>
        </div>
      </div>
 
    </div>
 
    <!-- Help note -->
    <p class="text-center text-muted mt-4 small">
      Need help? Call us at <a href="tel:+231000000000" class="fw-600 text-gold">+231 000 000 000</a> for assistance.
    </p>
 
  </div>
</section>
<!-- ===================== FINAL CTA ===================== -->
<section id="cta-final" aria-labelledby="cta-heading">
  <div class="container">
    <div class="cta-box">
      <div class="cta-text">
        <h2 id="cta-heading">Ready to Give Your Child the Best Start in Life?</h2>
        <p>Join the Royal Heritage family — where excellence, character, and purpose come together.</p>
      </div>
      <div class="cta-btns">
        <a href="admission.php" class="btn-navy-solid"><i class="fas fa-pen"></i> Apply Now</a>
        <a href="contacts.php" class="btn-outline-navy"><i class="fas fa-phone"></i> Contact Us</a>
      </div>
    </div>
  </div>
</section>
<?php include_once 'includes/footer.php'; ?>