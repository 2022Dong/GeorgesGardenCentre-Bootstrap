<?php include_once('components/header.php'); ?>
<?php include_once('components/navbar.php'); ?>

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item">
      <img src="images/logo.jpg" class="d-block w-100" alt="logo.jpg">
    </div>
    <div class="carousel-item active">
      <img src="images/figs.jpg" class="d-block w-100" alt="figs.jpg">
    </div>
    <div class="carousel-item">
      <img src="images/tools.jpg" class="d-block w-100" alt="tools">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="container text-success text-center padding">
  <h3>YouTube Videos</h3>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="ratio ratio-16x9">
        <iframe width="875" height="492" src="https://www.youtube.com/embed/piUCyADQTYI" title="What Are the Health Related Benefits of Gardening? - 5 Secrets" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
    <div class="col-md-6">
      <div class="ratio ratio-16x9">
        <iframe width="875" height="492" src="https://www.youtube.com/embed/kF-V7Wdp-SM" title="10 TRICKS TO GROW LOTS OF LEMONS | HOW TO GROW LEMON TREE IN POT | CITRUS TREE CARE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>
<?php include_once('components/footer.php'); ?>