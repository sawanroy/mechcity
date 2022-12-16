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

    <title>Mechcity | Order details</title>

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
<!--/blog-post-->
<section class="w3l-blog post-content py-5">
    <div class="container py-lg-4 py-md-3 py-2">
        <div class="inner mb-4">
           
        </div>
        <div class="post-content">
            <h2 class="title-single"> List of Booked Turf</h2>
        </div>
        <div class="blo-singl mb-4">
            
        </div>
        <div class="row">
            <div class="col-lg-8 w3l-news">
                <div class="blog-single-post">
                    <div class="single-post-image mb-5">
                        
                    </div>

                    <div class="single-post-content">
                    <?php if(@count($d)): ?>
                    <?php foreach($d->result() as $Booked): ?>
                        <div class="single-bg-white">
                            <h3 class="post-content-title mb-4"> Booking Details</h3>
                            <ul class="details-list">
                                <li><strong>Turf name :</strong> <?php echo $Booked->Turf_name?> </li>
                                 
                                 <?php $date1 = $Booked->start_time;
                                      $date2 = $Booked->End_time;
                                        ?>
                                <li><strong>Slot Timming</strong><?php echo date('h:i a', strtotime($date1))?>&nbsp-&nbsp<?php echo date('h:i a', strtotime($date2)) ?> </li>
                                <li><strong>Booking date</strong> <?php echo $Booked->date?></li>
                                <li><strong>Price :</strong><?php echo $Booked->price?> </li>
                                <li><strong>Day</strong> <?php echo $Booked->days?> </li>
                                <li><strong>Player Name</strong><?php echo $Booked->Cus_name?> </li>
                                <li><strong>Payment Id</strong> <?php echo $Booked->Payment_id?> </li>
                                 <?php if ($Booked->Payment_id){?>
                                <li><strong>Payment status</strong> Paid</li>
                                <?php }else{?>
                                <li><strong>Payment status</strong> Not Paid</li>
                                <?php }?>
                                <li><strong>Address:</strong><?php echo $Booked->address?></li>
                                <!-- <li><strong>Property Price :</strong> $ 750 </li>
                                <li><strong>Built Year :</strong> 2018 </li>
                                <li><strong>Avaiable from :</strong> Aug 2019 </li> -->
                            </ul>
                        </div>
                        <?php endforeach; ?>
                        <?php endif;?>
                        <a href="<?= base_url('Customer_controller/index2')?>"><button class="btn btn-style btn-primary">Book more</button></a>
                    </div>

                    

                    
                </div>
            </div>
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                
            </div>
        </div>
    </div>
</section>
<!--//blog-posts-->
 
            
<!--//blog-posts-->
 <!-- footers 20 -->


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
<script src="<?= base_url('')?>assets/customer/js/owl.carousel.js"></script>
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