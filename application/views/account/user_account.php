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
</nav>>  


<!--header-->
<?php echo form_open('feedback_controller/index');?>
<div class="container" >
  <div class="col-lg-8">

  <fieldset>
    <legend>Submit yor Feedback</legend> 	
    <div class="form-group">
      <?php if(count($h)): ?>                   
    <h3 class="card-header">Subjects:
</h3>
      
      <select class="form-control" id="subject" name="subject">
        <option>Select subject</option>
        <?php foreach($h->result() as $list): ?>
         <option value="<?= $list->sname?>"><?php echo $list->sname?></option>
      <?php  endforeach;?>
      <?php endif;?>
      </select>
    </div>
  
  
    <div class="form-group">
      <h3 class="card-header">Faculty names:
</h3>
      <select class="form-control" id="teacher" name="teacher">
      <option>Select</option>
      <?php foreach($n->result() as $tech): ?>
        <option value="<?= $tech->name ?>" name="teacher"><?php echo $tech->name ?></option>
        <?php  endforeach; ?>
      </select>
      </div>
    </fieldset>
    <div class="container">
      <h3 class="card-header">Teaching skill for understanding the subject:
</h3>
   <?php 
                                  $Teaching_skill=array(

                                                 '' =>'Select',
                                                  'very poor'=>'very poor',
                                                  'below average'=>'below average',
                                                  'average'=>'average',
                                                  'good'=>'good',
                                                  'exellent'=>'exellent', 
                                                  );

                                  echo form_dropdown('Teaching_skill',$Teaching_skill,'','class="form-control"');

                ?>
     
      <h3 class="card-header">Class management discipline and obedience:
</h3>
  <?php 
                                  $Class_management=array(
'' =>'Select',
                                                  '' =>'Select',
                                                  'very poor'=>'very poor',
                                                  'below average'=>'below average',
                                                  'average'=>'average',
                                                  'good'=>'good',
                                                  'exellent'=>'exellent', 
                                                  );
                                  echo form_dropdown('Class_management',$Class_management,'','class="form-control"');

                ?>
      <h3 class="card-header">Clarification of doubts and help in design or in solving numerical:

</h3>
  <?php 
                                  $Clarification_of_doubts=array(

                                                  '' =>'Select',
                                                  'very poor'=>'very poor',
                                                  'below average'=>'below average',
                                                  'average'=>'average',
                                                  'good'=>'good',
                                                  'exellent'=>'exellent', 
                                                  );

                                  echo form_dropdown('Clarification_of_doubts',$Clarification_of_doubts,'','class="form-control"');

                ?>
                 <h3 class="card-header">Guidance in design/development of setups in lab works and help in performing practical:
</h3>
  <?php 
                                  $Guidance=array(

                                                 '' =>'Select',
                                                  'very poor'=>'very poor',
                                                  'below average'=>'below average',
                                                  'average'=>'average',
                                                  'good'=>'good',
                                                  'exellent'=>'exellent', 
                                                  );

                                  echo form_dropdown('Guidance',$Guidance,'','class="form-control"');

                ?>
      <h3 class="card-header">Regularity in taking class:

</h3>
 <?php 
                                  $Regularity=array(

                                                  '' =>'Select',
                                                  'very poor'=>'very poor',
                                                  'below average'=>'below average',
                                                  'average'=>'average',
                                                  'good'=>'good',
                                                  'exellent'=>'exellent', 
                                                  );

                                  echo form_dropdown('Regularity',$Regularity,'','class="form-control"');

                ?>
                <h3 class="card-header">Comments :
</h3>
  <?php echo form_textarea(['name'=>'additional', 'class'=>'form-control','placeholder'=>'additional comments'])?>
                <div container>
    <?php echo form_reset(['name'=>'reset','class'=>'btn btn-secoundry','value'=>'Reset']);
          echo form_submit(['name'=>'submit', 'class'=>'btn btn-primary','value'=>'Submit']);
  ?>
</div>
</div>
</div>
</body>
</html>