<?php 
  $page = 'testimonial'; 
  include __DIR__ . '/header.php'; 
?>

<!-- =========================
     HERO / PAGE INTRO
========================== -->
<section class="banner-area">
  <div id="particles-js"></div>

  <div class="banner-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h1>Client Testimonials</h1>
          <p>Trusted by professionals and growing businesses</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- =========================
     TESTIMONIALS
========================== -->
<section id="testimonial" class="testimonial-area">
  <div class="container">

    <div class="section-header text-center">
      <h2>What Clients Say</h2>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2">

        <div id="testimonial-carousel" class="owl-carousel owl-theme">

          <div class="single-testi text-center">
            <p class="quote">
              “Working with Corey was a game-changer for our business.”
            </p>
            <h4>Angela Martinez</h4>
            <span>Project Manager, Top-Notch Builders</span>
          </div>

          <div class="single-testi text-center">
            <p class="quote">
              “Corey built a custom dashboard that streamlined our workflow.”
            </p>
            <h4>David Kim</h4>
            <span>Owner, AutoCare Plus</span>
          </div>

          <div class="single-testi text-center">
            <p class="quote">
              “The reusable component library saved us hours of development time.”
            </p>
            <h4>Rachel Green</h4>
            <span>Lead Designer, PixelWorks Studio</span>
          </div>

        </div>

      </div>
    </div>

  </div>
</section>

<?php 
  include __DIR__ . '/footer.php'; 
?>
