<?php include_once 'includes/header.php'; ?>
<?php
$calendarEvents = [
  '2026-08-25' => ['title' => 'Registration Begins',        'term' => 'term-one'],
  '2026-09-08' => ['title' => 'Classes Begin',               'term' => 'term-one'],
  '2026-10-19' => ['title' => 'Midterm Tests Begin',         'term' => 'term-one'],
  '2026-11-06' => ['title' => 'Open House',                  'term' => 'term-one'],
  '2026-12-07' => ['title' => 'Final Exams Begin',           'term' => 'term-one'],
  '2026-12-18' => ['title' => 'First Term Results',          'term' => 'term-one'],
  '2027-01-11' => ['title' => 'Second Term Resumption',      'term' => 'term-two'],
  '2027-02-08' => ['title' => 'Continuous Assessment Begins','term' => 'term-two'],
  '2027-02-26' => ['title' => 'Midterm Break',               'term' => 'term-two'],
  '2027-03-15' => ['title' => 'Project Week Begins',         'term' => 'term-two'],
  '2027-03-29' => ['title' => 'Final Exams Begin',           'term' => 'term-two'],
  '2027-04-09' => ['title' => 'Second Term Results',         'term' => 'term-two'],
  '2027-04-19' => ['title' => 'Third Term Resumption',       'term' => 'term-three'],
  '2027-05-24' => ['title' => 'Revision Week Begins',        'term' => 'term-three'],
  '2027-06-07' => ['title' => 'Promotion Exams Begin',       'term' => 'term-three'],
  '2027-06-25' => ['title' => 'Graduation Ceremony',         'term' => 'term-three'],
  '2027-06-30' => ['title' => 'Session Closes',              'term' => 'term-three'],
  '2027-07-12' => ['title' => 'Summer Program Begins',       'term' => 'term-three'],
];

$calendarMonths = [];
$monthCursor = new DateTime('2026-08-01');
$monthEnd    = new DateTime('2027-07-01');

while ($monthCursor <= $monthEnd) {
  $calendarMonths[] = clone $monthCursor;
  $monthCursor->modify('+1 month');
}

$monthEvents = [];
foreach ($calendarEvents as $date => $eventData) {
  $monthKey = substr($date, 0, 7);
  if (!isset($monthEvents[$monthKey])) {
    $monthEvents[$monthKey] = [];
  }
  $monthEvents[$monthKey][] = [
    'label' => date('M j, Y', strtotime($date)),
    'title' => $eventData['title'],
  ];
}
?>

<!-- ════════════════ PAGE BANNER ════════════════ -->
<section id="page-hero" aria-labelledby="page-hero-heading">
  <div class="slide-overlay"></div>
  <div class="page-hero-inner">
    <div class="page-hero-text">
      <nav class="breadcrumb" aria-label="Breadcrumb">
        <a href="index.php">Home</a>
        <i class="fas fa-chevron-right"></i>
        <span>Academics</span>
      </nav>
      <h1 id="page-hero-heading">Academics</h1>
      <p>We are more than a school </p>
    </div>
</section>

<!-- ════════════════ ACADEMIC STRUCTURE HEADER ════════════════ -->
<section class="py-5" data-animate>
  <div class="container text-center">
    <h2 class="section-title">Our Academic Structure</h2>
    <p class="lead mt-3" style="color:var(--gray);">A child-centered curriculum designed for growth, confidence, and excellence.</p>
  </div>
</section>

<!-- ════════════════ PROGRAM CARDS ════════════════ -->
<section class="py-5 bg-light" data-animate>
  <div class="container">
    <div class="row g-4">
      <div class="col-md-4">
        <div class="academic-card text-center">
          <div class="program-icon">🧸</div>
          <h5>Early Childhood</h5>
          <p class="mb-0">Daycare, Pre-Nursery, and Kindergarten with focus on social and literacy readiness.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="academic-card text-center">
          <div class="program-icon">📘</div>
          <h5>Lower Elementary</h5>
          <p class="mb-0">Grades 1-3 focused on reading, writing, phonics, and mathematics foundations.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="academic-card text-center">
          <div class="program-icon">📗</div>
          <h5>Upper Elementary</h5>
          <p class="mb-0">Grades 4-6 with critical thinking, research, and higher-level preparation.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ════════════════ ACADEMIC CALENDAR ════════════════ -->
<style>
/* Vanilla slider — no Bootstrap carousel dependency */
.cal-slider-wrap       { position: relative; overflow: hidden; }
.cal-slides            { display: flex; transition: transform 0.45s cubic-bezier(.4,0,.2,1); }
.cal-slide             { min-width: 100%; }

