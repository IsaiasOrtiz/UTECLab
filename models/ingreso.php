<?php
require_once 'conexion.php';
class IngresoModels extends Conexion {
    #Inicio de Sesion
    public function ingresoModel($datosModel, $tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT Nombre, Usuario, Clave, Tipo FROM $tabla WHERE Usuario = :Usuario AND Clave = :Clave");
        $stmt->bindParam(":Usuario", $datosModel["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":Clave", $datosModel["password"], PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }

    #Vista tablas
    public function vistaUsuarioModel($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT IdUsuario, Nombre, Usuario, Tipo, Id_CoP FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

    public function vistaEdificiosModel($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT ID_EDF, Nombre, Niveles, Sotano, Direccion FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

    public function vistaLaboratoriosModel($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT ID_Lab, Nombre, Nivel, Coordenada, capacidad FROM $tabla");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

    #Editar Usuarios
    public function editarUsuarioModel($datos, $tabla) {
        $stmt = Conexion::conectar()->prepare("SELECT IdUsuario, Nombre, Usuario, Tipo FROM $tabla WHERE IdUsuario = :IdUsuario");
        $stmt->bindParam(":IdUsuario", $datos[1], PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
        $stmt->close();
    }

    #Actualizar Usuario
    public function actualizarUsuarioModel($datos, $tabla) {
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET Nombre = :Nombre, Usuario = :Usuario, Tipo = :Tipo WHERE IdUsuario = :IdUsuario");        
        $stmt->bindParam(":Nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":Usuario", $datos["usuario"], PDO::PARAM_STR);
        $stmt->bindParam(":Tipo", $datos["tipo"], PDO::PARAM_INT);
        $stmt->bindParam(":IdUsuario", $datos["id"], PDO::PARAM_INT);
        if($stmt->execute()) {
            return "success";
        } else {
            return "error";
        }
        $stmt->close();
    }
}