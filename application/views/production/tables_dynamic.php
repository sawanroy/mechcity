<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard</title>

    <!-- Bootstrap -->
    <link href="<?= base_url('assets/production/vendors/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url('assets/production/vendors/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url('assets/production/vendors/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?= base_url('assets/production/vendors/iCheck/skins/flat/green.css')?>" rel="stylesheet">
    <!-- Datatables -->
    <link href="<?= base_url('assets/production/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/production/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/production/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/production/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= base_url('assets/production/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url('assets/production/build/css/custom.min.css')?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
      <?php include_once("sidebar.php");?>

<!-- top navigation -->
<?php include_once("navigation.php")?>
<!-- /top navigation -->

<!-- page content -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Dashboard </h3>
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
                    <h2>Online Booked Turf</h2>
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
                    <!-- <p class="text-muted font-13 m-b-30">
                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
                    </p> -->
                     <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Turf Name</th>
                          <th>E-mail</th>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Time Slot</th>
                          <th>Date</th>
                          <th>Price</th>
                          <th>Payment status</th>
                        </tr>
                      </thead>
                      <?php if(@count($a)): ?>
                    <?php foreach($a->result() as $Booked): ?>
                      <tbody>
                        <tr>
                          <td><?= $Booked->Turf_Name?></td>
                          <td><?= $Booked->Cus_email ?></td>
                          <td><?= $Booked->Cus_name ?></td>
                          <td><?= $Booked->type?></td>
                          <td><?php echo date('h:i a', strtotime($Booked->start_time))?>&nbsp - &nbsp <?php echo date('h:i a', strtotime($Booked->End_time))?></td>
                          <td><?= $Booked->date?></td>
                          <td><?= $Booked->price?></td>
                          <?php if($Booked->Payment_id){ ?>
                            <td>Paid</td>
                          <?php }else{ ?>
                            <td>Not paid </td>
                          <?php } ?>

                        </tr>
                      
                      </tbody>
                      <?php 
                        endforeach; 
                         endif;  ?>
                    </table>
                  </div>
                </div>
              </div>
             </div>
              
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <!-- <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div> -->
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
    <!-- iCheck -->
    <script src="<?= base_url('assets/production/vendors/iCheck/icheck.min.js')?>"></script>
    <!-- Datatables -->
    <script src="<?= base_url('assets/production/vendors/datatables.net/js/jquery.dataTables.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-buttons/js/buttons.flash.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-buttons/js/buttons.html5.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-buttons/js/buttons.print.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/jszip/dist/jszip.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/pdfmake/build/pdfmake.min.js')?>"></script>
    <script src="<?= base_url('assets/production/vendors/pdfmake/build/vfs_fonts.js')?>"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url('assets/production/build/js/custom.min.js')?>"></script>

  </body>
</html>