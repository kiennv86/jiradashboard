<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php  if(isset($title) ){ echo $title. " | ";}  ?> SMS24 </title>         
        <!-- Bootstrap framework -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/bootstrap/css/bootstrap-responsive.min.css" />
        <!-- gebo blue theme-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/blue.css" id="link_theme" />
        <!-- breadcrumbs-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/jBreadcrumbs/css/BreadCrumb.css" />
        <!-- tooltips-->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/qtip2/jquery.qtip.min.css" />
        <!-- notifications -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/sticky/sticky.css" />
        <!-- code prettify -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/google-code-prettify/prettify.css" />
        <!-- notifications -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/sticky/sticky.css" />
        <!-- splashy icons -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/img/splashy/splashy.css" />
        <!-- colorbox -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/lib/colorbox/colorbox.css" />
        <!-- main styles -->
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/style.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/sms_style.css" />
        
        <!-- add jquery -->
        <script src="<?php echo base_url() ?>public/js/jquery.min.js"></script>

    <!-- Favicons and the like (avoid using transparent .png) -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" />
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="<?php echo base_url() ?>public/css/ie.css" />
        <script src="<?php echo base_url() ?>public/js/ie/html5.js"></script>
        <script src="<?php echo base_url() ?>public/js/ie/respond.min.js"></script>
    <![endif]-->        
        <?php echo $header; ?> 
        <?php echo $_styles; ?>
        <?php echo $js_top; ?>
                
    </head>
    <body class="gebo-fixed menu_hover "> 
        <div id="maincontainer" class="clearfix">
            <!-- Menu  -->
            <?php echo $menu_top ?> 
            <!-- End Menu -->
            <div id="contentwrapper"><!-- Start content -->
                <div class="main_content">
                    <?php echo $breadcrumb; ?>
                    <?php echo $page_title; ?>
                    <?php echo $messages_alert; ?>
                    <?php echo $content; ?>
                    <input type="hidden" name="base_url" id="base_url" value="<?php echo base_url() ?>" />
                </div>
            </div><!-- end content -->  
        </div>
        <!-- add js -->
        <!-- smart resize event -->
        <script src="<?php echo base_url() ?>public/js/jquery.debouncedresize.min.js"></script>
        <!-- hidden elements width/height -->
        <script src="<?php echo base_url() ?>public/js/jquery.actual.min.js"></script>
        <!-- js cookie plugin -->
        <script src="<?php echo base_url() ?>public/js/jquery.cookie.min.js"></script>
        <!-- main bootstrap js -->
        <script src="<?php echo base_url() ?>public/bootstrap/js/bootstrap.min.js"></script>
        <!-- bootstrap plugins -->
        <script src="<?php echo base_url() ?>public/js/bootstrap.plugins.min.js"></script>
        <!-- code prettifier -->
        <script src="<?php echo base_url() ?>public/lib/google-code-prettify/prettify.min.js"></script>
        <!-- tooltips -->
        <script src="<?php echo base_url() ?>public/lib/qtip2/jquery.qtip.min.js"></script>
        <!-- jBreadcrumbs -->
        <script src="<?php echo base_url() ?>public/lib/jBreadcrumbs/js/jquery.jBreadCrumb.1.1.min.js"></script>
        <!-- sticky messages -->
        <script src="<?php echo base_url() ?>public/lib/sticky/sticky.min.js"></script>
        <!-- fix for ios orientation change -->
        <script src="<?php echo base_url() ?>public/js/ios-orientationchange-fix.js"></script>

        <!-- lightbox -->
        <script src="<?php echo base_url() ?>public/lib/colorbox/jquery.colorbox.min.js"></script>
        <?php echo $js_footer; ?>
        <!-- common functions -->
        <script src="<?php echo base_url() ?>public/js/gebo_common.js"></script> 
        <script src="<?php echo base_url() ?>public/js/common.js"></script> 
        
        
    </body> 
</html>
