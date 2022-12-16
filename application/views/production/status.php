<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  
    <title> Input detials </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/production/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/production/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/production/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/production/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?= base_url('assets/production/vendors/google-code-prettify/bin/prettify.min.css')?>" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?= base_url('assets/production/vendors/select2/dist/css/select2.min.cs')?>s" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?= base_url('assets/production/vendors/switchery/dist/switchery.min.css')?>" rel="stylesheet">
    <!-- starrr -->
    <link href="<?= base_url('assets/production/vendors/starrr/dist/starrr.css')?>" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="<?= base_url('assets/production/vendors/bootstrap-daterangepicker/daterangepicker.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/production/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>MechCity</span></a>
            </div>

            <div class="clearfix"></div>

           
          </div>
        </div>


        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>update the Status </h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div> -->
                </div>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>persional details </h2> -->
                    <!-- <ul class="nav navbar-right panel_toolbox">
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
                    </ul> -->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content"> 
                    <br />
                    <!-- <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left"> -->
                    <?php echo form_open('Production_controller/update_status',['data-parsley-validate class'=>'form-horizontal form-label-left'])?>
                   
                    <?php if(@count($c)): ?>
                      <?php foreach($c->result() as $user): ?>
                        <?php //$name=$this->session->userdata('user_id');
                                $data = [
                                  'name'      => 'Turf_sno',
                                  'value'     => $user->sno,
                                  'maxlength' => '100',
                                  'type'=>'hidden',
                                  'class'=>'form-control col-md-7 col-xs-12'
                          ];
                          ?>
                          <?php echo form_input($data)?>
                        <?php endforeach; ?>
                        <?php endif;?>
                          <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> -->
                      
                        <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">USER_ID<span class="required">*</span>
                        </label> -->
                       
                          <!-- <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12"> -->
                         
                         

                      <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Current Status<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">

                      <?php  $days=array(''=>'Status',
                                    'Available'=>'Available',
                                    'Booked'=>'Booked',
                                   
                                    );
                                    echo form_dropdown('Status',$days,'','class="form-control"'); 
                                    ?>
                          
                          </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <!-- <button class="btn btn-primary" type="button">Cancel</button> -->
						              <!-- <button class="btn btn-primary" type="reset">Reset</button> -->
                          <!-- <button type="submit" class="btn btn-success">Submit</button> -->
                          <?php echo form_submit(['class'=>'btn btn-success', 'type'=>'submit', 'value'=>'Submit'])?>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            
        <!-- footer content -->
        <footer>
          <!-- <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('assets/production/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/production/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?= base_url('assets/production/vendors/moment/min/moment.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/bootstrap-daterangepicker/daterangepicker.js')?>"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="<?= base_url('assets/production/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/jquery.hotkeys/jquery.hotkeys.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/google-code-prettify/src/prettify.js')?>"></script>
    <!-- jQuery Tags Input -->
    <script src="<?= base_url('assets/production/vendors/jquery.tagsinput/src/jquery.tagsinput.js')?>"></script>
    <!-- Switchery -->
    <script src="<?= base_url('assets/production/vendors/switchery/dist/switchery.min.js')?>"></script>
    <!-- Select2 -->
    <script src="<?= base_url('assets/production/vendors/select2/dist/js/select2.full.min.js')?>"></script>
    <!-- Parsley -->
    <script src="<?= base_url('assets/production/vendors/parsleyjs/dist/parsley.min.js')?>"></script>
    <!-- Autosize -->
    <script src="<?= base_url('assets/production/vendors/autosize/dist/autosize.min.js')?>"></script>
    <!-- jQuery autocomplete -->
    <script src="<?= base_url('assets/production/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js')?>"></script>
    <!-- starrr -->
    <script src="<?= base_url('assets/production/vendors/starrr/dist/starrr.js')?>"></script>
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/production/build/js/custom.min.js')?>"></script>
	
  </body>
</html>
