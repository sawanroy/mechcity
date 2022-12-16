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

    <title>Turf Details</title>

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
<section class="w3l-breadcrumb">
    <!-- <div class="container">
        <ul class="breadcrumbs-custom-path">
            <li><a href="index.html">Home</a></li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> Property</li>
            <li class="active"><span class="fa fa-angle-right mx-2" aria-hidden="true"></span> property single</li>
        </ul>
    </div> -->
</section>
<!--/blog-post-->
  <?php if(@count($c)): ?>
  <?php foreach($c->result() as $user): ?>
<section class="w3l-blog post-content py-5">
    <div class="container py-lg-4 py-md-3 py-2">
        <div class="inner mb-4">
        
            <ul class="blog-single-author-date align-items-center">
                <!-- <li>
                    <div class="listing-category"><span>Buy</span><span>Rent</span></div>
                </li>
                <li><span class="fa fa-clock-o"></span> 5 months ago</li>
                <li><span class="fa fa-eye"></span> 250 views</li> -->
            </ul>
        </div>
        <div class="post-content">
            <h2 class="title-single"> <?= $user->Turf_Name?></h2>
        </div>
        <div class="blo-singl mb-4">
            <ul class="blog-single-author-date align-items-center">
               
            </ul>
            <ul class="share-post">
                <!-- <a href="#url" class="cost-estate m-o">$25,0045</a> -->
            </ul>
        </div>
        <div class="row">
            <div class="col-lg-8 w3l-news">
                <div class="blog-single-post">
                    <div class="single-post-image mb-5">
                        <div class="owl-blog owl-carousel owl-theme">
                            <div class="item">
                                <div >
                                    <img src="<?= $user->Upload_Image?>" class="img-fluid radius-image" alt="image">
                                </div>
                            </div>
                            <div class="item">
                                <div >
                                    <img src="<?= $user->Uploadimage2?>" class="img-fluid radius-image" alt="image">
                                </div>
                            </div>
                            <div class="item">
                                <div >
                                    <img src="<?= $user->Uploadimage3?>" class="img-fluid radius-image" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="single-post-content">
                         <li>
                             <h3 class="post-content-title mb-3">Address</h3>
                    <p><?= $user->address?></p>
                </li>
                &nbsp
                &nbsp
        
                        <h3 class="post-content-title mb-3">Description</h3>
                        <p class="mb-4">
                           <?= $user->Disciption ?> </p>
                    
                    <!--    <div class="single-bg-white">-->
                    <!--        <h3 class="post-content-title mb-4">Turf detail</h3>-->
                    <!--        <ul class="details-list">-->
                    <!--            <li><strong>Property id :</strong> PRPT12345 </li>-->
                    <!--            <li><strong>Property size :</strong> 1200sqft </li>-->
                    <!--            <li><strong>Rooms :</strong> 2 </li>-->
                    <!--            <li><strong>Bedrooms :</strong> 5 </li>-->
                    <!--            <li><strong>Bathrooms :</strong> 2 </li>-->
                    <!--            <li><strong>Exterior material :</strong> Brick </li>-->
                    <!--            <li><strong>Structure type :</strong> Wood </li>-->
                    <!--            <li><strong>Garage size :</strong> 15 cars </li>-->
                    <!--            <li><strong>Garages :</strong> 15 </li>-->
                    <!--            <li><strong>Property Price :</strong> $ 750 </li>-->
                    <!--            <li><strong>Built Year :</strong> 2018 </li>-->
                    <!--            <li><strong>Avaiable from :</strong> Aug 2019 </li>-->
                    <!--        </ul>-->
                    <!--    </div>-->
                        <!-- <div class="single-bg-white">
                            <h3 class="post-content-title mb-4">Amenities</h3>
                            <ul class="details-list">
                                <li><strong>Air Conditioning </strong></li>
                                <li><strong>Buil-In Wardrobes </strong> </li>
                                <li><strong>Dishwasher</strong> </li>
                                <li><strong>Floor Coverings </strong> </li>
                                <li><strong>Medical / Clinic </strong> </li>
                                <li><strong>Fencing</strong> </li>
                                <li><strong>Internet and wifi </strong> </li>
                            </ul>
                        </div> -->
                    </div>


                  
                </div>
            </div>
            <div class="sidebar-side col-lg-4 col-md-12 col-sm-12 mt-lg-0 mt-5">
                <aside class="sidebar">

                    <!-- Popular Post Widget-->
                    <!-- <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h4>Contact an Agent</h4>
                        </div>

                        <article class="post">
                            <figure class="post-thumb"><img src="assets/images/l5.jpg" class="radius-image" alt="">
                            </figure>
                            <div class="text mb-0"><a href="#blog-single">Company realty
                                </a>
                                <div class="post-info">+(12) 324 567 89</div>
                                <div class="post-info">companyrealty@mail.com</div>
                            </div>
                        </article>
                        <button type="submit" class="btn btn-primary btn-style w-100">Request details</button>
                    </div> -->

                    <?php endforeach; ?>
                        <?php endif;?>
                    <!-- Popular Post Widget-->
                    <div class="sidebar-widget popular-posts">
                        <div class="sidebar-title">
                            <h4>Date</h4>
                            <script>
  function day_of_week() {
    var weekday = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

    var d = document.getElementById('date_input').valueAsDate;
    var n = d.getDay()
    
    document.getElementById("output").value = weekday[n];
     
  }

