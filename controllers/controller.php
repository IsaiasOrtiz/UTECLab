<?php
class MVCcontroller {
    #Llama a la plantilla
    public function plantilla() {
        include 'views/template.php';
    }

    #Interacción en URL's
    public function enlacesPaginasC(){
        if(isset( $_GET['action'])){
             $enlaces = $_GET['action'];
             $enlaces = rtrim($enlaces, '/');
             $enlaces = explode('/', $enlaces);
         }else{
            $enlaces = "index";
         }
        $respuesta = EnlacesPaginas::enlacesPaginasM($enlaces);
        include $respuesta;
    }
}