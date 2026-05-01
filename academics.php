<?php include_once 'Includes/header.php'; ?>
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

<!-- ===================== PROGRAMS ===================== -->
<section id="programs" class="section" aria-labelledby="programs-heading">
  <div class="container">
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
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
          </div>

          <!-- Prev / Next controls -->
          <div class="cal-nav-row">
            <button class="cal-nav-btn" id="calPrev" aria-label="Previous month" disabled>&#8249;</button>
            <span class="cal-slide-counter" id="calCounter">1 / <?php echo count($calendarMonths); ?></span>
            <button class="cal-nav-btn" id="calNext" aria-label="Next month">&#8250;</button>
          </div>
        </div>
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
        </div>
      </div>

      <!-- Download -->
      <div class="text-center mt-4">
        <button type="button" class="btn btn-navy-solid btn-lg" onclick="window.print()">
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

<?php include_once 'Includes/footer.php'; ?>