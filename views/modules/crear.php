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
        <h1>Nuevo<small>Crear laboratorio</small></h1>
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
                                <label for="nombrelab">Seleccione el laboratorio para la práctica libre:</label>
                                <select class="custom-select">
                                    <option selected>Seleccionar</option>
                                    <option value="3">Laboratorio 1</option>
                                    <option value="1">Laboratorio 2</option>
                                    <option value="2">Laboratorio 3</option>
                                    <option value="3">Laboratorio 4</option>
                                    <option value="3">Laboratorio 5</option>
                                    <option value="3">Laboratorio 6</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nivel:</label>
                                <select class="custom-select">
                                    <option selected>Seleccionar</option>
                                    <option value="3">Sótano</option>
                                    <option value="1">Nivel 1</option>
                                    <option value="2">Nivel 2</option>
                                    <option value="3">Nivel 3</option>
                                    <option value="3">Nivel 4</option>
                                    <option value="3">Nivel 5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="ubicacionlab">Ubicación:</label>
                                <input type="url" class="form-control" id="ubicacionlab" name="ubicacionlab">
                            </div>
                            <div class="form-group">
                                <label for="capacidadlab">Capacidad:</label>
                                <input type="number" class="form-control" name="capacidadlab" id="capacidadlab">
                            </div>
                            <div class="form-group">
                                <label>Administrador:</label>
                                <select class="custom-select">
                                    <option selected>Seleccionar</option>
                                    <option value="3">Administrador 1</option>
                                    <option value="1">Administrador 2</option>
                                    <option value="2">Administrador 3</option>
                                    <option value="3">Administrador 4</option>
                                    <option value="3">Administrador 5</option>
                                    <option value="3">Administrador 6</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Crear práctica</button>
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