<?php

  class Conexion{
    public function conectar(){
      //new PDO('mysql:host=localhost;dbname=prueba', $usuario, $contraseña);
      $link = new PDO("mysql:host=localhost;dbname=practica","root","");
      return $link;
    }
  }

 ?>
