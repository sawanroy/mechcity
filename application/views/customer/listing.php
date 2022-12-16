<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mechcity|Search results</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/customer/css/style-starter.css')?>">
  </head>
  <body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
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
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Listing</li>
        </ul>
    </div>
</section> -->
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="row">
                
                      <?php if(@count($c)): ?>
                      <?php foreach($c->result() as $res): ?>
                      
                <div class="col-lg-4 col-md-6 listing-img">
					
                    <div class="listing-details blog-details align-self">
                        <h4 class="user_title agent">
                       
                           
                        </h4>
                        <!--<p class="user_position"><?php echo $res->Disciption?></p>-->
                        <ul class="mt-3 estate-info">
                            <!--<li><?php echo $res->address?> </li>-->
                            <li>  &nbsp </li>
                        </ul>
                        <div class="author align-items-center mt-4">
                            <a href="#img" class="comment-img">
                                <img src="<?= $res->Upload_Image?>" alt="" class="img-fluid">
                            </a>
                            <ul class="blog-meta">
                                <li>
                                     <?php $urldata=$res->Turf_Name;?>
                        <?= anchor("Customer_controller/type_select/{$urldata}",$res->Turf_Name,[''])?>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                     &nbsp  &nbsp  &nbsp
                </div>
				
                   <?php endforeach; ?>
                  <?php if(@$res->Turf_Name==null){?>
                  <div class="container"> 
				<div class="middle-section text-center">
					<div class="section-width">
						<!-- <p>It's great to time PLay!</p> -->
						<h2>NO RESULTS FOUND</h2>
						</div>
						</div>
						</div>
                      <!--<center><img src="<?= base_url('assets/customer/images/no_result.png')?>" alt="Girl in a jacket" ></center>-->
                      <?php }?>
                        <?php endif;?>
                        
                     
            
            </div> 

            <!-- pagination -->
            <!--<div class="pagination-wrapper mt-5 pt-lg-3 text-center">-->
            <!--    <ul class="page-pagination">-->
            <!--        <li><span aria-current="page" class="page-numbers current">1</span></li>-->
            <!--        <li><a class="page-numbers" href="#url">2</a></li>-->
            <!--        <li><a class="page-numbers" href="#url">3</a></li>-->
            <!--        <li><a class="page-numbers" href="#url">...</a></li>-->
            <!--        <li><a class="page-numbers" href="#url">15</a></li>-->
            <!--        <li><a class="next" href="#url">Next <span class="fa fa-angle-right"></span></a></li>-->
            <!--    </ul>-->
            <!--</div>-->
            <!-- //pagination -->
        </div>
    
</section>
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