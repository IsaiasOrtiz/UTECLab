<!doctype html>
<html class="no-js" lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Proyecto</title>
        <meta name="description" content="">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="apple-touch-icon" href="<?php echo constant('URL')?>views/img/apple-touch-icon.png">
        <link rel="stylesheet" href="<?php echo constant('URL')?>views/css/normalize.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL')?>views/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL')?>views/css/dataTables.bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL')?>views/css/ionicons.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL')?>views/css/all.min.css">
        <link rel="stylesheet" href="<?php echo constant('URL')?>views/css/main.css">
        <!--[if lt IE 9]>
            <script src="js/vendor/html5-3.6-respond-1.4.2.min.js"></script>
        <![endif]-->
    </head>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <?php if(isset($_GET['action'])) {
            if($_GET["action"] == "ingresar" || $_GET['action'] == "fallo") {?>
        <body class="inicio-sesion">
    <?php }else {?>
        <body>
            <div class="d-flex" id="wrapper">
    <?php }} else {?>
        <body class="inicio-sesion">
    <?php }?>
            <?php 
                $modules = new MVCcontroller();
                $modules -> enlacesPaginasC();
            ?>
            </div>
            <!-- /#page-content-wrapper -->        
          </div>
          <!-- /#wrapper -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo constant('URL')?>views/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="<?php echo constant('URL')?>views/js/bootstrap.min.js"></script>
        <script src="<?php echo constant('URL')?>views/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo constant('URL')?>views/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo constant('URL')?>views/js/fastclick.js"></script>
        <script src="<?php echo constant('URL')?>views/js/jquery.slimscroll.min.js"></script>
        <script src="<?php echo constant('URL')?>views/js/all.min.js"></script>
        <script src="<?php echo constant('URL')?>views/js/main.js"></script>
        <script src="<?php echo constant('URL')?>views/js/demo.js"></script>
    </body>
</html>