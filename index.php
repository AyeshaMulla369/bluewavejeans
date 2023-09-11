<?php
$name = $email = $message = "";
$thankYouMessage = "";
if ($_SERVER["REQUEST_METHOD"] == "GET" && array_key_exists("name", $_GET) && array_key_exists("email" , $_GET) && array_key_exists("message", $_GET)) {
    $name = $_GET["name"];
    $email = $_GET["email"];
    $message = $_GET["message"];
    if (isset($name) && isset($email) && isset($message)) {
      // All form fields are filled, display "Thank you" message
      $thankYouMessage = "Thank you, $name, for your message!";
  }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>BLUE WAVE JEANS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&family=Roboto+Slab:wght@400&display=swap" rel="stylesheet">
  <!-- For font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <script src="index.js"></script>
</head>

<body>
  <section id="title">
  <div class="container-fluid">


    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href=""><img class="brand-img" src="images/csi.png" alt="Logo"> BLUE WAVE JEANS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#gallery">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer_last">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
    <hr class="hr1">
    <h1>BLUE WAVE JEANS</h1>
    <hr>
</section>

<section class="Home-image">
  <img class="Main" src="images/jeans.jpg" alt="jeans">
</section>

<section id="sales">
<p class="text-monospace">Blue Wave Jeans is a visionary fashion brand that has taken the world by storm with its unique blend of creativity and craftsmanship. Founded on the principles of innovation and sustainability, Blue Wave Jeans brings a breath of fresh air to the denim industry. Our jeans are more than just clothing; they are a symbol of individuality and self-expression, designed to empower people to be their true selves. With a commitment to eco-conscious practices, we source the finest sustainable materials and employ cutting-edge manufacturing techniques to create jeans that not only look good but also feel good to wear. At Blue Wave Jeans, we ride the waves of imagination to craft jeans that inspire confidence and style, setting a new standard for denim fashion.
Blue Wave Jeans has enjoyed remarkable success in the sales department, firmly establishing itself as a market leader in the world of denim fashion. Our sales figures have surged year after year, thanks to our dedication to quality, style, and sustainability. Customers from all corners of the globe have embraced our brand, making Blue Wave Jeans a household name.

Our sales strategy revolves around a strong online presence, with a user-friendly e-commerce platform that offers customers a seamless shopping experience. We also partner with select retail stores that align with our brand values, allowing more people to access our premium denim products.

Furthermore, our commitment to customer satisfaction extends beyond the point of purchase. We provide exceptional post-sale support, ensuring that our customers continue to enjoy their Blue Wave Jeans long after they've made their initial purchase. As we continue to ride the wave of success, we look forward to expanding our reach and introducing even more fashion-forward individuals to the world of Blue Wave Jeans.
</p>
</section>

<!-- Gallery -->
<div class="row" id="gallery">
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="images/img4.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="images/img1.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="images/img2.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="images/img5.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="images/img6.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="images/img3.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->





<footer id="footer_last" class="text-center text-white navbar-custom">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="https://www.facebook.com" class="me-4 text-reset tnone">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="https://twitter.com" class="me-4 text-reset tnone">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="https://www.google.co.in/" class="me-4 text-reset tnone">
        <i class="fab fa-google"></i>
      </a>
      <a href="https://www.instagram.com/?hl=en" class="me-4 text-reset tnone">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="https://www.linkedin.com/login" class="me-4 text-reset tnone">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="https://github.com/" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>




<!-- Section: Links  -->
<section class="footer-section">
  <div class="container text-center text-md-start mt-5">
    <!-- Grid row -->
    <div class="row mt-3">
      <!-- Grid column -->
      <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
        <!-- Content -->
        <h6 class="text-uppercase fw-bold mb-4">
          <i class="fas fa-gem me-3"></i>BLUE WAVE JEANS
        </h6>
        <p>
          Started in 2003 with our founder James Dean and Antonio Jaquel in Paris, France. Sold about 200+ jeans in its first year of production.
          Since then we have 300+ stores across the world catering to various sizes and shapes. 
        </p>
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
        <!-- Links -->
        <h6 class="text-uppercase fw-bold mb-4">
          Contact
        </h6>
        <section>
            <form  method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
              <input type="text" id="name" name="name" required placeholder="Name">

              <input type="email" id=email" name="email" required placeholder="email">
              
              <textarea id="message"" name="message" rows="4" placeholder="message" required></textarea>
              
              <button type="submit">Submit</button>
          </form>
          <p><?php echo $thankYouMessage; ?></p>
      </section>

      </div>
      <!-- Grid column -->
    </div>
    <!-- Grid row -->
  </div>
</section>
<!-- Section: Links  -->

<!-- Copyright -->
<div class="text-center p-4">
  © 2022 Copyright: AYESHA MULLA
</div>
<!-- Copyright -->
</footer>
<!-- Footer -->

</body>



</html>
