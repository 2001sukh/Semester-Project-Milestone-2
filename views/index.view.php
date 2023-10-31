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

<!-- JavaScript for the carousel -->
<script>
  let slideIndex = 0;
  showSlides();

  function showSlides() {
    let slides = document.querySelectorAll('.carousel-slide');

    // Hide all slides
    for (let i = 0; i < slides.length; i++) {
      slides[i].style.display = 'none';
    }

    // Show the current slide
    slideIndex++;
    if (slideIndex > slides.length) {
      slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = 'block';

    // Change slides every 3 seconds (3000 milliseconds)
    setTimeout(showSlides, 3000);
  }
</script>


</body>
<?php require('partials/footer.php') ?>