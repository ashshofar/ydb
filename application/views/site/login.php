<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login - Youth Database</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>assets/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" name="login" action="<?php echo base_url().'login/login_form'; ?>" method="post">
        <h2 class="form-signin-heading">Sign in now</h2>
        <div class="login-wrap" id="form-login">
            
                <?php 
                    echo form_error('username');
                ?>
           
            <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="<?php echo set_value('username')?>" autofocus>
            <?php 
              echo form_error('password');
            ?>
            <input type="password" class="form-control" placeholder="Password" name="password" id="password" value="<?php echo set_value('password')?>">
            <button class="btn btn-lg btn-login btn-block" type="submit" name="login">Sign in</button>
            </div>

          </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


  </body>
</html>