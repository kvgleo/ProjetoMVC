<?php

class clientesController{

     public function criar(){
         require_once("Views/header.php");
         require_once("Views/Cadastro/formulario.php");
         require_once("Views/footer.php");

     }

     public function show(){
         require_once("Views/header.php");
         require_once("Views/Cadastro/formularioShow.php");
         require_once("Views/footer.php");

     }
}
?>