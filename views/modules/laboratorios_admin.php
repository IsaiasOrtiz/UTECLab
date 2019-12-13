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
        <h1>Laboratorios<small>Administrar Laboratorios</small></h1>
    </section>
    <!-- Main content -->
    <section class="content container-fluid">
    <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Lista de usuarios</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="example2" class="table table-sm table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Nivel</th>
                                    <th scope="col">Coordenada</th>
                                    <th scope="col">Capacidad</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                               $tabla = new IngresoController();
                               $tabla -> vistaLaboratoriosController();
                            ?>   
                            </tbody>
                        </table> 
                    </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
        <!-- /.content -->
</div>
<!--/Content-Wrapper-->