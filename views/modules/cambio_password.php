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
        <h1>Perfil<small>Cambiar Contraseña</small></h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="row">
                <div class="col-md-6">
                <!-- general form elements -->
                <div class="box box-primary">
                    <!-- form start -->
                    <form role="form">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="password1">Contraseña Antigua</label>
                                <input type="password" class="form-control" id="password1" name="password1">
                            </div>
                            <div class="form-group">
                                <label for="password2">Nueva Contraseña</label>
                                <input type="password" class="form-control" id="password2" name="password2">
                            </div>
                            <div class="form-group">
                                <label for="password3">Confirmar Contraseña</label>
                                <input type="password" class="form-control" id="password3" name="password3">
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
                </div>
        </div>
    </section>
        <!-- /.content -->
</div>
<!--/Content-Wrapper-->