<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>DASHGUM - Bootstrap Admin Template</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(url('assets/css/bootstrap.css')); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo e(url('assets/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo e(url('assets/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('assets/css/style-responsive.css')); ?>" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

      <div id="login-page">
        <div class="container">
        
              <div class="form-login">
             
                <h2 class="form-login-heading">SAP BMT AL-ISHLAH</h2>
                <div class="login-wrap">
                <form role="form" method="POST" action="<?php echo e(route('login')); ?>">
                 <?php echo e(csrf_field()); ?>

                    <input id="email" type="email" class="form-control" placeholder="Alamat Email"  name="email" value="<?php echo e(old('email')); ?>" required autofocus>
                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                    <br>
                    <input type="password" id="password" class="form-control" placeholder="Katasandi" name="password" required>
                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                    <label class="checkbox">
                        <span class="pull-right">
                        <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>> Ingat Saya
                                    </label>
                                </div>
                          <!--   <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a> -->
        
                        </span>
                    </label>
                    <?php if(Auth::user()): ?>
                        user dah lign
                    <?php endif; ?>
                    <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> MASUK</button>
                    </form>
                    <!-- 
                    <hr>
                    
                    <div class="login-social-link centered">
                    <p>or you can sign in via your social network</p>
                        <button class="btn btn-facebook" type="submit"><i class="fa fa-facebook"></i> Facebook</button>
                        <button class="btn btn-twitter" type="submit"><i class="fa fa-twitter"></i> Twitter</button>
                    </div>
                    <div class="registration">
                        Don't have an account yet?<br/>
                        <a class="" href="#">
                            Create an account
                        </a>
                    </div> -->
        
                </div>
        
                  <!-- Modal -->
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Forgot Password ?</h4>
                              </div>
                              <div class="modal-body">
                                  <p>Enter your e-mail address below to reset your password.</p>
                                  <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix" >
        
                              </div>
                              <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                  <button class="btn btn-theme" type="button">Submit</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- modal -->
        
              </div>       
        
        </div>
      </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(url('assets/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(url('assets/js/bootstrap.min.js')); ?>"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="<?php echo e(url('assets/js/jquery.backstretch.min.js')); ?>"></script>
    <script>
        $.backstretch("<?php echo e(url('assets/img/login-bg.jpg')); ?>", {speed: 500});
    </script>
     <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>

  </body>
</html>
