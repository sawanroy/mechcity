<!DOCTYPE html>
<html lang="en">
    <style>
        p{
            font-size: large;
}
a{
    color:  aliceblue;
}
        body{
            background-image: url(c.jpg);
}
    </style>
      <head>
        <meta charset="utf-8">
        <title> The Feedback System</title>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/login.css')?>"/>
        <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><?php ?></a>
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
 <button type="button" class="btn btn-outline-danger"><a href="<?= base_url('Login_controller/login_logout')?>"><font color="red">Logout </font></a></button>
  </div>
    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
 
</div>
  </div>
</nav>
<div class="container">
  <div class="col-lg-6">

<h3 class="card-header">Student name:  <?php echo $this->session->userdata('name','last') ?>
</h3>
<h3 class="card-header">Roll no.:   <?php echo $this->session->userdata('roll') ?>
</h3>
<h3 class="card-header">Semester:   <?php echo $this->session->userdata('semester') ?>
</h3>
<h3 class="card-header">Branch :   <?php echo $this->session->userdata('Branch') ?>
</h3>
<h3 class="card-header">
</h3>
</div>
</div>

<div class="container">
  <?php if( $error = $this->session->flashdata('login_failed')):?>
    <div class="row ">
      <div class="col-lg-6">
        <div class="alert alert-dismissible alert-success">
  <h4 class="alert-heading">Thank you !</h4>
  <?= $error ?>

</div>
      </div>
    </div>
    <?php endif;?>
        <div class="col-lg-4" style="float: left; margin-left: 100px;">
  <a href="<?= base_url('feedback_controller/con_feedback2')?>" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Sumbit Your Feedback</h5>
    </div>
    <p class="mb-1">Teachers </p>
  </a>
</div>
<div class="col-lg-4" style="float: right; margin-right: 100px;">
  <a href="<?= base_url('main_controller/infra')?>" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Sumbit Your Feedback</h5>
    </div>
    <p class="mb-1">College</p>
  </a>
</div>
</div>
s
    </body>
</html>