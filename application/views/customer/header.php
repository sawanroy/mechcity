 <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-FFDK49SZXV"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-FFDK49SZXV');
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KMT8SZF');</script>
<!-- End Google Tag Manager -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KMT8SZF"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '195021658994142');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=195021658994142&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


<header id="site-header" class="fixed-top">
  <div class="container">
      <nav class="navbar navbar-expand-lg stroke px-0">
          <h1> <a class="navbar-brand" href="<?= base_url('Customer_controller/index2')?>">
          <img src="<?=base_url('assets/images/logo.jpeg')?>"> MECHCITY
              </a></h1>
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-lg-5 mr-auto">
                  <li class="nav-item active">
                      <a class="nav-link" href="<?= base_url('Customer_controller/index2')?>">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@listing__active">
                      <a class="nav-link" href="<?= base_url('Customer_controller/aboutus')?>">About us</a>
                  </li>
                 
                  <li class="nav-item @@listing__active">
                      <a class="nav-link" href="<?= base_url('Customer_controller/contact')?>">Contact us</a>
                  </li>
                
                  <li>
                      <li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</li>
                      <li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</li>
                      <li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</li>
                        <li>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</li>
                    
                  <div class="dropdown">
              <div class="top-quote mt-lg-0">
              <?php

                     $user_data = $this->session->userdata('user_data');
  
                 ?>

                        <button class="btn btn-primary dropdown-toggle"type="button" data-toggle="dropdown"><?php echo $user_data['first_name'] ." ".$user_data['last_name'] ?>
                        <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                        <!-- <li><a href="#">HTML</a></li> -->
                        <li><a href="<?= base_url('Customer_controller/payment_status')?>">My Bookings&nbsp | </a></li>
                        <li><a href="<?= base_url('Gmail_login_con/google_logout')?>">Logout</a></li>
                        </ul>
                    </div>
                    </div>
                     </li>
                
              </ul>
           
          </div>
            
    </div> 
   </nav>
  </div>
</header>
<!--/header-->