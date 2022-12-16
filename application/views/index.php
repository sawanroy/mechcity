<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Mechcity truf Login</title>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Style -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css')?>" type="text/css" media="all" />
</head>

<body>
	<!-- login form -->
	<section class="w3l-login">
		<div class="overlay">
			<div class="wrapper">
				<!-- <div class="logo">
					<a class="brand-logo" href="index.html">Snow login form</a>
				</div> -->
				  
				<div class="form-section">
					<h3>Login</h3>
					<h6>To continue with Us</h6>
					<?php if( $error = $this->session->flashdata('login_failed')):?>
    <div class="row ">
      <div class="col-lg-9">
        <div class="alert alert-dismissible alert-danger">
  <h4 class="alert-heading">Warning!</h4>
  <?= $error ?>

</div>
      </div>
    </div>
    <?php endif;?>
					<?php echo form_open('Login_controller/index',['accept-charset'=>'UTE-8','role'=>'form', 'class'=>'"signin-form'])?>
					<!-- <form action="#" method="post" class="signin-form"> -->
						<div class="form-input">
							<!-- <input type="text" name="Username" placeholder="Username" required="" autofocus> -->
							<?php echo form_input(['type'=>'text', 'name'=>'username', 'class'=>'form-control', 'placeholder'=>'username'])?>
							<?php echo form_error('username',"<p class='text-danger'>","</p>")?>
						</div>
						<div class="form-input">
							<!-- <input type="password" name="password" placeholder="Password" required=""> -->
							<?php echo form_input(['type'=>'password', 'name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password'])?>
							<?php echo form_error('password',"<p class='text-danger'>","</p>")?>
						</div>
						<label class="check-remaind">
							<input type="checkbox">
							<span class="checkmark"></span>
							<p class="remember">Remember me</p>
						</label>
						<?php echo form_submit(['class'=>'btn btn-primary theme-button mt-4', 'type'=>'submit', 'value'=>'Log in'])?>
						<!-- <button type="submit" class="btn btn-primary theme-button mt-4">Log in</button> -->
						<div class="new-signup">
							<a href="#reload" class="signuplink">Forgot username or password?</a>
						</div>
					</form>
					<!-- <p class="signup">Don’t have account yet? <a href="#signup.html" class="signuplink">Sign Up</a></p> -->
				</div>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>

		<!-- copyright -->
		<!-- <div class="copy-right">
			<p>&copy; 2020 Snow Login Form. All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3Layouts</a></p>
		</div> -->
		<!-- //copyright -->
	</section>

	<!-- /login form -->
</body>

</html>