</script>

<?php echo form_open_multipart('Customer_controller/date_picker',['data-parsley-validate class'=>'form-horizontal form-label-left'])?>
  <input type="date" placeholder="dd:mm:yy" id="date_input" name="date" />
  <input type="hidden" id="output"name="day" value='output'>
  <input type="hidden" id="output" name="Turf_name" value='<?= $user->Turf_Name?>'>
   <?php echo form_submit(['class'=>'btn btn-success','onclick'=>'day_of_week()', 'type'=>'submit', 'value'=>'show'])?>
</form>
<p id="output">

</p>
                           
                        </div>
                       <?php 
                              $copyYear = 2008; 
                              $curYear = date('Y'); 
                              $curmm = date('m');
                              $curday= date('d');
                              // echo $curYear;
                              // echo $curmm;
                              // echo $curday;
                             // echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
                        ?> 
                        <?php $date23 = strtotime("+7 day");
                                // $upyear= date('Y',$date23);
                                //   $upmon= date('m',$date23); 
                                  $update= date('Y-m-d',$date23); 
                                  // echo $update;                         ?>
                        <?php
                         $date1= $user_id=$this->session->userdata('date');
                          // echo $date1;
                          //  echo date("Y-m-d");
                        if(($date1 >= date("Y-m-d"))&&($date1 <= $update) ){ ?>
                        <div>&nbsp</div>
                        <?php if(@count($d)): ?>
                           <?php foreach($d->result() as $slots): ?>
                        <ul class="details-list">
                                <li><strong>Time Slots</strong></li>
                                <li><strong>Price</strong></li>
                                <li><strong>Status</strong></li>
                                <?php $date1 = $slots->start_time;
                                      $date2 = $slots->End_time;
                                        ?>
                                <li><strong><?= date('h a', strtotime($date1))?> - <?= date('h a', strtotime($date2))?></strong> </li>
                                <li><strong>Rs <?= $slots->price?>/- </strong> </li>
                                <?php $url1data=$slots->sno;
                                      $url_date= $date1;
                                ?>
                                <?php   if( ($slots->status) == "Booked") {
                                   // $url1=$user->sno;
                                ?>
                              <!-- <a href=""><button type="button" class="btn btn-danger btn-xs">Booked</button> </a> -->
                             
                              <li><button class="btn btn-danger btn-xs" onclick="showAlert()">Booked</button></li>
                              <script>
  function showAlert() {
    var myText = "Slot is booked ";
    alert (myText);
  }
  </script>
                            <?php 
                              }
                            else{
                             // $url1=$user->sno;
                              ?>
                              
                              <li><small> <?= anchor("Customer_controller/buyer_details_input/{$url1data}/{$url_date}",'Avaliable',['class'=>'btn btn-success btn-xs'])?></small></li>
                              <?php } ?>
                               
                            </ul>
                            <?php endforeach; ?>
                        <?php endif;?>
                        <?php }
                        else{?>
                          <ul class="details-list">
                          <li><strong>Select Date within 7days from today</strong></li>
                          </ul>

                       <?php }
                        ?>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</section>

            
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