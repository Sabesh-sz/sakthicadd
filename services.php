
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SakthiCad</title>
  <link rel="icon" type="image/x-icon" href="source/Images/logo1.jpg">
  <link href="assets/CSS/index.css" media="all" rel="stylesheet">
  <link href="assets/Bootstrap/bootstrap-5.0.2-dist/css/bootstrap.min.css" media="all" rel="stylesheet">
  <link href="assets/Bootstrap/bootstrap-5.0.2-dist/js/bootstrap.min.js" media="all" rel="stylesheet">
  <!-- Oswald-font -->
  <link href="http://fonts.cdnfonts.com/css/oswald-6" rel="stylesheet">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>

<body>
  <!-- Header -->
  <section class="header header-fixed" id="myHeader">
    <nav class=" header-box navbar navbar-expand-lg navbar-light">
      <div class="container header-con-fixed">
        <a class="navbar-brand header-logo-parent" href="index.php">
          <img class="img-fluid header-logo" src="source/Images/Logo.png" alt="Logo">
        </a>
        <button class="navbar-toggler navbar-toggler-forfixed" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon navbar-toggler-icon-forfixed"></span>
        </button>
        <div class="collapse navbar-collapse header-topics" id="navbarNav">
          <ul class="navbar-nav header-topics-content">
            <li class="nav-item">
              <a class="nav-link hover-border" href="about_us.php">About&nbsp;Us</a>
            </li>
            <li class="nav-item active-page">
            <li class="nav-item dropdown" id="myDropdown">
      <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services</a>
      <ul class="dropdown-menu">
        <li> <a class="dropdown-item" href="electronics.php">Electronics</a></li>
        <li> <a class="dropdown-item" href="#">Mechanical</a>
        <li> <a class="dropdown-item" href="#">Software</a>
        </ul>
            </li>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="http://www.sakthicadd.com/coming_soon.htm">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="careers.php">Careers</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php"><button class="chat"><img class="chat-logo" src="source/Images/chat.svg">CONTACT&nbsp;US</button></a>
            </li>
            <li class="nav-item">
              <a class="nav-link hover-border" href="login1.php">Login</a>
            </li>
          </ul>
        </div>
    </nav>
  </section>
  <!-- Mobile-NavBar -->
  <section class="mobile-menu">
    <div class="close">
      <img src="source/Images/close.png" id="close" alt="close">
    </div>
    <ul class="navbar-nav header-topics-content">
    <li class="nav-item mobile-nav">
        <a class="menu-name" href="index.php">Home</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="about_us.php">About Us</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="services.php">Services</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="http://www.sakthicadd.com/coming_soon.htm">Products</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="careers.php">Careers</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="contact.php">Contact Us</a>
      </li>
      <li class="nav-item mobile-nav">
        <a class="menu-name" href="login1.php">Login</a>
      </li>
    </ul>
  </section>
  <!-- Product-content -->
 
  <!-- development -->
  <section class="development">
    
    <div class="development-images">
      <div class="development-images-group">
        <img class="img-fluid" src="source/Images/development.jpg" alt="Footer-image" />
        <div class="development-hover">
          <p>ELECTRONICS & EMBEDDED SYSTEMS</p>
          <a class="btn btn-primary view-more" href="services.php" role="button">View More</a>
        </div>
      </div>
      <div class="development-images-group">
        <img class="img-fluid" src="source/Images/development1.jpg" alt="Footer-image" />
        <div class="development-hover">
          <p>MECHANICAL</p>
          <a class="btn btn-primary view-more" href="services.php" role="button">View More</a>
        </div>
      </div>
      <div class="development-images-group">
        <img class="img-fluid" src="source/Images/development2.png" alt="Footer-image" />
        <div class="development-hover">
          <p>SOFTWARE</p>
          <a class="btn btn-primary view-more" href="services.php" role="button">View More</a>
        </div>
      </div>
    </div>
    </div>
  </section>

  <div class="container">

    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="subtitle">Electronics & Embedded systems</h2>
        <h4 class="section-title">Electronics Services</h4>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card border-0 shadow rounded-xs pt-8">
          <div class="card-body">
            <i class="fa fa-object-ungroup icon-lg icon-primary icon-bg-primary icon-bg-circle mb-3"></i>
            <h4 class="mt-4 mb-3">PCB Designing</h4>
            <div class="img-wrap"> 
                        <img src="source/Images/Arduino4.jpg" class="img-fluid">
</div>
            <p>We can design package design for components, high-speed digital, analog and mixed-signal, and ultrahigh-density boards in no time.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card border-0 shadow rounded-xs pt-8">
          <div class="card-body">
            <i class="fa fa-users icon-lg icon-yellow icon-bg-yellow icon-bg-circle mb-3"></i>
            <h4 class="mt-4 mb-3">Production Engineering</h4>
            <div class="img-wrap"> 
                        <img src="source/Images/Arduino5.jpg" class="img-fluid">
