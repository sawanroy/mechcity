<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Feedback System </title>
   
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.min.css')?>">
     <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/login.css')?>">


    <style>
    marquee{
    font-size:200%;
    color: darkmagenta;
    }
    h2{
    font-size: 300%;
    color: darkblue;
    }
    ul{
        font-size:200%; 
    }
  </style>
  <style>
    .w3ls-banner {
    background: url(<?= base_url('assets/css/images/bg.jpg')?>) no-repeat;
  background-size: cover;
    min-height: 100vh;
    color: white;
  background-position:center;
  padding-top: 30px;  
}
  </style>
  </head>
  <body>
    
 <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="<?= base_url('assets/css/images/GGCTLOGO.png')?>" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo site_url('main_controller/index')?>">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('main_controller/register')?>">REGISTER</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('main_controller/login')?>">LOGIN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('main_controller/admin')?>">ADMIN</a>
      </li>
    </ul>
    
</nav>
<div class="w3ls-banner">
      <center><<h1><span style="font-size:90px; font-family: all; ";> Welcome The Feedback</span> <br>Management System</h1></center>


  <div class="container" style="float:none; margin-bottom: : 456px;" >
  <div class="col-lg-4"  style="float: left; margin-left: 100px;">
  <a href="<?= base_url('main_controller/login')?>" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">Login </h5>
    </div>
    <p class="mb-1">Already registered user </p>
  </a>
</div>
</div>
<div class="container">
<div class="col-lg-4" style="float: right; margin-right: 100px;">
  <a href="<?= base_url('main_controller/register')?>" class="list-group-item list-group-item-action flex-column align-items-start active">
    <div class="d-flex w-100 justify-content-between">
      <h5 class="mb-1">New Registeration</h5>
    </div>
    <p class="mb-1">Register your self</p>
  </a>
</div>
</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src ="<?= base_url('assets/js/bootstrap.min.js')?>"></script>
<bg background="<?= base_url('assets/css/images/bg.jpg')?>">
</body>
</html>