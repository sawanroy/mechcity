    </!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
    <title>Feedback System </title>
        <title></title>
    </head>
    <body> 
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/parallax.css')?>">
 <script src="<?= base_url('assets/css/parallax.js')?>"></script>
<!-- Include the above in your HEAD tag -->

<!-- 
 * parallax_login.html
 * @Author original @msurguy (tw) -> http://bootsnipp.com/snippets/featured/parallax-login-form
 * @Tested on FF && CH
 * @Reworked by @kaptenn_com (tw)
 * @package PARALLAX LOGIN.
-->
        <script src="http://mymaplist.com/js/vendor/TweenLite.min.js"></script>
        <body>

            <div class="container">

                <div class="row vertical-offset-100">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading"> 
                            <?php if( $error = $this->session->flashdata('login_failed')):?>
    <div class="row ">
      <div class="col-lg-9">
        <div class="alert alert-dismissible alert-danger">
  <h4 class="alert-heading">Warning!</h4>
  <?= $error ?>

</div>
      </div>
    </div>
    <?php endif;?>                               
                                <div class="row-fluid user-row">
                                    <img src="<?= base_url('assets/css/images/logo_sm_2_mr_1.png')?>" class="img-responsive" alt="Conxole Admin"/>
                                </div>
                            </div>
                            <div class="panel-body">
                               
                                 <?php echo form_open('login_controller/index',['accept-charset'=>'UTE-8','role'=>'form', 'class'=>'form-signin'])?>
                                    <fieldset>

                                        <label class="panel-login">
                                            <div class="login_result"></div>
                                        </label>
                                        <?php echo form_input(['type'=>'text', 'name'=>'username', 'class'=>'form-control', 'placeholder'=>'username'])?>
                                        <?php echo form_error('username',"<p class='text-danger'>","</p>")?>
                                        <small id="emailHelp" class="form-text text-muted">useranme is your roll number</small>
                                        <?php echo form_input(['type'=>'password', 'name'=>'password', 'class'=>'form-control', 'placeholder'=>'Password'])?>
                                        <small id="emailHelp" class="form-text text-muted">password is your dob in format of yyyy-mm-dd</small>
                                        <?php echo form_error('password',"<p class='text-danger'>","</p>")?>
                                        <br></br>
                                        <?php echo form_submit(['class'=>'btn btn-lg btn-success btn-block', 'type'=>'submit', 'value'=>'Login'])?>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </body>
            </div>
    </body>
    </html>>