</div>
            <p>Our mission is consistently provide high-quality, and reliable electronic assemblies and products to all our customers.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card border-0 shadow rounded-xs pt-8">
          <div class="card-body">
            <i class="fa fa-desktop icon-lg icon-purple icon-bg-purple icon-bg-circle mb-3"></i>
            <h4 class="mt-4 mb-3">Component Procurement</h4>
            <div class="img-wrap"> 
                        <img src="source/Images/Arduino6.jpg" class="img-fluid">
</div>
            <p>We can source all the necessary components for your PCB. Not only will this save you time.</p>
          </div>
        </div>
      </div>
 
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card border-0 shadow rounded-xs pt-8">
          <div class="card-body">
            <i class="fa fa-comments icon-lg icon-red icon-bg-red icon-bg-circle mb-3"></i>
            <h4 class="mt-4 mb-3">PCB Fabrication</h4>
            <div class="img-wrap"> 
                        <img src="source/Images/Arduino7.jpg" class="img-fluid">
</div>
            <p>We support single-layer, multi-layer rigid, and flex PCB fabrication up-to 22 layers.</p>
          </div>
        </div>
      </div>
     
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card border-0 shadow rounded-xs pt-8">
          <div class="card-body">
            <i class="fa fa-user icon-lg icon-orange icon-bg-orange icon-bg-circle mb-3"></i>
            <h4 class="mt-4 mb-3">PCB Assembly Services</h4>
            <div class="img-wrap"> 
                        <img src="source/Images/Arduino8.jpg" class="img-fluid">
</div>
            <p>Our PCB assembly service caters for a wide range of modern and legacy assembly techniques.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card border-0 shadow rounded-xs pt-8">
          <div class="card-body">
            <i class="fa fa-envelope icon-lg icon-blue icon-bg-blue icon-bg-circle mb-3"></i>
            <h4 class="mt-4 mb-3">Embedded Product</h4>
            <div class="img-wrap"> 
                        <img src="source/Images/Arduino1.jpg" class="img-fluid">
</div>
            <p>Development of all parts of embedded software including bootloaders, hardware software abstraction
layers.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="Turnkey">
    <h1>Services Template 2</h1>
    <div class="Turnkey-iteams">
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Arduino1.jpg" alt="Footer-image" />
          <p>PCB Designing</p>
        </div>
        <div class="Turnkey-hover">
          <p>Description to be added</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Arduino2.jpg" alt="Footer-image" />
          <p>Production Engineering</p>
        </div>
        <div class="Turnkey-hover">
          <p>Description to be added</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Arduino3.jpg" alt="Footer-image" />
          <p>Component Procurement</p>
        </div>
        <div class="Turnkey-hover">
          <p>Description to be added</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Arduino4.jpg" alt="Footer-image" />
          <p>PCB Fabrication</p>
        </div>
        <div class="Turnkey-hover">
          <p>Description to be added</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Arduino5.jpg" alt="Footer-image" />
          <p>PCB Assembly Services</p>
        </div>
        <div class="Turnkey-hover">
          <p>Description to be added</p>
        </div>
      </div>
      <div class="item">
        <div class="card" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          <img class="img-fluid" src="source/Images/Arduino6.jpg" alt="Footer-image" />
          <p>Embedded Product</p>
        </div>
        <div class="Turnkey-hover">
          <p>Description to be added</p>
        </div>
      </div>
    </div>
  </section>
 <!-- Slider -->
 <section class="sliders-parent">
    <section class="Dop-sliders">
      <div class="slide-left intro-left">
        <h1>Embedded Product Development Service</h1>
        
        <p>Development of all parts of embedded software including bootloaders, hardware software abstraction
layers (a.k.a. peripheral libraries), application libraries, and business logic applications for a wide range
of devices. Planning for an IoT product? We can develop Mobile application that can seamlessly connect
with your hardware.  </p>
      </div>
      <div class="slide-right">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="intro-right">
                <img src="source/Images/Arduino1.jpg" alt="logo">
              </div>
            </div>
</div>
        </div>
      </div>
    </section>
  </section>
  <section class="sliders-parent">
    <section class="Dop-sliders">
      <div class="slide-left intro-left">
        <h2>PCB Assembly Services:
</h2	>
        
        <p>Our PCB assembly service caters for a wide range of modern and legacy assembly techniques. From
simple through-hole designs to modern multi-layer, flex-rigid and HDI PCB technologies, all data are
design rule checked (DRC) and panelized to ensure compliance and best yield for our manufacturing
processes. In addition, surface mount solder stencils are checked and engineered with thickness and
aperture types in the SMT production process. </p>
      </div>
      <div class="slide-right">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="intro-right">
                <img src="source/Images/Arduino3.jpg" alt="logo">
              </div>
            </div>
