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

<div class="text-container">
        <h2>Welcome to Hungerhub</h2>
        <p>
            "Welcome to HungerHub, your number one delivery app for fast food! Satisfy your cravings with a wide selection of delicious dishes, delivered right to your doorstep. Order now and experience the ultimate convenience in fast food delivery."
        </p>
    </div>

    
<div class="grid-container">
  <div class="grid-item">
    <a href="link1.html">
      <img src="images\bartender-making-alcoholic-cocktail-summer-cocktail-bar.jpg" alt="Grid Item 1">
      <button class="order-button">Order Now</button>
    </a>
  </div>
  <div class="grid-item">
    <a href="link2.html">
      <img src="images\man-hand-pours-larger-beer-glass-standing-vintage-table-blurred-counter-bar-jar-pickles.jpg" alt="Grid Item 2">
      <button class="order-button">Order Now</button>
    </a>
  </div>
  <div class="grid-item">
    <a href="link3.html">
      <img src="images\side-view-potatoes-with-meat-tomato-sauce-with-arugula-greek-salad-soup-table.jpg" alt="Grid Item 3">
      <button class="order-button">Order Now</button>
    </a>
  </div>
  <div class="grid-item">
    <a href="link4.html">
      <img src="images\mini-burgers-french-fries-spices-cocktails-side-view.jpg" alt="Grid Item 4">
      <button class="order-button">Order Now</button>
    </a>
  </div>
  <div class="grid-item">
    <a href="link5.html">
      <img src="images\side-view-woman-put-cup-tea-lemon-slice-pancakes-with-boiled-eggs-tomatoes-cucumbers-honey-table-serve-breakfast.jpg" alt="Grid Item 5">
      <button class="order-button">Order Now</button>
    </a>
  </div>
  <div class="grid-item">
    <a href="link6.html">
      <img src="images\various-snacks-served-with-beer.jpg" alt="Grid Item 6">
      <button class="order-button">Order Now</button>
    </a>
  </div>
</div>


</body>
<?php require('partials/footer.php') ?>