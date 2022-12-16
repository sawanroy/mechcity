<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mechcity|Contact us</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/customer/css/style-starter.css')?>">
  </head>
  <body>


<!--header-->
<?php include_once("header.php")?>
<!--/header-->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
        <div class="container pt-lg-5 py-3">
        </div>
    </div>
</section>
<!-- <section class="w3l-breadcrumb">
    <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Pages</li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Contact Us</li>
        </ul>
    </div>
</section> -->
<!-- contacts -->
<section class="w3l-contact-7 pt-5" id="contact">
    <div class="contacts-9 pt-lg-5 pt-md-4">
        <div class="container">
            <div class="top-map">
                <div class="row map-content-9">
                    <div class="col-lg-8">
                        <div class="contact-form">
                            <h5 class="mb-2">Get in touch</h5>
                            <p class="mb-4">Your email address will not be published. Required fields are marked *</p>
                            <form action="https://sendmail.w3layouts.com/submitForm" method="post" class="">
                                <div class="form-grid">
                                    <div class="input-field">
                                        <input type="text" name="w3lName" id="w3lName" placeholder="Your Name"
                                            required="">
                                    </div>
                                    <div class="input-field">
                                        <input type="email" name="w3lSender" id="w3lSender" placeholder="Email"
                                            required="">
                                    </div>
                                </div>
                                <div class="input-field mt-4">
                                    <textarea name="w3lMessage" id="w3lMessage" placeholder="Message"></textarea>
                                </div>
                                <input type="checkbox"> <label>Save my name, email, and website in this
                                    browser for the next time I comment</label>
                                <button type="submit" class="btn btn-primary btn-style mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 cont-details">
                        <address>
                            <!-- <h5 class="">Our Team</h5> -->
                            <!-- <p>Miheer Wazarkar (27) ; Co-Founder & Director @ Mechcity Private Limited  </p>
                            <p> Viraj Kulkarni (25) ; Founder & Director @ Mechcity Private Limited.   CFO, Head of Marketing & Technology  </p> -->
                            <h5 class="mt-4 pt-lg-3">Phone informatiom</h5>
                            <p><span class="fa fa-mobile"></span> <strong>Phone :</strong>
                                <a href="tel:+1(12) 366 411 4999"> +91 9867234870</a></p>
                                <p> <span class="fa fa-envelope"></span> <strong>Email :</strong>
                                <a href="mailto:mail@example.com"> mechcity.sales@gmail.com </a></p>
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <div class="map mt-5">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.150158309659!2d72.96704341490289!3d19.188642787023458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b94de2d4f679%3A0x3c2173c0ebf8ac77!2sKamal%20Niwas!5e0!3m2!1sen!2sin!4v1607341297241!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>
<!-- //contacts -->
 <!-- footers 20 -->

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>

<!-- jQuery and Bootstrap JS -->
<script src="<?= base_url('assets/customer/js/jquery-3.3.1.min.js')?>"></script>

<script src="<?= base_url('assets/customer/js/theme-change.js')?>"></script><!-- theme switch js (light and dark)-->

<!-- stats number counter-->
<script src="<?= base_url('assets/customer/js/jquery.waypoints.min.js')?>"></script>
<script src="<?= base_url('assets/customer/js/jquery.countup.js')?>"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owlcarousel -->
<script src="<?= base_url('assets/customer/js/owl.carousel.js')?>"></script>
<!-- script for blog post slider -->
<script>
  $(document).ready(function () {
    $('.owl-blog').owlCarousel({
      loop: true,
      margin: 30,
      nav: false,
      responsiveClass: true,
      autoplay: false,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        480: {
          items: 1,
          nav: true
        },
        700: {
          items: 1,
          nav: true
        },
        1090: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script for blog post slider -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
      nav: false,
      margin: 50,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        736: {
          items: 1,
          nav: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<script src="<?= base_url('assets/customer/js/jquery.magnific-popup.min.js')?>"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!-- MENU-JS -->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!-- //MENU-JS -->

<!-- bootstrap -->
<script src="<?= base_url('assets/customer/js/bootstrap.min.js')?>"></script>

</body>

</html>