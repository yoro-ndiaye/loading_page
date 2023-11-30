<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="stylehomepage.css">
  <title>loading page</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-custom">
      <!-- Logo à gauche -->
      <a class="navbar-brand ms-4 ps-1" href="#">
        <img src="assets/Logo Shape.png" width="30" height="30" class="d-inline-block align-top" alt="">
        <span>Boldo</span>
      </a>

      <!-- Éléments de menu centrés à l'extrême droite -->
      <ul class="navbar-nav ms-auto">
      <li class="nav-item">
          <a class="nav-link" href="{{ route('dashboard') }}" id="homepageLink">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog') }}" id="blogLink">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('about') }}" id="aboutLink">About</a>
        </li>
        <li class="nav-item custom-btn">
          <a class="btn fw-bold" href="{{ route('login') }}" >Log In</a>
        </li><br>
        <li class="nav-item custom-btn">
        <a class="btn fw-bold" href="{{ route('register') }}">Register</a>
        </li>
      </ul>
    </nav>
    <!----------------------modals---------------------------->
    
<!-- Bootstrap Modal -->

<!-- Bootstrap Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Connectez-vous d'abord !</h5>
      </div>
      <div class="modal-body">
        Veuillez vous connecter d'abord pour accéder à la page.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Custom JavaScript -->
<script>
    // Add click event listener to the homepage link
    document.getElementById('homepageLink').addEventListener('click', function(event) {
        checkAndShowModal(event);
    });

    // Add click event listener to the blog link
    document.getElementById('blogLink').addEventListener('click', function(event) {
        checkAndShowModal(event);
    });

    // Add click event listener to the about link
    document.getElementById('aboutLink').addEventListener('click', function(event) {
        checkAndShowModal(event);
    });

    // Function to check if the user is logged in and show the modal
    function checkAndShowModal(event) {
        // Assuming you have a variable or function to check if the user is logged in
        var userIsLoggedIn = false; // Change this based on your logic

        if (!userIsLoggedIn) {
            // If the user is not logged in, prevent the link action and show the modal
            event.preventDefault();
            var loginModal = new bootstrap.Modal(document.getElementById('loginModal'));
            loginModal.show();
        }
    }
</script>

