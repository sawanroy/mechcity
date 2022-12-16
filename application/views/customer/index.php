
<!doctype html>
<html lang="en">
  <head>
  
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title> Home | Mechcity</title>

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <!-- Template CSS -->
    <link rel="stylesheet" href="<?=base_url('assets/customer/css/style-starter.css')?>">

    <style>
.grid-container23 {
  display: grid;
  grid-template-columns: auto auto auto auto;
  grid-gap: 10px;
  background-color:  #13171b;
  padding: 0px;
}

.grid-container23 > div {
  background-color: #12171b;
  border: 1px ; 
  text-align: center;
  font-size: 20px;
}


.btn-primary23 {
  color: #339327;
  background-color: #339327;
  border-color: #339327; 
}
  .btn-primary23:hover {
    color: #339327;
    background-color: #339327;
    border-color: #4bc53b; }
  .btn-primary23:focus, .btn-primary.focus {
    color: #212529;
    background-color: #339327;
    border-color: #339327;
    box-shadow: 0 0 0 0.2rem rgba(222, 136, 50, 0.5); }
  .btn-primary23.disabled, .btn-primary:disabled {
    color: #212529;
    background-color: #f93;
    border-color: #f93; }
  .btn-primary23:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
  .show > .btn-primary.dropdown-toggle {
    color: #212529;
    background-color: #ff8000;
    border-color: #f27900; }
    .btn-primary23:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
      box-shadow: 0 0 0 0.2rem rgba(222, 136, 50, 0.5); }

</style>
  </head>
  <body onLoad="noBack();" onpageshow="if (event.persisted) noBack();" onUnload="">
<!--header-->
<?php include_once("header.php")?>
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about pt-5">
        <div class="container pt-lg-5 py-3">
        </div>
    </div>
</section>
<section class="w3l-cover-3">
		<div class="cover top-bottom">
			<div class="container"> 
				<div class="middle-section text-center">
					<div class="section-width">
						 <p>Pay Advance & Play</p> 
						<h2>Book Turfs Easily.</h2><br>
					
						<!-- <form action="#" class="w3l-cover-3-gd" method="GET"> -->
                        <?php echo form_open('Customer_controller/search',[ 'class'=>'w3l-cover-3-gd'])?>
                  <div>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp </div>
						<!-- <input type="search" name="text" placeholder="address" required> -->
                        <?php echo form_input(['type'=>'search', 'required'=>'required','name'=>'text', 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Enter Location'])?>
							
							<!--<button type="submit" class="btn-primary" >Search</button>-->
                              <?php  echo form_submit(['class'=>'btn btn-primary', 'type'=>'submit', 'value'=>'Search'])?>

						</form>
					</div>
					<section id="bottom" class="demo">
						<a href="#bottom"><span></span>Scroll</a>
					</section>
				</div>
			</div>
		</div>
	</section>
    <div>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</div>
    <!-- <h3 class="title-big">Select Sport</h3> -->
<section class="locations-1" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <div class="heading text-center mx-auto">
               
            </div>
            <!-- <div class="row pt-md-5 pt-4">
            <?php if(@count($c)): ?>
                      <?php foreach($c->result() as $user): ?>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-4">
                    <a href="<?= base_url('Customer_controller/single')?>">
                        <div class="box16">
                            <div class="rentext-listing-category"><span>Buy</span><span>Rent</span></div>
                            <img class="img-fluid" src="<?= $user->Upload_Image?>" alt="">
                            <div class="box-content">
                                <h3 class="title"><?php echo $user->Turf_Name?></h3>
                                <span class="post"><?php echo $user->address?></span>	

                            </div>
                        </div>
                    </a>
                </div>
                <?php endforeach; 
                         endif;?>
            </div>
        </div> -->
 
<!-- <div class="middle-section text-center"><h1>Select Sport</h1></div> -->

<!-- <p>A Grid Container consists of grid items arranged in columns and rows</p> -->

<div class="grid-container23">
<?php 
   $football= 'Football';
   $cricket= 'cricket';
   $esport= 'E-sport';
   $batmin= 'batminton';
   $snooker= 'Snooker';
   $table= 'table_tenis';
 ?>
  <div>
  <img class="img-fluid" src="<?= base_url('assets/customer/image2/Icons/4_11.png')?>" alt="">&nbsp<?= anchor("Customer_controller/cat_search_controller/{$football}",'Football')?> </div>
  &nbsp
 
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/Icons/4.66.png')?>" alt=""> &nbsp &nbsp<?= anchor("Customer_controller/cat_search_controller/{$cricket}",'&nbsp &nbspCricket')?></div>
  &nbsp

 
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/Icons/4.55.png')?>" alt=""> &nbsp<?= anchor("Customer_controller/cat_search_controller/{ $esport}",'E-sport')?></div>
  &nbsp
 
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/Icons/4.22.png')?>" alt="">&nbsp<?= anchor("Customer_controller/cat_search_controller/{$batmin}",'Badminton')?></div>
  &nbsp
  
  
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/Icons/4.33.png')?>" alt=""> &nbsp<?= anchor("Customer_controller/cat_search_controller/{$snooker}",'Snooker')?></div>
  &nbsp
 
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/Icons/4.44.png')?>" alt=""> <?= anchor("Customer_controller/cat_search_controller/{$table}",'TableTennis')?> </div>

  <!-- </div>
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/court.png')?>" alt="">&nbsp &nbsp Football1</div>
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/court.png')?>" alt="">&nbsp &nbsp Football2</div>
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/court.png')?>" alt="">&nbsp &nbsp Football3</div>  
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/court.png')?>" alt="">&nbsp &nbsp Football4</div>
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/court.png')?>" alt="">&nbsp &nbsp Football5</div>
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/court.png')?>" alt="">&nbsp &nbsp Football6</div>
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/court.png')?>" alt="">&nbsp &nbsp Football7</div>
  <div><img class="img-fluid" src="<?= base_url('assets/customer/image2/court.png')?>" alt="">&nbsp &nbsp Football8</div> -->

</div>
</section> 
<!-- <p>Direct child elements(s) of the grid container automatically becomes grid items.</p> -->
<!-- <section class="w3l-index3" id="about">
    <div class="midd-w3 pb-5">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="row">
                <div class="col-lg-5 pr-lg-0">
                    <div class="w3l-left-img">
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-0">
                    <div class="w3l-right-info">
                        <h6 class="title-small">Who we are</h6>
                        <h3 class="title-big">The experts in local and international property</h3>
                        <p class="mt-4">We have over 15 year experience, Over 20,000 people work for us in more than 70
                            countries all over the world. Learn more about our work!
                            Lorem ipsum vive dolor sit amet.
                        </p>
                        <p class="mt-3">Viverra feugiat. Pellen tesque libero ut justo,
                            ultrices in ligula. Semper at tempufddfel lorem ipsum.</p>
                        <ul class="w3l-right-book w3l-right-book-grid mt-md-5 mt-4">
                            <li><span class="fa fa-check" aria-hidden="true"></span>Outstanding property</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Social responsibility</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Get expert advice</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Group structure</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Specialist services</li>
                            <li><span class="fa fa-check" aria-hidden="true"></span>Vision & strategy</li>
                        </ul>
                        <a href="#services" class="btn btn-style btn-primary mt-4">Discover our services</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- /bottom-grids-->
<!-- <section class="w3l-bottom-grids py-5" id="steps">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-home"></span>
                    <h4><a href="#feature" class="title-head">Buy a home</a></h4>
                    <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci.</p>
                    <a href="#more" class="more">Read More <span class="fa fa-long-arrow-right"></span> </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-home"></span>
                    <h4><a href="#feature" class="title-head">Rent a home </a></h4>
                    <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci.</p>
                    <a href="#more" class="more">Read More <span class="fa fa-long-arrow-right"></span> </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box no-box-shadow">
                    <span class="fa fa-building-o"></span>
                    <h4><a href="#feature" class="title-head">See neighbourhoods</a></h4>
                    <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor amet ipsum primis in faucibus orci.</p>
                    <a href="#more" class="more">Read More <span class="fa fa-long-arrow-right"></span> </a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- //bottom-grids-->
<!-- <section class="locations-1 popular" id="locations">
    <div class="locations py-5">
        <div class="container py-lg-5 py-md-4">
            <div class="heading text-center mx-auto">
                <h6 class="title-small">Explore cities</h6>
                <h3 class="title-big">Popular Locations</h3>
            </div>
            <div class="row pt-5">
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#url">
                        <div class="box16">
                            <img class="img-fluid" src="<?= base_url('assets/customer/images/court.png')?>" alt="">
                            <div class="box-content">
                                <h3 class="title mb-1">Newyork</h3>
                                <span class="post">4 listings</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#url">
                        <div class="box16">
                            <img class="img-fluid" src="<?= base_url('assets/customer/images/p2.jpg')?>" alt="">
                            <div class="box-content">
                                <h3 class="title mb-1">California</h3>
                                <span class="post">4 listings</span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-md-0 pt-md-0 mt-sm-4 mt-3 pt-md-2">
                    <a href="#url">
                        <div class="box16">
                            <img class="img-fluid" src="<?= base_url('assets/customer/images/p3.jpg')?>" alt="">
                            <div class="box-content">
                                <h3 class="title mb-1">Las vegas</h3>
                                <span class="post">4 listings</span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-lg-0 pt-lg-0 mt-sm-4 mt-3 pt-md-2">
                    <a href="#url">
                        <div class="box16">
                            <img class="img-fluid" src="<?= base_url('assets/customer/images/p4.jpg')?>" alt="">
                            <div class="box-content">
                                <h3 class="title mb-1">Malaysia</h3>
                                <span class="post">4 listings</span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">
                    <a href="#url">
                        <div class="box16">
                            <img class="img-fluid" src="<?= base_url('assets/customer/images/p5.jpg')?>" alt="">
                            <div class="box-content">
                                <h3 class="title mb-1">Paris</h3>
                                <span class="post">4 listings</span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">
                    <a href="#url">
                        <div class="box16">
                            <img class="img-fluid" src="<?= base_url('assets/customer/images/p6.jpg')?>" alt="">
                            <div class="box-content">
                                <h3 class="title mb-1">New Jersy</h3>
                                <span class="post">4 listings</span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">
                    <a href="#url">
                        <div class="box16">
                            <img class="img-fluid" src="<?= base_url('assets/customer/images/p7.jpg')?>" alt="">
                            <div class="box-content">
                                <h3 class="title mb-1">France</h3>
                                <span class="post">4 listings</span>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-4 col-6 mt-sm-4 mt-3 pt-md-2">
                    <a href="#url">
                        <div class="box16">
                            <img class="img-fluid" src="<?= base_url('assets/customer/images/p8.jpg')?>" alt="">
                            <div class="box-content">
                                <h3 class="title mb-1">Newyork</h3>
                                <span class="post">4 listings</span>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="w3l-index3" id="about">
    <div class="midd-w3 py-5">
        <div class="container pb-lg-5 pb-md-4 pb-2">
            <div class="row">
                <div class="col-lg-5 pr-lg-0">
                    <div class="w3l-left-img1">
                    </div>
                </div>
                <div class="col-lg-7 pl-lg-0">
                    <div class="w3l-right-info">
                        <h6 class="title-small">Our clients</h6>
                        <div class="client-grid">
                            <div class="client-title">
                                <h3 class="title-big">We value client relationships</h3>
                            </div>
                            <div class="clients-info">
                                <h3 class="title-big">45,200</h3>
                                <p>Satisfied customers</p>
                            </div>
                        </div>

                        <div class="w3l-clients" id="testimonials">
                            <div id="owl-demo1" class="owl-carousel owl-theme mt-4 pt-2 mb-4">
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <div class="testi-des">
                                                <div class="peopl align-self">
                                                    <h4>John wilson</h4>
                                                    <p class="indentity">Communication executive</p>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <q>OMG! I cannot believe that I have got a property new private house after
                                                    getting villa. It was very comfortable. I can't say enough about Real Estate</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <div class="testi-des">
                                                <div class="peopl align-self">
                                                    <h4>Julia sakura</h4>
                                                    <p class="indentity">Digital Marketer</p>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <q>OMG! I cannot believe that I have got a property new private house after
                                                    getting villa. It was very comfortable. I can't say enough about Real Estate</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <div class="testi-des">
                                                <div class="peopl align-self">
                                                    <h4>John wilson</h4>
                                                    <p class="indentity">Web Developer</p>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <q>OMG! I cannot believe that I have got a property new private house after
                                                    getting villa. It was very comfortable. I can't say enough about Real Estate</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="testimonial-content">
                                        <div class="testimonial">
                                            <div class="testi-des">
                                                <div class="peopl align-self">
                                                    <h4>Julia sakura</h4>
                                                    <p class="indentity">Digital Marketer</p>
                                                </div>
                                            </div>
                                            <blockquote>
                                                <q>OMG! I cannot believe that I have got a property new private house after
                                                    getting villa. It was very comfortable. I can't say enough about Real Estate</q>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#agents" class="btn btn-style btn-primary mt-5">Contact our agents</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- /bottom-grids-->
<!-- <section class="w3l-bottom-grids py-5" id="steps">
    <div class="container py-lg-5 py-md-4 py-2">
        <div class="grids-area-hny main-cont-wthree-fea row">
            <div class="col-lg-4 col-md-6 grids-feature">
                <div class="area-box no-box-shadow text-left">
                    <span class="fa fa-search-plus"></span>
                    <h5>All in one place</h5>
                    <h4><a href="#feature" class="title-head">Your One-Stop Shop for Finding Your Dream Home</a></h4>
                    <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor in orci.</p>
                    <a href="#more" class="more">Search for home<span class="fa fa-long-arrow-right"></span> </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-md-0 mt-4">
                <div class="area-box no-box-shadow text-left">
                    <span class="fa fa-user-o"></span>
                    <h5>Connect to an agent</h5>
                    <h4><a href="#feature" class="title-head">Schedule a Free, No-Obligation Appointment</a></h4>
                    <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor in orci.</p>
                     <a href="#more" class="more">Find an agent <span class="fa fa-long-arrow-right"></span> </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 grids-feature mt-lg-0 mt-4">
                <div class="area-box no-box-shadow text-left">
                    <span class="fa fa-home"></span>
                    <h5>Get a home valuation</h5>
                    <h4><a href="#feature" class="title-head">Understand the Value of Your Property </a></h4>
                    <p>Vivamus a ligula quam. Ut blandit eu leo non. Duis sed dolor in orci.</p>
                    <a href="#more" class="more">Submit info <span class="fa fa-long-arrow-right"></span> </a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- //bottom-grids-->
<!--  News section -->
<!-- <div class="w3l-news" id="news">
    <section id="grids5-block" class="py-5">
        <div class="container py-lg-5 py-md-4 py-2">
            <h3 class="title-big text-center">Tips and Advices</h3>
            <div class="row mt-lg-5 mt-4 pt-3">
                <div class="col-lg-4 col-md-6 mt-md-0 mt-sm-4">
                    <div class="grids5-info">
                        <span class="posted-date">
                            <a href="#blog-single">
                                <span class="small">2020</span>
                                <span class="big">16</span>
                                <span class="small">October</span>
                            </a>
                        </span>
                        <a href="#blog-single" class="d-block zoom"><img src="<?= base_url('assets/customer/images/p1.jpg')?>" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <a href="#category" class="category">Uncategorized</a>
                            <h4><a href="#blog-single">Retail banks wake up to digital lending this year</a></h4>
                            <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-md-0 mt-5">
                    <div class="grids5-info">
                        <span class="posted-date">
                            <a href="#blog-single">
                                <span class="small">2020</span>
                                <span class="big">19</span>
                                <span class="small">October</span>
                            </a>
                        </span>
                        <a href="#blog-single" class="d-block zoom"><img src="<?= base_url('assets/customer/images/p2.jpg')?>" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <a href="#category" class="category">Uncategorized</a>
                            <h4><a href="#blog-single">A digital prescription for the pharma industry</a></h4>
                            <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-lg-0 mt-5">
                    <div class="grids5-info">
                        <span class="posted-date">
                            <a href="#blog-single">
                                <span class="small">2020</span>
                                <span class="big">20</span>
                                <span class="small">October</span>
                            </a>
                        </span>
                        <a href="#blog-single" class="d-block zoom"><img src="<?= base_url('assets/customer/images/p3.jpg')?>" alt=""
                                class="img-fluid news-image" /></a>
                        <div class="blog-info">
                            <a href="#category" class="category">Uncategorized</a>
                            <h4><a href="#blog-single">Harvest great ideas from your company’s best assets</a></h4>
                            <p>Lorem ipsum dolor sit amet ad minus libero ullam ipsam quas earum!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> -->
<!--  //News section -->
<!-- <section class="w3l-companies-hny-6 py-5"> -->
    <!-- /grids -->
        <!-- <div class="container py-md-3">
            <div class="row">
                <div class="col-lg-2 col-md-4 col-6 column">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="<?= base_url('assets/customer/images/client1.png')?>" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="<?= base_url('assets/customer/images/client2.png')?>" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column mt-md-0 mt-4">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="<?= base_url('assets/customer/images/client3.png')?>" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column mt-lg-0 mt-4">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="<?= base_url('assets/customer/images/client4.png')?>" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column mt-lg-0 mt-4">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="<?= base_url('assets/customer/images/client5.png')?>" alt="client"> </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 column mt-lg-0 mt-4">
                    <div class="company-gd">
                        <a href="#client"><img class="img-responsive" src="<?= base_url('assets/customer/images/client6.png')?>" alt="client"> </a>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- //grids -->
<!-- </section> -->
 <!-- footers 20 -->
 
          <!-- <div class="column mt-lg-0 mt-md-5">
            <h4 class="mb-1">Signup for newsletter</h4>
            <p>and get latest news and updates</p>
            <form action="#" class="subscribe-form mt-4" method="post">
              <div class="form-group">
                <input type="email" name="subscribe" placeholder="Enter your email" required="">
                <button class="btn btn-style btn-primary">Subscribe</button>
              </div>
            </form>
            <ul class="footers-17_social">
              <h4 class="d-inline mr-4">Follow us</h4>
              <li><a href="#url" class="twitter"><span class="fa fa-twitter"></span></a></li>
              <li><a href="#url" class="facebook"><span class="fa fa-facebook"></span></a></li>
              <li><a href="#url" class="linkedin"><span class="fa fa-linkedin"></span></a></li>
              <li><a href="#url" class="instagram"><span class="fa fa-instagram"></span></a></li>
            </ul>
          </div> -->
        </div>
        <div class="d-grid grid-col-3 grids-content1 bottom-border">
          <div class="columns copyright-grid align-self">
            <!-- <p class="copy-footer-29">© 2020 Estate sale. All rights reserved | Designed by <a
                href="https://w3layouts.com">W3layouts</a></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- splash -->
</div>
<script>
$(document).ready(function () {
    $('#splash').css('opacity', '0.5'); // doing this with jQuery for ease
    
// Stopping a loop
for ( var i = 0; i < 5000; i++ ) {      
    if ( i==5000 ) {
            // here are the basics, just like your existing code
    $("#splash").click(function () {
        $("#splash").fadeOut("slow"); // you could also use $(this).fadeOut('slow');
    }
}
                       
    });
});
</script>
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

<script src="<?=base_url('assets/customer/js/theme-change.js')?>"></script><!-- theme switch js (light and dark)-->

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