</div>
        </div>
      </div>
    </section>
  </section>

  


  <!-- Footer -->
  <section class="footer">
    <div class="footer-com footer-1">
      <div class="container">
        <div class="row footer-1-row">
          <div class="col">
            <p class="fs-6 fw-bold txt1">STAY IN THE LOOP !</p>
            <h6 class="h1 fw-bold subscribe">SUBSCRIBE</h6>
            <p class="fs-6">to our monthly newsletter and learn the latest tech trends and discount coupons on PCBs.</p>
          </div>
          <div class="col">
            <img class="img-fluid right" src="source/Images/footer-1-image.png" alt="Footer-image" />
          </div>
        </div>
        <div class="col email-layer">
          <form method="POST" action="PHP/subscribe.php" id="form">
            <div class="input-layer">
              <input type="email" name="email" class="form-control email-input" id="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
              <!-- <input type="image"name="send" class="btn" id="send" class="img-fluid" type="image" src="Images/send.png"> -->
              <button type="submit" name="send" class="btn" id="send">
                <img class="img-fluid" src="source/Images/send.png" alt="Footer-image" /></button>
            </div>
          </form>
        </div>
        <div class="col email-layer">
          <p class="email-txt">By clicking send, you'll receive occasional emails from us. You always have the choice to unsubscribe within every email you receive.</p>
        </div>
        <div class="col sucess-msg">
        </div>
      </div>
    </div>
    <div class="footer-strip">
    <a  class="talk-btn btn btn-primary" href="contact.php" role="button">Let's talk </a>
    </div>
    <div class="footer-com footer-2">
      <div class="container">
        <div class="footer2-in">
          <div class="col footer-col col1">
            <a class="navbar-brand" href="#">
              <img class=" footer-2-mainlogo" src="source/Images/Logo.png" alt="Logo">
            </a>
            <p class="fs-6">All our work is bespoke and tailored to your needs, and we are thrilled to explore the technical details of your project - so get in touch today!</p>
            <div class="col footer-2-map">
              <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
                <img class="img-fluid fly-in-right fade-in-right" src="source/Images/map.png" alt="Logo">
              </a>
            </div>
          </div>
          <div class="col footer-col col2">
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <h2 class="footer-2-col3-heading">Navigate</h2>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">ABOUT US</p>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">SERVICES</p>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">PRODUCTS</p>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">CAREERS</p>
            </a>
          </div>
          <div class="col footer-col col3">
            <a class="navbar-brand nav-link" href="#">
              <h2 class="footer-2-col3-heading">Services</h2>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">MECHANICAL</p>
            </a>
            <a class="navbar-brand nav-link" href="http://www.sakthicadd.com/coming_soon.htm">
              <p class="foot-ash">ELECTRONICS & <br>EMBEDDED SYSTEMS</p>
            </a>
          </div>
          <div class="col footer-col col4">
            <h2 class="footer-2-col3-heading">Contact Us</h2>
            <div class="footer-2-contact">
              <img class="img-fluid footer-2-logo" src="source/Images/location.png" alt="Logo">
              <p class="fotter-2-contact-con">17/91,2nd Lane, C.S.Colony, Indira Nagar, Adyar, Chennai - 600020, Tamil Nadu</p>
            </div>
            <div class="footer-2-contact">
              <img class="img-fluid footer-2-logo" src="source/Images/email.png" alt="Logo">
              <p class="fotter-2-contact-con">contact@sakthicadd.com</p>
            </div>
            <div class="footer-2-contact">
              <img class="img-fluid footer-2-logo" src="source/Images/phone.png" alt="Logo">
              <p class="fotter-2-contact-con">+91 9444284487</p>
            </div>
            <div class="footer-2-contact footer-2-contacthours">
              <img class="img-fluid footer-2-logo" src="source/Images/clock.png" alt="Logo">
              <p class="fotter-2-contact-con">Monday to Saturday: 9.00 am to 6 pm</p>
            </div>
          </div>
        </div>
        <div class="row footer-2-bottom2">
          <div class="col footer-2-social-media-layout">
            <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
              <img class="img-fluid social-media" src="source/Images/Facebook.png" alt="Logo">
            </a>
            <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
              <img class="img-fluid social-media" src="source/Images/Instagram.png" alt="Logo">
            </a>
            <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
              <img class="img-fluid social-media" src="source/Images/Twitter.png" alt="Logo">
            </a>
            <a class="navbar-brand" href="http://www.sakthicadd.com/coming_soon.htm">
              <img class="img-fluid social-media" src="source/Images/Linkedin.png" alt="Logo">
            </a>
          </div>
          <div class="footer-2-contacthours2">
            <p class="footer-2-bottom-txt foot-ash">Privacy Policy / Personal Information / Terms of Service<br>Copyrights © 2023 </p>
          </div>
        </div>
      </div>
  </section>
  <script src="assets/Jquery/jquery.js"></script>
  <script src="assets/JS/index.js"></script>
</body>
<script>
  //window.onscroll = function() {scrollFunction2()};
  function scrollFunction() {
    if (document.documentElement.scrollTop > 590) {
      $("#myHeader").addClass("header-scroll");
    } else {
      $("#myHeader").removeClass("header-scroll");
    }
    if (document.documentElement.scrollTop > 700) {
      $(".right").removeClass("slide-out");
      $(".right").addClass("slide-in");
    } else {
      $(".right").removeClass("slide-in");
      $(".right").addClass("slide-out");
    }
  }
</script>

</html>