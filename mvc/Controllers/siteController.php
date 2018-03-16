<?php
class siteController{

    public function formulario(){
        require_once("views/header.php");
        require_once("Views/Site/formulario.php");
        require_once("views/footer.php");
          
    }

    public function index(){
        require_once("views/header.php");
        require_once("Views/Site/home.php");
        require_once("views/footer.php");
    }

    public function sobre(){
        require_once("views/header.php");
        require_once("Views/Site/sobre.php");
        require_once("views/footer.php");
    }
    
     public function produtos(){
        require_once("views/header.php");
        require_once("Views/Site/produtos.php");
        require_once("views/footer.php");
    }


}
?>