<?php require_once('mailer.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>RafiaDesign - Contact me</title>
  <meta name="description" content="Young interior designer from East London, providing fresh and innovative designs at a great, affordable price.">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/animate-custom.css">

  <link href='http://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>

  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
  <![endif]-->
</head>
<body class="animated a-delay0 fadeIn">
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->

<!-- Navigation Bar -->
  <nav class="top-bar" data-topbar>
    <ul class="title-area nav-logo">
      <div class="logo-placement">
        <div class="logo-full">
          <li class="name">
            <a href="index"><img src="img/logosmall.png" alt="RafiaDesign logo"/></a>
          </li>
        </div>
        <div class="logo-r">
          <li>
            <a href="home"><span class="mobile-hidden"><img src="img/rafiadesignsmall.png" alt="RafiaDesign text"/></span><span class="mobile-rafia"><img src="img/rafiadesignsmallmobile.png" alt="RafiaDesign text"/></span></a>
          </li>
        </div>
        <div class="logo-strap">
          <li>
            <a href="rinteriors"><span class="mobile-hidden"><img src="img/strapsmall.png" alt="RafiaDesign strap line"/></span><span class="mobile-strap"><img src="img/strapsmallmobile.png" alt="RafiaDesign strap line"/></span></a>
          </li>
        </div>
      </div>
      <li class="toggle-topbar menu-icon"><a href="#">Menu <div class="nav-icon"></div></a></li>
    </ul>

    <section class="top-bar-section">
      <!-- Right Nav Section -->
      <ul class="right">
        <li><a href="home">Home</a></li>
        <li class="appear"><a href="about">About</a></li>
        <li class="appear"><a href="designphilosophy">Design Philosophy</a></li>
        <li class="appear"><a href="services">Services</a></li>
        <li class="appear"><a href="whatandwhy">What & Why</a></li>
        <li class="appear"><a href="rinteriors">R Interiors</a></li>
        <li class="has-dropdown disappear about-nav">
          <a href="about">About</a>
          <ul class="dropdown">
            <li><a href="designphilosophy">Design Philosophy</a></li>
          </ul>
        </li>
        <li class="has-dropdown disappear services-nav">
          <a href="services">Services</a>
          <ul class="dropdown">
            <li><a href="whatandwhy">What & Why</a></li>
            <li><a href="rinteriors">R Interiors</a></li>
          </ul>
        </li>
        <li><a href="portfolio">Portfolio</a></li>
        <li><a href="testimonials">Testimonials</a></li>
        <li class="active"><a href="contact.php">Contact</a></li>
      </ul>

      <!-- Left Nav Section -->
      <ul class="left">
        <li></li>
      </ul>
    </section>
  </nav>
<!-- // Navigation Bar -->

<!-- Content -->
<div class="row">
  <div class="large-12 columns page-header">
    <h2>Contact</h2>
    <hr>
    <p>Get in touch</p>
  </div>
</div>

<div class="contact-form">
  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <div class="row">
      <div class="large-12 columns details">
        <ul class="vcard">
          <li class="fn"><h5>Rafia Begum</h5></li>
          <li class="street-address"><h5>REMOVED</h5></li>
          <li class="street-address"><h5>REMOVED</h5></li>
          <li class="locality"><h5>T :  REMOVED</h5></li>
          <li class="email"><a href="mailto:info@rafiadesign.co.uk?subject=Interior%20Design%20Service%20-%20More%20Info"><h5>Email: REMOVED</h5></a></li>
          <ul class="inline-list contact-icons">
            <li><a href="https://www.facebook.com/RafiaDesign"><img src="img/socialicons/Facebook.png" /></a></li>
            <li><a href="https://twitter.com/RafiaDesign"><img src="img/socialicons/Twitter.png" /></a></li>
            <li><a href="http://instagram.com/rafiadesign#"><img src="img/socialicons/Instagram.png" /></a></li>
            <li><a href="https://plus.google.com/116433299364779975310/posts"><img src="img/socialicons/Googleplus.png" /></a></li>
            <li><a href="http://www.pinterest.com/rafiadesign/"><img src="img/socialicons/Pinterest.png" /></a></li>
            <li><a href="http://uk.linkedin.com/in/rafiadesign"><img src="img/socialicons/Linkedin.png" /></a></li>
          </ul>
        </ul> 
      </div>
      <div class="large-12 columns contact">
        <p>Please feel free to leave your details and I will get back to you.<br>Thanks!</p>

        <?php
        if (isset($_POST['submit'])) {
          if(!empty($errors)){
            echo "<div class='feedback error'>" . $errors . "</div>";
          } else if(!empty($success)){
              echo "<div class='feedback success'>" . nl2br($success) . "</div>";
          }
        }
        ?>

        <input type="text" placeholder="name" name="name" value="<?php echo htmlentities($visitor_name) ?>">
        <input type="email" placeholder="email" name="email" value="<?php echo htmlentities($visitor_email) ?>">
        <input type="text" placeholder="phone" name="phone" value="<?php echo htmlentities($visitor_phone) ?>">
        <input type="text" placeholder="address" name="address" value="<?php echo htmlentities($visitor_address) ?>">
        <input type="text" placeholder="subject/service" name="subject" value="<?php echo htmlentities($visitor_subject) ?>">
        <textarea placeholder="message" name="message" value="<?php echo htmlentities($visitor_message) ?>"></textarea>
        <input type="submit" value="Send" name="submit">
      </div>
    </div>
  </form>
</div>

<!-- // Content -->

<!-- Main Footer -->
<div class="main-footer">
  <div class="row">
    <div class="large-12 columns footer-content">
      <div class="footer-social">
        <ul>
          <li><a href="https://www.facebook.com/RafiaDesign"><img src="img/socialicons/Facebook.png" /></a></li>
          <li><a href="https://twitter.com/RafiaDesign"><img src="img/socialicons/Twitter.png" /></a></li>
          <li><a href="http://instagram.com/rafiadesign#"><img src="img/socialicons/Instagram.png" /></a></li>
          <li><a href="https://plus.google.com/116433299364779975310/posts"><img src="img/socialicons/Googleplus.png" /></a></li>
          <li><a href="http://www.pinterest.com/rafiadesign/"><img src="img/socialicons/Pinterest.png" /></a></li>
          <li><a href="http://uk.linkedin.com/in/rafiadesign"><img src="img/socialicons/Linkedin.png" /></a></li>
        </ul>
      </div>
      <h5>&copy; 2014 Rafia Design</h5>
      <h5>E: <a href="mailto:info@rafiadesign.co.uk?subject=Interior%20Design%20Service%20-%20More%20Info">info@rafiadesign.co.uk</a></h5>
      <h5>T: 020 3432 7274</h5>
      <p><a href="img/termsandconditions.pdf">Terms and conditions</a></p>
    </div>
  </div>
  <div class="row">
    <div class="large-12 columns takomo">
      <p>Template by <a href="http://www.takomo.co.uk/">TAKOMO</a></p>
    </div>
  </div>
</div>
<!-- // Main Footer -->



  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

  <script src="js/foundation/foundation.js"></script>
  <script src="js/foundation/foundation.topbar.js"></script>

  <script src="js/main.js"></script>

  <script>
    $(document).foundation();
  </script>

</body>
</html>
