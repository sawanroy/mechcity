<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel | Feedback System | Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="<?= base_url('assets/css/bootstrap.min.css')?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?= base_url('assets/admin/css/style.css')?>" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="<?= base_url('assets/admin/css/morris.css')?>" type="text/css"/>
<!-- Graph CSS -->
<link href="<?= base_url('assets/admin/css/font-awesome.css')?>" rel="stylesheet"> 
<!-- jQuery -->
<script src="<?= base_url('assets/admin/js/jquery-2.1.4.min.js')?>"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?= base_url('assets/admin/css/icon-font.min.css')?>" type='text/css' />
<!-- //lined-icons -->
</head>
<body>
	<!--header-->
	<div class="header-main">
					
						<div class="profile_details w3l" style="float: right; margin-right: 100px;">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p>System </p>
													<span>Administrator</span>
												</div>
									<li> <a href="<?= base_url('main_controller/admin');?>" class="btn btn-danger">Logout</a> </li>	
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
				<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="container" >
<div class="col-lg-6" style="float: left; margin-left: 100px;">
<div class="inner-block">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">S no.</th>
      <th scope="col">Roll no.</th>
      <th scope="col">firstname</th>
      <th scope="col">lastname</th>
      <th scope="col">semester</th>
      <th scope="col">branch</th>
      <th scope="col">email</th>
      <th scope="col">mobile_number</th>
      <th scope="col">gender</th>
      <th scope="col">Date of birth</th>
    </tr>
  </thead>
  <tbody>
    <tr class="table-primary">
    	<?php if(count($d)): ?>
      <?php foreach($d->result() as $reg): ?>

      <td><?php echo $reg->sno?></td>
      <td><?php echo $reg->roll?></td>
      <td><?php echo $reg->firstname?></td>
      <td><?php echo $reg->lastname?></td>
      <td><?php echo $reg->semester?></td>
      <td><?php echo $reg->branch?></td>
      <td><?php echo $reg->email?></td>
      <td><?php echo $reg->mobile_number?></td>
      <td><?php echo $reg->gender?></td>
      <td><?php echo $reg->dob?></td>
    </tr>
   <?php  endforeach;?>
      <?php endif;?>
  </tbody>
</table> 

</div>
</div>
</div>
<!--inner block end here-->
<!--copy rights start here-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="<?= base_url('admin_controller/faculty_feedback');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Faculty feedback</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/infras_feedback');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Infrastucture feedback</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/list_subject');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Subjects</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/list_teacher');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>List of Facalties</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/reg_student');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Registerd students</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/add_teacher');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>ADD Faculty</span><div class="clearfix"></div></a></li>
										<li><a href="<?= base_url('admin_controller/add_subject');?>"><i class="fa fa-picture-o" aria-hidden="true"></i><span>ADD Subject</span><div class="clearfix"></div></a></li>
										
								  </ul>
								</div>
							  </div>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="<?= base_url('assets/admin/js/jquery.nicescroll.js')?>"></script>
<script src="<?= base_url('assets/admin/js/scripts.js')?>"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="<?= base_url('assets/admin/js/bootstrap.min.js')?>"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="<?= base_url('assets/admin/js/raphael-min.js')?>"></script>
<script src="<?= base_url('assets/admin/js/morris.js')?>"></script>
</body>
</html>