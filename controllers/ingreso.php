<?php 
class IngresoController {
    #Inicio de Sesión
    public function ingresoController() {
        if(isset($_POST["usuarioIngreso"])){
            if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["usuarioIngreso"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["passIngreso"])) {
                $datosController = array("usuario" => $_POST["usuarioIngreso"], "password" => $_POST["passIngreso"]);
                $respuesta = IngresoModels::ingresoModel($datosController, "usuarios");
                if($respuesta["Usuario"] == $_POST["usuarioIngreso"] && $respuesta["Clave"] == $_POST["passIngreso"] && $respuesta["Tipo"] != "4") {
                    session_start();
                    $_SESSION["validar"] = true;
                    $_SESSION["usuario"] = $respuesta["Nombre"];
                    $_SESSION["privilegio"] = $respuesta["Tipo"];
                    header("location:index");
                } else {
                    header("location:fallo");
                }
            }
        }
    }

    #Vista usuario para la tabla
    public function vistaUsuarioController() {
        $respuesta = ingresoModels::vistaUsuarioModel("usuarios");
        foreach($respuesta as $row => $item) {
            echo '<tr>
                    <td>'.$item["IdUsuario"].'</td>
                    <td>'.$item["Nombre"].'</td>
                    <td>'.$item["Usuario"].'</td>
                    <td>'.$item["Tipo"].'</td>
                    <td>'.$item["Id_CoP"].'</td>
                    <td style="text-align: center;"><a href="editar_perfil/'.$item["IdUsuario"].'"><i class="fas fa-pencil-alt"></i></a></td>
                </tr>';
        }
    }

    #Vista edificios para la tabla
    public function vistaEdificiosController() {
        $respuesta = ingresoModels::vistaEdificiosModel("edificios");
        foreach($respuesta as $row => $item) {
            echo '<tr>
                    <td>'.$item["ID_EDF"].'</td>
                    <td>'.$item["Nombre"].'</td>
                    <td>'.$item["Niveles"].'</td>
                    <td>'.$item["Sotano"].'</td>
                    <td>'.$item["Direccion"].'</td>
                    <td style="text-align: center;"><a href="editar_edificio/'.$item["ID_EDF"].'"><i class="fas fa-pencil-alt"></i></a></td>
                    <td style="text-align: center;"><a href="#"><i class="fas fa-ban"></i></a></td>
                </tr>';
        }
    }

    #Vista laboratorios para la tabla
    public function vistaLaboratoriosController() {
        $respuesta = ingresoModels::vistaLaboratoriosModel("laboratorios");
        foreach($respuesta as $row => $item) {
            echo '<tr>
                    <td>'.$item["ID_Lab"].'</td>
                    <td>'.$item["Nombre"].'</td>
                    <td>'.$item["Nivel"].'</td>
                    <td width="5">'.$item["Coordenada"].'</td>
                    <td>'.$item["capacidad"].'</td>
                    <td style="text-align: center;"><a href="editar_laboratorio/'.$item["ID_Lab"].'"><i class="fas fa-pencil-alt"></i></a></td>
                    <td style="text-align: center;"><a href="#"><i class="fas fa-ban"></i></a></td>
                </tr>';
        }
    }

    #Editar usuario desde la tabla
    public function editarUsuarioController() {
        $datos = $_GET["action"];
        $datos = explode('/', $datos);
        $respuesta = ingresoModels::editarUsuarioModel($datos, "usuarios");
        echo '<div class="form-group">
                <input type="hidden" name="idEditar" value="'.$respuesta["IdUsuario"].'">
                <label for="editarNombre">Editar nombre:</label>
                <input type="text" class="form-control" id="editarNombre" name="editarNombre" value="'.$respuesta["Nombre"].'">
              </div>
              <div class="form-group">
                <label for="editarUsuario">Editar usuario:</label>
                <input type="text" class="form-control" id="editarUsuario" name="editarUsuario" value="'.$respuesta["Usuario"].'">
              </div>
              <div class="form-group">
                <label for="tipoEditar">Editar tipo usuario:</label>
                <p class="text-muted">Administrador = 1</p>
                <p class="text-muted">Administrador de Laboratorio = 2</p>
                <p class="text-muted">Estudiante = 3</p>
                <p class="text-muted">Inhabilitar = 4</p>
                <input type="text" class="form-control" id="tipoEditar" name="tipoEditar" value="'.$respuesta["Tipo"].'">
              </div>
            </div>
        <!-- /.box-body -->
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </div>';
    }

    #Actualizar Usuario
    public function actualizarUsuarioController() {        
        if(isset($_POST["editarNombre"])) {
            $datosController = array("id"=>$_POST["idEditar"],
                           "nombre"=>$_POST["editarNombre"],
                           "usuario"=>$_POST["editarUsuario"],
                           "tipo"=>$_POST["tipoEditar"]);
            $respuesta = IngresoModels::actualizarUsuarioModel($datosController, "usuarios");
            if($respuesta == "success") {
                echo '<script>window.location = "http://192.168.43.128:8080/frontend/cambio_realizado"</script>';
                #header("Location:cambio_realizado");
            } else {
                echo "error";
            }
        }
    }
}