<!----------------------modals---------------------------->

    <div class="container p-3">
      <div class="row">
        <div class="col-md-6">
          <div class="text-container p-3">
            <p class="text1">Save time by building fast with Boldo Template </p>
            <p class="text2">Funding handshake buyer business-to-business metrics iPad partnership. First mover
              advantage innovator success deployment non-disclosure.</p>
            <div class="d-flex">
              <button class="btn-template">Buy template</button>
              <button class="btn-explore">Explore</button>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="image-container">
            <img class="hero-graphics img-fluid" src="assets/hero-graphics.svg" alt="Hero Graphics">
          </div>
        </div>
      </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center mt-4 p-5">
      <div class="swiper align-items-center">
        <div class="d-flex justify-content-center align-items-center overflow-hidden">
          <div class="d-flex align-items-center me-3 overflow-hidden" id="img1">
            <img class="img-fluid me-2" src="assets/Logo Shape-white.png" width="20" height="30" alt="">
            <p class="titr1 mb-0">Boldo</p>
          </div>

          <div class="d-flex align-items-center me-3 overflow-hidden" id="img1">
            <img class="img-fluid me-2" src="assets/noun_Pie Chart_4196192 1.png" width="30" height="30" alt="">
            <p class="titr1 mb-0">Presto</p>
          </div>

          <div class="d-flex align-items-center me-3 overflow-hidden" id="img1">
            <img class="img-fluid me-2" src="assets/Logo Shape-white.png" width="20" height="30" alt="">
            <p class="titr1 mb-0">Boldo</p>
          </div>

          <div class="d-flex align-items-center me-3 overflow-hidden" id="img1">
            <img class="img-fluid me-2" src="assets/noun_Pie Chart_4196192 1.png" width="30" height="30" alt="">
            <p class="titr1 mb-0">Presto</p>
          </div>

          <div class="d-flex align-items-center me-3 overflow-hidden" id="img1">
            <img class="img-fluid me-2" src="assets/Logo Shape-white.png" width="20" height="30" alt="">
            <p class="titr1 mb-0">Boldo</p>
          </div>

          <div class="d-flex align-items-center overflow-hidden" id="img1">
            <img class="img-fluid me-2" src="assets/noun_Pie Chart_4196192 1.png" width="30" height="30" alt="">
            <p class="titr1 mb-0">Presto</p>
          </div>
        </div>
      </div>
    </div>
  </header>

  <section class="section1">
    <div class="text-center p-5">
      <p class="text-service">Our Services</p>
      <h1 class="text-hand">Handshake infographic mass market <br> crowdfunding iteration.</h1>
    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4 mb-4">
          <div class="column">
            <img class="img-fluid" src="assets/image-Dni.png" alt="Image 1">
            <p class="desc1">Cool feature title</p>
            <p class="desc2">Learning curve network effects return on investment.</p>
            <div class="d-flex explore">
              <p class="desc3">Explore page</p>
              <img class="img-fluid img-explore" src="assets/arrow-right-explore.png" alt="Image 1">
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="column">
            <img class="img-fluid" src="assets/image-3Z4.png" alt="Image 2">
            <p class="desc1">Even cooler feature</p>
            <p class="desc2">Learning curve network effects return on investment.</p>
            <div class="d-flex explore">
              <p class="desc3">Explore page</p>
              <img class="img-fluid img-explore" src="assets/arrow-right-explore.png" alt="Image 1">
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4">
          <div class="column">
            <img class="img-fluid" src="assets/rectangle-1270.png" alt="Image 3">
            <p class="desc1">Cool feature title</p>
            <p class="desc2">Learning curve network effects return on investment.</p>
            <div class="d-flex explore">
              <p class="desc3">Explore page</p>
              <img class="img-fluid img-explore" src="assets/arrow-right-explore.png" alt="Image 1">
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <img class="img-fluid img-call" src="assets/call.png" alt="Image">
          <div class="rectangle-call">
            <img class="img-fluid img-rect" src="assets/call-rect.png" alt="Image">
            <br><br>
            <p class="text1-rect">30%</p>
            <p class="text2-rect">More income in June</p>
          </div>
        </div>
        <div class="col-md-6 p-5">
          <p class="text-call1">We connect our customers with the best, and help them keep up-and stay open.</p>
          <div class="d-flex">
            <img class="img-fluid img-check" src="assets/check.png" alt="Image">
            <p class="text-call2">We connect our customers with the best.</p>
          </div>
          <div class="d-flex">
            <img class="img-fluid img-check" src="assets/check.png" alt="Image">
            <p class="text-call2">Advisor success customer launch party.</p>
          </div>
          <div class="d-flex">
            <img class="img-fluid img-check" src="assets/check.png" alt="Image">
            <p class="text-call2">Business-to-consumer long tail.</p>
          </div>
          <div>
            <button class="btn-call">Start now</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6 p-5">
          <p class="text-call1">We connect our customers with the best, and help them keep up-and stay open.</p>
          <div class="d-flex rect2">
            <img class="img-fluid img-check" src="assets/plume.png" alt="Image">
            <p class="text1-rect2">We connect our customers with the best.</p>
          </div>
          <br>
          <div class="d-flex" style="padding: 20px;">
            <img class="img-fluid img-check" src="assets/eye.png" alt="Image">
            <p class="text2-rect2">Advisor success customer launch party.</p>
          </div>
          <div class="d-flex " style="padding: 20px;">
            <img class="img-fluid img-check" src="assets/sun.png" alt="Image">
            <p class="text2-rect2">Business-to-consumer long tail.</p>
          </div>
        </div>
        <div class="col-md-6">
          <img class="img-fluid img-call" src="assets/call-fil.png" alt="Image">
          <div class="rectangle-call" style="padding-left: 40px;">
            <img class="img-fluid img-fil" src="assets/PieGraph1.jpg" alt="Image">
            <br><br>
            <div class="d-flex ">
              <img class="img-fluid img-check" src="assets/ellipse-fil.png" alt="Image">
              <p class="text1-fil">35% - Agile Development</p>
            </div>
            <div class="d-flex ">
              <img class="img-fluid img-check" src="assets/ellipse-fil2.png" alt="Image">
              <p class="text1-fil">35% - Agile Development</p>
            </div>
            <div class="d-flex ">
              <img class="img-fluid img-check" src="assets/ellipse-3.png" alt="Image">
              <p class="text1-fil">35% - Agile Development</p>
            </div>
          </div>
        </div>
      </div>
  </section>

  <section class="section2">
    <div class="container mt-4 p-5">
      <div class="row">
        <div class="col-md-9">
          <p class="text1">An enterprise template to ramp <br> up your company website</p>
        </div>
        <div class="col-md-3 p-5">
          <img class="img-fluid img-arrows" src="assets/arrows.png" alt="Image">
        </div>
        <br>


        <div class="container mt-4">
          <div class="row">
            <div class="col-md-6 col-lg-4">
              <div class="rectangle">
                <p class="text1-rect-sect2">“Buyer buzz partner network disruptive non-disclosure agreement business”
                </p>
                <div class="d-flex">
                  <div class="img-sect2"><img class="img-fluid img-sect2" src="assets/ellipse-sect2.png" alt="Image">
                  </div>
                  <p class="text2-rect-sect2">Albus Dumbledore <br><span>Manager @ Howarts</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="rectangle-middle">
                <p class="text1-rect-sect2">“Learning curve infrastructure value design business proposition advisor
                  strategy user
                  experience hypotheses investor.”</p>
                <br>
                <div class="d-flex">
                  <div class="img-sect2"><img class="img-fluid img-sect2" src="assets/ellipse-4-sect.png" alt="Image">
                  </div>
                  <p class="text2-rect-sect2">Severus Snape <br><span>Manager @ Slytherin</span></p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4">
              <div class="rectangle">
                <p class="text1-rect-sect2">“Release facebook responsive web design business model canvas seed money
                  monetization.”</p>
                <div class="d-flex">
                  <div class="img-sect2"><img class="img-fluid img-sect2" src="assets/ellipse-4-set2.png" alt="Image">
                  </div>
                  <p class="text2-rect-sect2">Harry Potter <br><span>Team Leader @ Gryffindor</span></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section3">
    <div class="contenair" style="margin: 150px;">
      <div class="row">
        <div class="img-defarsci">
        </div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-6">
          <p class="text1-sect3">We connect our customers with the best, and help them keep up-and stay open.</p>
        </div>
        <div class="col-md-6">
          <div class="d-flex justify-content-between align-items-center">
            <p class="text2-sect3">We connect our customers with the best?</p>
            <img class="img-fluid img1-sect3" src="assets/img1-sect3.png" alt="Image">
          </div>
          <hr>
          <div class="d-flex justify-content-between align-items-center">
            <p class="text2-sect3">We connect our customers with the best?</p>
            <img class="img-fluid img1-sect3" src="assets/img1-sect3.png" alt="Image">
          </div>
          <hr>
        </div>
      </div>
    </div>
    <br>
    <div class="text-center p-5">
      <p class="blog">Our Blog</p>
      <p class="text-blog">Value proposition accelerator product management venture</p>
    </div>

    <div class="container mt-4">
      <div class="row">
        <div class="col-md-4">
          <div class="rectangle1-sect3 bg-primary">
          </div>
          <p class="text-categorie">Category <span>November 22, 2021</span></p>
          <p class="text-desc-sect3">Pitch termsheet backing <br> validation focus release.</p>
          <br><br>
          <div class="d-flex">
            <div class="img-sect2"><img class="img-fluid img-sect2" src="assets/ellipse-10-sect3.png" alt="Image">
            </div>
            <p class="text2-rect-sect2">Chandler Bing<br><span>Manager @ Slytherin</span></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rectangle2-sect3 bg-secondary"></div>
          <p class="text-categorie">Category <span>November 22, 2021</span></p>
          <p class="text-desc-sect3">Seed round direct mailing non- <br>disclosure agreement graphical <br> user interface rockstar.</p>
          <br>
          <div class="d-flex">
            <div class="img-sect2"><img class="img-fluid img-sect2" src="assets/ellipse-10-bg.png" alt="Image">
            </div>
            <p class="text2-rect-sect2">Rachel Green <br><span>Manager @ Slytherin</span></p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="rectangle3-sect3 bg-info"></div>
          <p class="text-categorie">Category <span>November 22, 2021</span></p>
          <p class="text-desc-sect3">Beta prototype sales iPad gen-z <br> marketing network effects value <br> proposition</p>
          <br>
          <div class="d-flex">
            <div class="img-sect2"><img class="img-fluid img-sect2" src="assets/ellipse-4-sect.png" alt="Image">
            </div>
            <p class="text2-rect-sect2">Monica Geller <br><span>Manager @ Slytherin</span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center" style="margin-top: 50px;"><button class="btn-sect3">Load more</button></div>
  </section>

  <section class="section4">
  <div class="container sect-4" style="padding: 100px;">
    <div class="row">
      <div>
        <p class="text-center text-sect3 p-5">An enterprise template to ramp <br> up your company website</p>
      </div>
      <div class="d-flex justify-content-center">
        <button class="btn1-sect4">Your email address</button>
        <button class="btn2-sect4">Start now</button>
      </div>
      <br>
    </div>
  </div>
  </section>

  <!-- Footer -->
