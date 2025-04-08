<?php
    $page_title = "Index";
    include_once 'layout_head.php';
    include_once 'layout_nav.php';
?>

<section class="hero-section text-center py-5">
  <div class="container py-4">
    <!-- Logo -->
    <img src="https://www.pngmart.com/files/9/Police-Badge-PNG-Picture.png" 
         alt="CRIMS Logo" 
         class="mb-4" 
         style="max-width: 200px; height: auto;">

    <h1 class="display-4">Crime Reporting Information Management System</h1>
    <p class="lead">A simple, secure, and accessible way to report and track local crimes.</p>
    <a href="#" class="btn btn-primary btn-lg">Get Started</a>
  </div>
</section>


<?php
    include_once 'layout_card.php';
    include_once 'layout_foot.php';
?>