<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    
        <title>Add Turf | <?php echo $this->session->userdata('name') ?></title>
       
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
                    <?php echo form_open_multipart('Production_controller/edit_turf_show_update',['data-parsley-validate class'=>'form-horizontal form-label-left'])?>
                      <!-- <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span> -->
                      <?php if(@count($c)): ?>
                      <?php foreach($c->result() as $truf_detail): ?>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Turf name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="Full name" required="required" type="text"> -->
                          <?php echo form_input(['type'=>'text', 'required'=>'required','name'=>'Turf_Name','value'=>$truf_detail->Turf_Name, 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Turf Name'])?>
                        </div>
                      </div>

                     
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Select type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                      <?php  $days=array( $truf_detail->type=>'Select Type',
                                    'Football'=>'Football',
                                    'Cricket'=>'Cricket',
                                    'E-sport'=>'E-sport',
                                    'batminton'=>'batminton',
                                    'Snooker'=>'Snooker',
                                    'table_tenis'=>'table_tenis',);
                                    echo form_dropdown('type',$days,'','class="form-control"'); 
                                    ?>
                          
                          </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="number">Enter area <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="number" name="number" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12"> -->
                          <?php echo form_input(['type'=>'text', 'required'=>'required','name'=>'Select_area','value'=>$truf_detail->Select_area,'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Enter Area like  Thane, vashi, kalyan'])?>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website">address<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="text" id="website" name="website" required="required" placeholder="Enter address" class="form-control col-md-7 col-xs-12"> -->
                          <?php echo form_input(['type'=>'text', 'required'=>'required','name'=>'address','value'=>$truf_detail->address, 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Turf address'])?>
                        </div>
                      </div>
              
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Select city<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                      <?php  $days=array($truf_detail->city=>'Select city',
                                    'Mumbai'=>'Mumbai',);
                                    
                                    echo form_dropdown('city',$days,'','class="form-control"'); 
                                    ?>
                          
                          </div>
                      </div>
                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Select state<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                      <?php  $days=array($truf_detail->state=>'Select State',
                                    'Maharashtra'=>'Maharashtra',);
                                    
                                    echo form_dropdown('state',$days,'','class="form-control"'); 
                                    ?>
                          
                          </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Disciption <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <textarea id="textarea" required="required" name="textarea" class="form-control col-md-7 col-xs-12"></textarea> -->
                          <?php echo form_textarea(['type'=>'textarea', 'required'=>'required','name'=>'Disciption','value'=>$truf_detail->Disciption, 'class'=>'form-control col-md-7 col-xs-12', 'placeholder'=>'Disciption'])?>
                        </div>
                      </div>
                      <?php //$name=$this->session->userdata('user_id');
                                $data = [
                                  'name'      => 'truf_sno',
                                  'value'     => $truf_detail->sno,
                                  'maxlength' => '100',
                                  'type'=>'hidden',
                                  'class'=>'form-control col-md-7 col-xs-12'
                          ];
                          ?>
                          <?php echo form_input($data)?>
                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Upload Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <!-- <input type="file" id="telephone" name="phone" required="required" data-validate-length-range="8,20" class="form-control col-md-7 col-xs-12"> -->
                          <!-- <?php echo form_upload(['required'=>'required','name'=>'userfile1', 'class'=>'form-control col-md-7 col-xs-12'])?> -->
          
                          <input type="file" class="form-control" name="files[]" multiple/>

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
                          <?php echo form_submit(['class'=>'btn btn-success', 'type'=>'submit','name'=>'upload', 'value'=>'Submit'])?>
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
          <!-- <div class="pull-right">
            Projects by  <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div> -->
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