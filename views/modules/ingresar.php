<?php
session_start();
if(isset($_SESSION["validar"])){
    header("location:index");
    exit();
}
?>
<div class="contenedor-sesion text-center">
    <form class="form-signin" method="POST" id="formIngreso" onsubmit="return validarIngreso()">
        <div class="imagen mb-4">
            <a href="<?php echo constant('URL')?>index"><img class="mb-4" src="views/img/brand.png" alt="brand"></a>
        </div>
        <div class="form-group">
            <label for="usuarioIngreso" class="sr-only">Correo</label>
            <input type="text" id="usuarioIngreso" name="usuarioIngreso" class="form-control" placeholder="Correo" required autofocus>
        </div>
        <div class="form-group">
            <label for="passIngreso" class="sr-only">Contraseña</label>
            <input type="password" id="passIngreso" name="passIngreso" class="form-control" placeholder="Contraseña" required>
        </div>
    <?php
        $ingreso = new IngresoController();
        $ingreso -> ingresoController();
        if(isset($_GET["action"])) {
            if($_GET['action'] == "fallo"){
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Error iniciando sesión. El usuario ó la contraseña son incorrectos.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
            }
        }
    ?>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
    <p class="mt-5 mb-3 text-muted">Desarrollado por Grupo #3 - &copy; 2019</p>
    </form>
</div>