.cal-nav-row           { display: flex; justify-content: center; align-items: center; gap: 16px; margin-top: 18px; }
.cal-nav-btn           {
  width: 40px; height: 40px; border-radius: 50%;
  background: var(--navy); color: #fff; border: none;
  font-size: 20px; line-height: 1; cursor: pointer;
  display: flex; align-items: center; justify-content: center;
  transition: var(--transition);
}
.cal-nav-btn:hover     { background: var(--navy-light); }
.cal-nav-btn:disabled  { opacity: 0.35; cursor: not-allowed; }
.cal-slide-counter     { font-size: 13px; color: var(--gray); min-width: 80px; text-align: center; }
</style>

<section class="py-5" data-animate>
  <div class="container">
    <div class="text-center mb-4">
      <h2 class="section-title">Academic Calendar</h2>
      <p class="lead mb-0" style="color:var(--gray);">2026-2027 session schedule with dates for all major academic activities.</p>
    </div>

    <div class="school-calendar-wrap">
      <div class="row g-4 align-items-start">

        <!-- ── Slider ── -->
        <div class="col-lg-8">
          <div class="cal-slider-wrap">
            <div class="cal-slides" id="calSlides">

              <?php foreach ($calendarMonths as $index => $monthDate): ?>
                <?php
                  $monthLabel         = $monthDate->format('F Y');
                  $monthKey           = $monthDate->format('Y-m');
                  $monthFirstDay      = (int)$monthDate->format('N'); // 1=Mon … 7=Sun
                  $daysInMonth        = (int)$monthDate->format('t');
                  $currentMonthEvents = $monthEvents[$monthKey] ?? [];
                ?>
                <div class="cal-slide">
                  <div class="calendar-month-card">
                    <div class="calendar-month-head d-flex justify-content-between align-items-center px-3 py-3">
                      <h5 class="mb-0"><?php echo $monthLabel; ?></h5>
                      <small>Slide <?php echo $index + 1; ?> of <?php echo count($calendarMonths); ?></small>
                    </div>

                    <table class="calendar-table" aria-label="<?php echo $monthLabel; ?> academic calendar">
                      <thead>
                        <tr><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th><th>Sun</th></tr>
                      </thead>
                      <tbody>
                        <?php
                          $day = 1;
                          for ($week = 0; $week < 6; $week++):
                            if ($day > $daysInMonth) break;
                        ?>
                        <tr>
                          <?php for ($weekday = 1; $weekday <= 7; $weekday++): ?>
                            <?php if (($week === 0 && $weekday < $monthFirstDay) || $day > $daysInMonth): ?>
                              <td></td>
                            <?php else: ?>
                              <?php
                                $dateKey  = $monthDate->format('Y-m-') . str_pad((string)$day, 2, '0', STR_PAD_LEFT);
                                $event    = $calendarEvents[$dateKey] ?? null;
                                $dayClass = $event ? 'event-day ' . $event['term'] : '';
                                $tipTitle = $event ? $event['title'] . ' – ' . $monthDate->format('M ') . $day . ', ' . $monthDate->format('Y') : '';
                              ?>
                              <td class="<?php echo $dayClass; ?>"
                                  title="<?php echo htmlspecialchars($tipTitle); ?>"><?php echo $day; ?></td>
                              <?php $day++; ?>
                            <?php endif; ?>
                          <?php endfor; ?>
                        </tr>
                        <?php endfor; ?>
                      </tbody>
                    </table>

                    <!-- Hidden data for sidebar sync -->
                    <div style="display:none" class="month-side-events">
                      <span class="month-events-title">Key Dates In <?php echo $monthLabel; ?></span>
                      <ul class="month-events-list">
                        <?php if (!empty($currentMonthEvents)): ?>
                          <?php foreach ($currentMonthEvents as $ev): ?>
                            <li><strong><?php echo htmlspecialchars($ev['label']); ?>:</strong> <?php echo htmlspecialchars($ev['title']); ?></li>
                          <?php endforeach; ?>
                        <?php else: ?>
                          <li>No key academic dates in this month.</li>
                        <?php endif; ?>
                      </ul>
                    </div>
                  </div><!-- /calendar-month-card -->
                </div><!-- /cal-slide -->
              <?php endforeach; ?>

            </div><!-- /cal-slides -->
          </div><!-- /cal-slider-wrap -->

          <!-- Prev / Next controls -->
          <div class="cal-nav-row">
            <button class="cal-nav-btn" id="calPrev" aria-label="Previous month" disabled>&#8249;</button>
            <span class="cal-slide-counter" id="calCounter">1 / <?php echo count($calendarMonths); ?></span>
            <button class="cal-nav-btn" id="calNext" aria-label="Next month">&#8250;</button>
          </div>
        </div><!-- /col-lg-8 -->

        <!-- ── Sidebar ── -->
        <div class="col-lg-4">
          <div class="info-card calendar-side-info">
            <h5 class="mb-3">Key Dates And Information</h5>
            <p class="small mb-3" style="color:var(--gray);">
              Marked dates on the calendar are highlighted by term colour.
            </p>

            <ul class="list-unstyled calendar-legend mb-4">
              <li><span class="legend-dot term-one"></span>   First Term</li>
              <li><span class="legend-dot term-two"></span>   Second Term</li>
              <li><span class="legend-dot term-three"></span> Third Term</li>
            </ul>

            <h6 id="activeMonthInfoTitle" class="mb-2">Key Dates In This Month</h6>
            <ul id="activeMonthInfoList" class="list-unstyled calendar-events mb-0"></ul>
          </div>
        </div><!-- /col-lg-4 -->
      </div><!-- /row -->

      <!-- Download -->
      <div class="text-center mt-4">
        <button type="button" class="btn btn-school btn-lg" onclick="window.print()">
          <i class="bi bi-file-earmark-pdf-fill me-2"></i>Download Calendar PDF
        </button>
        <p class="small text-muted mt-2 mb-0">Click the button and choose Save as PDF in the print dialog.</p>
      </div>

      <!-- Note -->
      <div class="info-card text-center mt-4">
        <p class="mb-0">
          <strong>Note:</strong> Dates may be adjusted by school management when necessary.
          Please confirm updates through the school office or the contact page.
        </p>
      </div>
    </div><!-- /school-calendar-wrap -->
  </div><!-- /container -->