<footer class="text-center text-lg-start  text-muted">
 
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <div class="d-flex">
            <img class="img-fluid img1-footer" src="assets/Shape-footer.png" alt="Image">
          <h3 class="text-uppercase fw-bold mb-4 boldo-footer">
            Boldo
          </h3>
          </div>
          <div >
            <p class="text1-footer">Social media validation business model canvas graphical user interface launch party creative facebook iPad twitter.</p>
            <br><br>
            <p class="text1-footer">All rights reserved.</p>
          </div>
  
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4" >
          <!-- Links -->
          <h4 class="fw-bold mb-4">
            Landings
          </h4>

          <p>
            <a href="#" class="text-reset">Home</a>
          </p>
          <p>
            <a href="#" class="text-reset">Product</a>
          </p>
          <p>
            <a href="#" class="text-reset">Service</a>
          </p>
      
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h4 class=" fw-bold mb-4">
            Company
          </h4>
          <p>
            <a href="#" class="text-reset">Home</a>
          </p>
          <p class="d-flex">
            <a href="#" class="text-reset">Careers</a>
            <button>Hiring!</button>
          </p>
          <p>
            <a href="#" class="text-reset">Service</a>
          </p>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h4 class=" fw-bold mb-4">
            Resources
          </h4>
          <p>
            <a href="#" class="text-reset">Blog</a>
          </p>
          <p>
            <a href="#" class="text-reset">Product</a>
          </p> 
          <p>
            <a href="#" class="text-reset">Service</a>
          </p> 
          
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

<!-- Footer -->

<script>
    function checkLogin() {
        // Assuming you have a variable or function to check if the user is logged in
        var userIsLoggedIn = false; // Change this based on your logic

        if (!userIsLoggedIn) {
            // If the user is not logged in, show the Bootstrap alert
            var alertHtml = '<div class="alert alert-warning alert-dismissible fade show" role="alert">Veuillez vous connecter d\'abord.';
            alertHtml += '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
            
            // Add the alert to the body
            document.body.insertAdjacentHTML('beforeend', alertHtml);
        }
    }
</script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>