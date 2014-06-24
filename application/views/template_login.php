<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php  if(isset($title) ){ echo $title. " | ";}  ?> Administrator </title>
        <!-- Bootstrap framework -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/css/bootstrap-responsive.min.css" />
        <!-- theme color-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/blue.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/common.css" />
        <!-- tooltip -->    
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/qtip2/jquery.qtip.min.css" />
        <!-- main styles -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css" />
        <!-- Favicons and the like (avoid using transparent .png) -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <!--[if lte IE 8]>
            <script src="<?php echo base_url() ?>public/js/ie/html5.js"></script>
             <script src="<?php echo base_url() ?>public/js/ie/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="login_page">
        <?php echo $messages_alert;?>
        <div class="login_box">

            <form action="<?php echo base_url() ;?>login/authentication/checklogin" method="post" id="login_form">
                <div class="top_b"><h3>Login Form</h3></div>    				
                <div class="cnt_b">
                    <div class="formRow">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span><input type="text" id="username" name="username" placeholder="Username"  />
                        </div>
                    </div>
                    <div class="formRow">
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-lock"></i></span><input type="password" id="password" name="password" placeholder="Password" />
                        </div>
                    </div>
                    <div class="formRow clearfix">
                        <label class="checkbox"><input type="checkbox" /> Remember</label>
                    </div>
                </div>
                <div class="btm_b clearfix">
                    <button class="btn btn-primary pull-right" type="submit">Login</button>
                </div>  
            </form>	
        </div>


        <script src="<?php echo base_url() ?>public/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>public/js/jquery.actual.min.js"></script>
        <script src="<?php echo base_url() ?>public/lib/validation/jquery.validate.min.js"></script>
        <script src="<?php echo base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>public/js/common.js"></script> 
        <script>
            $(document).ready(function() {
                //* validation
                $('#login_form').validate({
                    onkeyup: false,
                    errorClass: 'error',
                    validClass: 'valid',
                    rules: {
                        username: {required: true, minlength: 3},
                        password: {required: true, minlength: 3}
                    },
                    messages: {
                        username: {required: "Please enter Username", minlength: "Username is too short"},
                        password: {required :"Plaase enter Password", minlength: "Password is too short"},
                    },
                    highlight: function(element) {
                        $(element).closest('div').addClass("f_error");
                    },
                    unhighlight: function(element) {
                        $(element).closest('div').removeClass("f_error");
                    },
                    errorPlacement: function(error, element) {
                        $(element).closest('div').append(error);
                    }
                });
            });
        </script>
    </body>
</html>
