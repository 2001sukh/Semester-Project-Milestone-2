<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
<?php require('connection.php')?>

<body>

<div class="popup-container" id="login-popup">
  <div class="popup">
    <form>
      <h2>
        <span>User Login</span>
        <button type="reset" onclick="popup('login-popup')">x</button>
</h2>
<input type="text" placeholder="E-mail or username">
<input type="password" placeholder="Password">
<button type="submit" class="login-btn">LOGIN</button>
</form>
</div>
</div>


<div class="popup-container" id="register-popup">
  <div class="register popup">
    <form>
      <h2>
        <span>User Register </span>
        <button type="reset" onclick="popup('register-popup')">x</button>
</h2>
<input type="text" placeholder="Full Name">
<input type="text" placeholder="Username">
<input type="email" placeholder="E-mail">
<input type="password" placeholder="password">
<button type="submit" class="register-btn">REGISTER</button>
</form>
</div>
</div>


<script>
function popup(popup_name)
{
  get_popup=document.getElementById(popup_name);
  if(get_popup.style.display=="flex")
  {
    get_popup.style.display="none";
  }
  else
  {
    get_popup.style.display="flex";
  }
}
  </script>

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