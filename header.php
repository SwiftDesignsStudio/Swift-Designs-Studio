<?php
if (!function_exists('is_active')) {
    function is_active($name, $page) {
        return $page === $name ? 'active' : '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Meta -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Swift Designs Studio — Web Development, Branding & Creative Solutions by Corey Shamburger">
  <meta name="author" content="Corey Shamburger">
  <title>Swift Designs Studio</title>

  <!-- Favicon (root-absolute so it works from /blog too) -->
  <link rel="icon" href="/images/logo/favicon.ico" type="image/x-icon">

  <!-- CSS (root-absolute paths) -->
  <link rel="stylesheet" href="/css/normalize.css">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/jquery.animatedheadline.css">
  <link rel="stylesheet" href="/css/jquery.mb.YTPlayer.min.css">
  <link rel="stylesheet" href="/css/owl.carousel.css">
  <link rel="stylesheet" href="/css/owl.theme.default.css">
  <link rel="stylesheet" href="/css/magnific-popup.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/responsive.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <?php if (isset($page) && $page === 'blog'): ?>
  <link rel="stylesheet" href="/css/blog.css">
  <?php endif; ?>


  <!-- Font Awesome (one include is enough) -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-pv..." crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Head JS (optional) -->
  <script src="/js/modernizr.custom.js"></script>
</head>
<body>
<header class="site-header">
  <div class="container nav-inner">
    <a class="brand" href="/">
      <img src="/images/logo/SDSTransparent.png" alt="Swift Designs Studio" />
    </a>

    <button class="nav-toggle" aria-expanded="false" aria-controls="primary-nav">
      <span class="bar"></span><span class="bar"></span><span class="bar"></span>
      <span class="sr-only">Menu</span>
    </button>

    <nav id="primary-nav" class="nav">
      <ul class="menu">
        <li class="<?= is_active('home',$page) ?>"><a class="nav-link" href="/">Home</a></li>
        <li class="<?= is_active('about',$page) ?>"><a class="nav-link" href="/about.php">About</a></li>
        <li class="<?= is_active('services',$page) ?>"><a class="nav-link" href="/services.php">Services</a></li>
        <li class="<?= is_active('portfolio',$page) ?>"><a class="nav-link" href="/portfolio.php">Portfolio</a></li>
        <li class="<?= is_active('testimonials',$page) ?>"><a class="nav-link" href="/testimonial.php">Testimonials</a></li>
        <li class="<?= is_active('contact',$page) ?>"><a class="nav-link" href="/contact.php">Contact</a></li>
        <li class="<?= is_active('blog',$page) ?>"><a class="nav-link" href="/blog/index.php">Blog</a></li>

        <!-- Mobile-only CTA inside drawer -->
        <li class="menu-cta">
          <a href="/contact.php" class="btn-cta nav-cta-mobile">Request a Quote</a>
        </li>
      </ul>
    </nav>

    <!-- Desktop CTA (hidden on mobile in CSS) -->
    <a href="/contact.php" class="btn-cta header-cta">Request a Quote</a>
  </div>
</header>

<script>
  // Mobile drawer toggle
  (function () {
    const btn = document.querySelector('.nav-toggle');
    const nav = document.getElementById('primary-nav');
    if (!btn || !nav) return;

    btn.addEventListener('click', () => {
      const open = nav.classList.toggle('open');
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  })();
</script>
