<?php
session_start();
if(!$_SESSION["validar"]){
    header("location:ingresar");
    exit();
}
include 'aside.php';
?>
<!-- Page Content -->
<div id="page-content-wrapper">
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom d-lg-none">
    <button class="navbar-toggler" type="button" id="menu-toggle" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
</nav>
<!--/Navbar-->
<!--Content-Wrapper-->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Editar<small>Editar Usuario</small></h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
                <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form" method="POST">
                        <div class="box-body">
                            <?php 
                                $editar = new IngresoController();
                                $editar -> editarUsuarioController();
                                $editar -> actualizarUsuarioController();
                            ?>
                    </form>
                </div>
                <!-- /.box -->
                </div>
        </div>
    </section>
        <!-- /.content -->
</div>
<!--/Content-Wrapper-->