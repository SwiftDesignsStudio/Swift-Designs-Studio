<?php $page = 'portfolio'; include __DIR__ . '/header.php'; ?>

<div id="portfolio" class="portfolio-area section-padding">
  <div class="container">
    
    <div class="section-header wow fadeInDown" data-wow-delay="0.2s">
      <p class="line-one"></p>
      <h2>My Works</h2>
      <p class="line-one"></p>
    </div>

    <div class="row portfolio-items">
      <div class="portfolio-grid">

        <!-- Project 1 -->
        <div class="portfolio-item flip">
          <div class="flip-face" tabindex="0" aria-label="Open project details"></div>
          <img src="/images/portfolio/SwiftDesignWebsite.jpg" alt="Swift Designs Studio website" class="img-responsive">
          <div class="overlay">
            <h2>Swift Design Website</h2>
            <p>A polished portfolio site showcasing the brand and services of Swift Designs Studio.</p>
          </div>
        </div>

        <!-- Project 2 -->
        <div class="portfolio-item">
          <img src="/images/portfolio/NetflixCloneWebsite.jpg" alt="Netflix clone website" class="img-responsive">
          <div class="overlay">
            <h2>Netflix Clone Website</h2>
            <p>A sleek Netflix-inspired platform showcasing advanced layout design and user experience.</p>
          </div>
        </div>

        <!-- Project 3 -->
        <div class="portfolio-item">
          <img src="/images/portfolio/Construction.jpeg" alt="Construction company website" class="img-responsive">
          <div class="overlay">
            <h2>Construction Website</h2>
            <p>A modern website for a construction company, highlighting their projects and services.</p>
          </div>
        </div>

      </div><!-- .portfolio-grid -->
    </div><!-- .row -->

  </div><!-- .container -->
</div><!-- #portfolio -->

<?php include __DIR__ . '/footer.php'; ?>
