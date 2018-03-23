<?php
if(!isset($_GET['m'])){
    require_once("Controllers/siteController.php");
    $site = new siteController();
    $site -> index();


}else{

    switch ($_REQUEST['m']){

        case 's':
            require_once("Controllers/siteController.php");
            $site= new siteController();
                if(!isset($_GET['a']))
                    $site -> index();
                else{
                    switch($_REQUEST['a']){

                            case 's':
                            $site -> sobre();
                            break;

                            case 'f':
                            $site -> formulario();
                            break;

                            case 'h':
                            $site -> index();
                            break;

                            case 'p':
                            $site -> produtos();
                            break;
                    }
                } 

        case 'c':
            require_once("Controllers/clientesController.php");
            $cliente = new clientesController();
            if(!isset($_GET['a']))
                $cliente -> criar();
            else{
                switch ($_REQUEST['a']){
                    case 'cc':
                    $cliente-> criar();
                    break;

                    case 'cs':
                    $cliente-> show();
                    break;

                }
            }




    }
}


/*Criar a seguinte estrutura:
-index.php (arquivo que irá gerenciar nossa rotas, instanciando a controller e chamando o método necessário)
Diretório Models (ainda não trabalhado)
Diretório Views
-header.php
-footer.php
-home.php (demais páginas da aula 1, sobre.php, produtos.php, contato.php, pode ser colocado em uma pasta única "site" por exemplo)
Diretório Controllers
-site.php (classe controller para as páginas do site)

Usar a URL com o método $_GET[" "] para passar os parâmetros 
para a controller requisitada e a ação desejada da mesma,
 quem fará a leitura da URL e o roteamento será nossa index.php
Exe: index.php?c=s&a=h (controller=site e acao=home)*/
?>

