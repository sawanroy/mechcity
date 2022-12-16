<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>Feedback system</title>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/login.css')?>">
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
 
</div>
  </div>
</nav>


<!--header-->
<?php echo form_open('main_controller/feedback');?>
<div class="container" >
  <div class="col-lg-8">

  <fieldset>
    <legend>Submit yor Feedback</legend>
    	<h3 class="card-header">Semester:
</h3>
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

                                  echo form_dropdown('semester',$Semester,'','class="form-control"');

								?>
  
    <h3 class="card-header">Branch:
</h3>
       <?php 
                              

                                                  $Branch=array(

                                                  '' =>'Select Branch',
                                                  'Computer Science Engineering'=>'Computer Science Engineering',
                                                  'Electrical Engineering'=>'Electrical Engineering',
                                                  'Electrical And Electronics Engineering'=>'Electrical And Electronics Engineering',
                                                  'Civil Engineering'=>'Civil Engineering',
                                                  'Mechnical Engineering'=>'Mechnical Engineering',
                                                  'Information Technology'=>'Information Technology',
                                                  'Electronic and communication'=>'Electronic and communication' 
                                                
                                                );

                                   echo form_dropdown('branch',$Branch,'','class="form-control"');

                ?>    
                
   
                <div container>
    <?php echo form_reset(['name'=>'reset','class'=>'btn btn-secoundry','value'=>'Reset']);
          echo form_submit(['name'=>'submit', 'class'=>'btn btn-primary','value'=>'Submit']);
  ?>
</div>
</div>
</div>
</body>
</html>