</section>

<!-- ── Vanilla JS calendar slider ── -->
<script>
(function () {
  var slides   = document.getElementById('calSlides');
  var prevBtn  = document.getElementById('calPrev');
  var nextBtn  = document.getElementById('calNext');
  var counter  = document.getElementById('calCounter');
  var titleEl  = document.getElementById('activeMonthInfoTitle');
  var listEl   = document.getElementById('activeMonthInfoList');

  if (!slides || !prevBtn || !nextBtn) return;

  var total   = slides.children.length;
  var current = 0;

  function goTo(index) {
    current = index;
    slides.style.transform = 'translateX(-' + (current * 100) + '%)';
    counter.textContent    = (current + 1) + ' / ' + total;
    prevBtn.disabled       = current === 0;
    nextBtn.disabled       = current === total - 1;
    syncSidebar();
  }

  function syncSidebar() {
    var slide      = slides.children[current];
    var sourceTitle = slide.querySelector('.month-events-title');
    var sourceList  = slide.querySelector('.month-events-list');
    titleEl.textContent = sourceTitle ? sourceTitle.textContent.trim() : 'Key Dates In This Month';
    listEl.innerHTML    = sourceList  ? sourceList.innerHTML            : '<li>No key academic dates in this month.</li>';
  }

  prevBtn.addEventListener('click', function () { if (current > 0)         goTo(current - 1); });
  nextBtn.addEventListener('click', function () { if (current < total - 1) goTo(current + 1); });

  goTo(0); // initialise
})();
</script>

<!-- ════════════════ CURRICULUM HIGHLIGHTS ════════════════ -->
<section class="py-5" data-animate>
  <div class="container">
    <h2 class="section-title text-center mb-4">Curriculum Highlights</h2>
    <div class="row g-3">
      <div class="col-md-6">
        <div class="info-card border-gold">
          <h6>Core Subjects</h6>
          <p class="mb-0">Mathematics, English Language, General Science, and Social Studies.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-card border-gold">
          <h6>Values and Life Skills</h6>
          <p class="mb-0">Civic education, moral instruction, communication, and teamwork.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-card border-gold">
          <h6>Creative Learning</h6>
          <p class="mb-0">Music, arts, and activity-based instruction for holistic development.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="info-card border-gold">
          <h6>Physical Development</h6>
          <p class="mb-0">Sports and structured play for health and discipline.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===================== FINAL CTA ===================== -->
<section id="cta-final" aria-labelledby="cta-heading">
  <div class="container">
    <div class="cta-box">
      <div class="cta-text">
        <h2 id="cta-heading">Ready To Join Our Programs?</h2>
        <p>Join the Royal Heritage family — where excellence, character, and purpose come together.</p>
      </div>
      <div class="cta-btns">
        <a href="admission.php" class="btn-navy-solid"><i class="fas fa-pen"></i> Apply Now!</a>
      </div>
    </div>
  </div>
</section>

<?php include_once 'includes/footer.php'; ?>