<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>Register| page</title>
	<meta name="keywords" content="General Application Form Responsive widget, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/css/register/style.css')?>" type="text/css" media="all">
	
	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

</head>
<body>
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Sign up Form</h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter Your Details</h2>
			</div>
			<div class="agile-form">
				<?php echo form_open('Reg_controller/index')?>
					<ul class="field-list">
						<li class="name">
							<label class="form-label"> Name <span class="form-required"> * </span></label>
							<div class="form-input add">
								<span class="form-sub-label">
									<?php echo form_input(['name'=>'firstname','placeholder'=>'firstname'])?>
								</span>
								<span class="form-sub-label">
									<?php echo form_input(['name'=>'lastname','placeholder'=>'lastname'])?>
									
								</span>
							</div>
						</li>
						<li> 
							<label class="form-label"> E-Mail Address <span class="form-required"> * </span></label>
							<div class="form-input">
								<?php echo form_input(['type'=>'email','name'=>'email','placeholder'=>'Mail@example.com'])?>
							
							</div>
						</li>
						<li> 
							<label class="form-label"> Phone Number <span class="form-required"> * </span></label>
							<div class="form-input">
								<?php echo form_input(['name'=>'mobile_number','placeholder'=>'Phone Number'])?>
							</div>
						</li>
						<li>
							<label class="form-label"> Gender <span class="form-required"> * </span></label>
							<div class="form-input">
								<?php 
                             $option = array(    
                             	                  ''=>'Gender',
                             	                 'Male' => 'Male',
                             	                 'Female' =>'Female'
                                             );
                             echo form_dropdown('Gender',$option,'Gender');
								?>
							</div>
						</li>
						<li>
							<label class="form-label"> branch <span class="form-required"> * </span></label>
							<div class="form-input">
								<?php 
                                   $branch=array(

                                                  '' =>'Select Branch',
                                                  'Computer Science Engineering'=>'Computer Science Engineering',
                                                  'Electrical Engineering'=>'Electrical Engineering',
                                                  'Electrical And Electronics Engineering'=>'Electrical And Electronics Engineering',
                                                  'Civil Engineering'=>'Civil Engineering',
                                                  'Mechnical Engineering'=>'Mechnical Engineering',
                                                  'Information Technology'=>'Information Technology',
                                                  'Electronic and communication'=>'Electronic and communication' 
                                                
                                                );
                                  echo form_dropdown('branch',$branch);

								?>
							</div>
						</li>
						<li>
							<label class="form-label"> Semester <span class="form-required"> * </span></label>
							<div class="form-input">
								<?php 
                                   $Semester=array(

                                  	                      '' =>'Select Semester',
                                  	              '1st Semester'=>'1st Semester',
                                  	              '2nd Semester'=>'2nd Semester',
                                  	              '3rd Semester'=>'3rd Semester',
                                  	              '4th Semester'=>'4th Semester',
                                  	              '5th Semester'=>'5th Semester',
                                  	              '6th Semester'=>'6th Semester',
                                  	              '7th Semester'=>'7th Semester',
                                  	              '8th Semester'=>'8th Semester' 
                                                  );
                                  echo form_dropdown('Semester',$Semester);

								?>
							</div>
						</li>
						<li> 
							<label class="form-label"> Roll No. <span class="form-required"> * </span></label>
							<div class="form-input">
								<?php echo form_input(['type'=>'text','name'=>'roll','placeholder'=>'Roll Number'])?>
							
							</div>
						</li>
						<li> 
							<label class="form-label"> Date Of Birth<span class="form-required"> * </span></label>
							<div class="form-input">
								<?php echo form_input(['type'=>'Date','name'=>'dob','placeholder'=>'DD/MM/YYYY']) ?>
							</div>
						</li>
					<div class="submit_btn">
						<?php echo form_submit(['type'=>'submit','value'=>'submit']);?>
					</div>
				</form>	
			</div>
		</div>
	</div>
</body>
</html>