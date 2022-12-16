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

    <title>Mechcity| Pay with razorpay</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/customer/css/style-starter.css')?>">
    
  </head>
  <body align="center">

<!--header-->
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
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> About Us</li>
        </ul>
    </div>
</section> -->
<div align="center">
<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<?php 
include_once ('razorpay/Razorpay.php');
use Razorpay\Api\Api;
$keyid=$rozerpay_key['key_id'];
$secretkey=$rozerpay_key['key_secret'];
$api = new Api($keyid, $secretkey);
$name=$input['Fname'];
$email=$input['email'];
$mobile=$input['Contact_number'];
$sno=$input['turf_sno'];
if(@$input['ball']==null && @$input['ball1']==null ){
    $niv=0;
}
elseif(@$input['ball']=='50')
{
   $niv=50; 
}
elseif(@$input['ball1']=='75')
{
      $niv=75;
}
else{
    $niv=125;
}

$pri=$input['price']+$niv;

$order  = $api->order->create([
    'receipt'         => 'order_mechcity_turfs',
    'amount'          => $pri*100, // amount in the smallest currency unit
    'currency'        => 'INR',// <a href="/docs/payment-gateway/payments/international-payments/#supported-currencies" target="_blank">See the list of supported currencies</a>.)
  ]);
?>


<form action="<?= base_url('Customer_controller/success_payment')?>" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $keyid ?>" 
    data-amount="<?php echo $pri*100 ?>" 
    data-currency="INR"
    data-order_id="<?php $order->id ?>"
    data-buttontext="Pay with Razorpay"
    data-name="Mechcity"
    data-description="Mechcity buisness "
    data-image="https://mechcitybusiness.in/assets/images/logo.jpeg"
    data-prefill.name="<?php echo $name ?>"
    data-prefill.email="<?php echo $email ?>"
    data-prefill.contact="<?php echo $mobile ?>"
    data-theme.color="#243b28"
></script>
<input type="hidden" name="Cus_name" value="<?php echo $name ?>" />
<input type="hidden" name="Cus_email" value="<?php echo $email ?>" />
<input type="hidden" name="Cus_mobile" value="<?php echo $mobile ?>" />
<input type="hidden" name="Truf_sno" value="<?php echo $sno ?>" />
<input type="hidden" name="status" value="Booked"/>
</form>
</div>

                
           
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