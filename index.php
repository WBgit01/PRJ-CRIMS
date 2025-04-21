<?php
    $page_title = "Index";
    include_once 'layout_head.php';
    include_once 'layout_nav.php';
?>

<section class="hero-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6 mb-4 mb-md-0">
          <h1>Crime Reporting and Investigation Monitoring System</h1>
          <button class="btn btn-primary mt-3">Get Started</button>
        </div>
        <div class="col-md-6 text-center">
          <img src="Libs/Images/logo_crims.png" alt="Hero Logo" class="img-fluid" style="max-width: 600px;">
        </div>
      </div>
    </div>
  </section>

<?php
    include_once 'layout_news.php';
    include_once 'layout_programs.php';
    include_once 'layout_foot.php';
?>