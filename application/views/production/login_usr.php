<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> Login Details</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets//production/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets//production/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets//production/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
   <link href="<?= base_url('assets//production/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets//production/build/css/custom.min.css')?>" rel="stylesheet">
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
                <h3>Tables <small>Some examples to get you started</small></h3>
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
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Login Details <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                     
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                         
                        </ul>
                      </li>
                      
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Login ID</th>
                          <th>Password</th>
                         
                        </tr>
                      </thead>
                      <tbody>
                          <?php if(@count($c)): ?>
                              <?php foreach($c->result() as $user): ?>
                        <tr>
                          <th scope="row">1</th>
                          <td><?php echo  $user->user_id ?></td>
                          <td><?php echo  $user->Password?></td>
                          
                        </tr>
              <?php  endforeach;?>
                                 <?php endif;?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

             
              
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <!--<div class="pull-right">-->
          <!--  Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>-->
          <!--</div>-->
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url('assets//productionvendors/jquery/dist/jquery.min.js')?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets//production/vendors/bootstrap/dist/js/bootstrap.min.js')?>/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url('assets//production/vendors/fastclick/lib/fastclick.js')?>"></script>
    <!-- NProgress -->
    <script src="<?= base_url('assets//production/vendors/nprogress/nprogress.js')?>"></script>
    <!-- iCheck -->
    <script src="<?= base_url('assets/production/vendors/iCheck/icheck.min.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets//production/build/js/custom.min.js')?>"></script>
  </body>
</html>