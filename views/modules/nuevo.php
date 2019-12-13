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
        <h1>Nuevo<small>Crear carrera o profesión</small></h1>
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
                                <label for="texto">Seleccione tipo:</label>
                                <!-- ESTOS EDIFICIOS SE TIENEN QUE ACTUALIZAR SEGUN SEAN LOS QUE ESTEN EN LA BD --> 
                                <div class="form-group">
                                    <select class="custom-select">
                                        <option selected>Seleccionar</option>
                                        <option value="1">Carrera</option>
                                        <option value="2">Profesión</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nombreCoP">Nombre:</label>
                                    <input type="text" class="form-control" id="nombreCoP" name="nombreCoP">
                                </div>
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