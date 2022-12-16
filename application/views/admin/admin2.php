<!DOCTYPE html">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blogging | website</title>
<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('main_controller/index')?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('main_controller/login')?>">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('main_controller/admin')?>">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
 
</div>
  </div>
</nav>
<div class="container">
<form <?php echo form_open('admin_controller/index') ?>>

  <fieldset>
    <legend>Login Form</legend>
    <?php if( $error = $this->session->flashdata('login_failed')):?>
    <div class="row ">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-danger">
  <h4 class="alert-heading">Warning!</h4>
  <?= $error ?>

</div>
      </div>
    </div>
    <?php endif;?>
<div class="col-lg-6">
        <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <?php echo form_input(['name'=>'username', 'class'=>'form-control','placeholder'=>'username','value'=>set_value('username')])?>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
       <?php echo form_input(['name'=>'password','type'=>'password', 'class'=>'form-control','placeholder'=>'password'])?>
      
    </div>
    </fieldset>
    <?php echo form_reset(['name'=>'reset','class'=>'btn btn-secoundry','value'=>'Reset']);
          echo form_submit(['name'=>'submit', 'class'=>'btn btn-primary','value'=>'Login']);
	  ?>
  </fieldset>
</form>
</div>
</div>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src ="<?= base_url('assets/js/bootstrap.min.js')?>"></script>

</body>
</html>
