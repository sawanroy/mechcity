<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard |Moniter Turf </title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/production/vendors/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/production/vendors/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/production/vendors/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/production/vendors/iCheck/skins/flat/green.css') ?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/production/build/css/custom.min.css') ?>" rel="stylesheet">
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
                <h3>Moniter Turf </h3>
              </div>

              <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div> -->
            </div>
            
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <!-- <h2>Projects</h2> -->
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
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <!-- <p>Simple table with project listing with progress and editing options</p> -->

                    <!-- start project list -->
                    <table class="table table-striped projects">
                      <thead>
                        <tr>
                          <th style="width: 1%">#</th>
                          <th style="width: 20%">Turf Name</th>
                          <th>Time Slot</th>
                          <th>Price</th>
                          <!-- <th>Ground Type</th> -->
                          <th>Day</th>
                          <th>Status</th>
                          <th style="width: 20%">#Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php if(@count($c)): ?>
                      <?php foreach($c->result() as $user): ?>
                        <tr>
                          <td>#</td>
                          <td>
                            <a href="#" ><?php echo $user->Turf_name?></a>
                            <br />
                            <!-- <small>Created 01.01.2015</small> -->
                          </td>
                          <td>
                            <ul class="list-inline">
                              <li>
                              Start time <br>
                              <?php echo $user->start_time?>
                              </li>
                              <li>
                              End time <br>
                              <?php echo $user->End_time?>
                              </li>
                            </ul>
                          </td>
                          
                          <td>
                          <a><?php echo $user->price?></a>
                          </td>
                        
                          <!-- <td>
                            <a><?php echo $user->type?></a>
                            <br />
                            </td> -->
                            <td>
                            <a><?php echo $user->days?></a>
                            <br />   
                          </td>
                        
                          
                          <td> 
                         
                          <?php   if( ($user->status) == "Booked") {
                                    $url1=$user->sno;
                                ?>
                              <!-- <a href=""><button type="button" class="btn btn-danger btn-xs">Booked</button> </a> -->
                              <?= anchor("Production_controller/add_turf_status/{$url1}",'Booked',['class'=>'btn btn-danger btn-xs'])?>
                            <?php 
                              }
                            else{
                              $url1=$user->sno;
                              ?>
                              
                              <?= anchor("Production_controller/add_turf_status/{$url1}",'Avaliable',['class'=>'btn btn-success btn-xs'])?>
                              <?php } ?>
                          
                          </td>
                          <td>
                            <!-- <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a> -->
                            <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
                            <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
                          </td>
                          <td>
                          
                          </td>
                        </tr>
                        <?php 
                        endforeach; 
                         endif;  ?>
                        
                      </tbody>
                      
                    </table>
                    <!-- end project list -->

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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
    <!-- bootstrap-progressbar -->
    <script src="<?= base_url('assets/production/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')?>"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/production/build/js/custom.min.js')?>"></script>
  </body>
</html>