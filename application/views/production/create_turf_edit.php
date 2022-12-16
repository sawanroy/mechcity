<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
        <title>Create slots | <?php echo $this->session->userdata('name') ?></title>
       
 <!-- Bootstrap -->
 <link href="<?= base_url('assets/production/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/production/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/production/vendors/nprogress/nprogress.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/production/build/css/custom.min.css')?>" rel="stylesheet">
    
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/production/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->

    <link href="<?= base_url('assets/production/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include_once("sidebar.php");?>

        <!-- top navigation -->
        <?php include_once("navigation.php")?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Edit Turf details</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Form validation <small>sub title</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div> -->
                  </div>
                  <div class="x_content">

                    <!-- <form class="form-horizontal form-label-left" novalidate> -->
                    <?php echo form_open_multipart('Production_controller/edit_insert_time_slots',['data-parsley-validate class'=>'form-horizontal form-label-left'])?>
                      <!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span> -->
                   
                      <?php if(@count($c)): ?>
                      <?php foreach($c->result() as $slots): ?>
                     
                      						<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">start time <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="time" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"> -->
                          <?php echo form_input(['type'=>'time', 'required'=>'required','name'=>'start_time', 'value'=>$slots->start_time, 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Turf address'])?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">End time<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="time" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"> -->
                          <?php echo form_input(['type'=>'time', 'required'=>'required','name'=>'End_time', 'value'=>$slots->End_time,'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Turf address'])?>
                        </div>
                      </div>
                          
                          <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Select Day<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                      <?php  $days=array( $slots->days=>'Select Day',
                                    'Monday'=>'Monday',
                                    'Tuesday'=>'Tuesday',
                                    'Wednesday'=>'Wednesday',
                                    'Thursday'=>'Thursday',
                                    'Friday'=>'Friday',
                                    'Saturday'=>'Saturday',
                                    'Sunday'=>'Sunday',);
                                    echo form_dropdown('days',$days,'','class="form-control"'); 
                                    ?>
                          
                          </div>

                      </div>
                      <?php //$name=$this->session->userdata('user_id');
                                $data = [
                                  'name'      => 'time_sno',
                                  'value'     => $slots->sno,
                                  'maxlength' => '100',
                                  'type'=>'hidden',
                                  'class'=>'form-control col-md-7 col-xs-12'
                          ];
                          ?>
                          <?php echo form_input($data)?>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation">Price <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12"> -->
                          <?php echo form_input(['type'=>'number', 'required'=>'required','name'=>'price','value'=>$slots->price, 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Price'])?>
                        </div>
                      </div>
                          <?php 
                        endforeach; 
                         endif;  ?>
                     <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <!-- <button id="send" type="submit" class="btn btn-success">Submit</button> -->
                          <?php echo form_submit(['class'=>'btn btn-success', 'type'=>'submit', 'value'=>'Submit'])?>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Projects by  <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets/production/vendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/production/vendors/bootstrap/dist/js/bootstrap.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets/production/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets/production/vendors/nprogress/nprogress.js')?>"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?= base_url('assets/production/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js')?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/production/build/js/custom.min.js')?>"></script>
    <script src="<?= base_url('assets/production//vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')?>"></script>
	
  </body>
</html>