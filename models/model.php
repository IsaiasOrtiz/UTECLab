<?php
class EnlacesPaginas {
    static public function enlacesPaginasM($enlaces) {
        if($enlaces[0] == "index" ||
           $enlaces[0] == 'cambio_password' ||
           $enlaces[0] == 'usuarios' ||
           $enlaces[0] == 'edificios' ||
           $enlaces[0] == 'laboratorios' ||
           $enlaces[0] == 'nuevo' ||
           $enlaces[0] == 'editar' ||
           $enlaces[0] == "ingresar" ||
           $enlaces[0] == "crear" ||
           $enlaces[0] == "horarios_practicas" ||
           $enlaces[0] == "laboratorios_admin" ||
           $enlaces[0] == "editar_perfil" ||
           $enlaces[0] == "editar_laboratorio" ||
           $enlaces[0] == "editar_edificio" ||
           $enlaces[0] == 'salir'){
            $module = "views/modules/".$enlaces[0].".php";
        } else if($enlaces[0] == 'fallo') {
            $module = "views/modules/ingresar.php";
        } else if($enlaces[0] == 'cambio_realizado') {
            $module = "views/modules/usuarios.php";
        } else if($enlaces == 'index') {
            $module = "views/modules/ingresar.php";
        } else {
            $module = "views/modules/404.php";
        }
        return $module;
    }
}