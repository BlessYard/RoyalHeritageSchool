<?php
$page_title = "Royal Heritage School – Quality Education for Future Generations";
$meta_description = "Royal Heritage School is a premier Day Care, Kindergarten & Primary school dedicated to academic excellence, strong moral values, and holistic child development. Enroll today.";
$meta_keywords = "Royal Heritage School, best school, quality education, day care, kindergarten, primary school, Liberia";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta name="description" content="<?= $meta_description ?>"/>
  <meta name="keywords" content="<?= $meta_keywords ?>"/>
  <meta name="author" content="Royal Heritage School"/>
  <!-- Open Graph -->
  <meta property="og:title" content="<?= $page_title ?>"/>
  <meta property="og:description" content="<?= $meta_description ?>"/>
  <meta property="og:type" content="website"/>
  <title><?= $page_title ?></title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"/>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="stylesheet" href="assets/mediaquiries.css">

   <link rel="icon" type="image/png" sizes="32x32" href="assets/images/logo.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/logo.png">
    <link rel="shortcut icon" href="assets/images/logo.png">
</head>
<body>

<!-- ===================== TOP BAR ===================== -->
<div id="top-bar" role="complementary" aria-label="Contact and quick links">
  <div class="top-bar-inner">
    <div class="top-bar-left">
      <span><i class="fas fa-phone"></i> +231 000 000 000</span>
      <span><i class="fas fa-envelope"></i> info@royalheritageschool.com</span>
      <span><i class="fas fa-map-marker-alt"></i> Monrovia, Liberia</span>
    </div>
    <div class="top-bar-right">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
      <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
      <a href="admission.php" class="btn-admit-top">Admissions Open</a>
    </div>
  </div>
</div>

<!-- ===================== MAIN HEADER ===================== -->
<header id="main-header" role="banner">
  <div class="header-inner">
    <a href="index.php" class="logo-wrap" aria-label="Royal Heritage School Home">
      <div class="logo-icon"><img src="images/logo.png" alt=""></div>
      <div class="logo-text-wrap">
        <div class="logo-name">Royal Heritage</div>
        <div class="logo-motto">Quality Education for Future Generations</div>
      </div>
    </a>
    <nav role="navigation" aria-label="Main navigation">
      <a href="index.php" class="active">Home</a>
      <a href="about-us.php">About Us</a>
      <a href="admission.php">Admissions</a>
      <a href="academics.php">Academics</a>
      <a href="contacts.php">Contact</a>
        <a href="login.php" class="btn-enroll">E-Portal</a>
    </nav>
    <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </div>
  <nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
    <a href="index.php">Home</a>
    <a href="about-us.php">About Us</a>
    <a href="admission.php">Admissions</a>
    <a href="academics.php">Academics</a>
    <a href="contacts.php">Contact</a>
    <a href="login.php" class="btn-enroll">E-Portal</a>
  </nav>
</header>
