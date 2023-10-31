<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>

<body>
<div class="carousel">
  <div class="carousel-slide">
    <img src="images\restaurant-interior.jpg" alt="Carousel Slide 1">
  </div>
  <div class="carousel-slide">
    <img src="images\side-view-potatoes-with-meat-tomato-sauce-with-arugula-greek-salad-soup-table.jpg" alt="Carousel Slide 2">
  </div>
  <div class="carousel-slide">
    <img src="images\wine-glass.jpg" alt="Carousel Slide 3">
  </div>

  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
</body>

<?php require('partials/footer.php') ?>