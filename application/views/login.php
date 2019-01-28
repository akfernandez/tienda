<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Login | E-Shopper</title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"/>

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/slick-theme.css"/>

        <!-- nouislider -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/nouislider.min.css"/>

        <!-- Font Awesome Icon -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">

        <!-- Custom stlylesheet -->
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css"/>
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->       
        <link rel="shortcut icon" href="images/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets/images/ico/apple-touch-icon-57-precomposed.png">
    </head><!--/head-->

    <body>

<nav id="navigation">
            <!-- container -->
            <div class="container">
                <!-- responsive-nav -->
                <div id="responsive-nav">
                    <!-- NAV -->
                    <ul class="main-nav nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="<?php echo site_url('Inicio/tienda'); ?>">Tienda</a></li>
                        

                        <li><a href="#">Laptops</a></li>
                        <li><a href="#">Smartphones</a></li>
                        <li><a href="#">Cameras</a></li>
                        <li><a href="#">Accessories</a></li>
                    </ul>

                    <!-- /NAV -->
                </div>
                <!-- /responsive-nav -->

            </div>
            <!-- /container -->
        </nav>
        <section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">

                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Inicia Sesion</h3>
                            </div>
                            <form action="<?php echo  site_url("login");?>" method="post">
                            <div class="form-group">
                                <input class="input" type="text" name="nombre_usuario_inicio" placeholder="Nombre Usuario" value="<?= set_value("nombre_usuario_inicio") ?>">
                                <?php echo form_error('nombre_usuario_inicio'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="pass_inicio" placeholder="Contraseña" value="<?= set_value("pass_inicio") ?>">
                                <?php echo form_error('pass_inicio'); ?>
                            </div>
                            
                            <div class="form-group">
                                <button class="input" type="submit" >Iniciar sesion</button>
                            </div>
                            </form>    
                        </div>
                    </div>
                    <div class="col-sm-1">
                        <h2 class="or">OR</h2>
                    </div>
                    <div class="col-sm-4">
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Crea Tu Cuenta</h3>
                            </div>
                            
                            <form action="<?php echo site_url("registro");?>" method="post">
                            <div class="form-group">
                                <input class="input" type="text" name="nombre" placeholder="Nombre" value="<?= set_value("nombre") ?>">
                                <?php echo form_error('nombre'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="apellido" placeholder="apellido" value="<?= set_value("apellido") ?>">
                                <?php echo form_error('apellido'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="email" placeholder="Email" value="<?= set_value("email") ?>">
                                <?php echo form_error('email'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="direccion" placeholder="Direccion" value="<?= set_value("direccion") ?>">
                                <?php echo form_error('direccion'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="cp" placeholder="Codigo Postal" value="<?= set_value("cp") ?>">
                                <?php echo form_error('cp'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="provincia" placeholder="provincia" value="<?= set_value("provincia") ?>">
                                <?php echo form_error('provincia'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="dni" placeholder="DNI" value="<?= set_value("dni") ?>">
                                <?php echo form_error('dni'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="nombre_usuario" placeholder="Nombre Usuario" value="<?= set_value("nombre_usuario") ?>">
                                <?php echo form_error('nombre_usuario'); ?>
                            </div>
                            <div class="form-group">
                                <input class="input" type="text" name="pass" placeholder="Contraseña" value="<?= set_value("pass") ?>">
                                <?php echo form_error('pass'); ?>
                            </div>
                           <div class="form-group">
                                <button class="input" type="submit" >Registrarse</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/form-->






       
       
           <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/slick.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/nouislider.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.zoom.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/main.js"></script>
    </body>
</html>