<?php
class Conexion {
    public function conectar() {
        $link = new PDO("mysql:host=localhost;dbname=utec_lab","root","");
        return $link;
    }
}