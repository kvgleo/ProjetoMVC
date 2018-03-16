
<!DOCTYPE html>
<html>
<meta charset="utf-8">
	<head>
		<title> Index </title>
		<link rel="stylesheet" type="text/css" href="style.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		
	<div class="container-fluid">
		<div class="row">
			<header class="col-md-12"> <h1> Index</h1> </header>
		</div>

		<div class="row" style="background-color: #DCDCDC">
			<nav class="col-md-3"> 
				<p><a href="?m=h">Home </a></p>
				<p><a href="?m=f"> Formulario </a></p>
				<p><a href="?m=s"> Sobre </a></p>
				<p><a href="?m=p"> Produtos </a></p> 
			</nav>
			<section class="col-md-6">
			 <?php
            if (isset($_GET['m'])) {
                switch ($_GET['m']) {
                    case 'h':
                        require_once("home.php");
                        break;
                    case 's':
                        require_once("sobre.php");
                        break;
                    case 'p':
                        require_once("produtos.php");
                        break;
                    case 'f':
                        require_once("formulario.php");
                        break;
                }
            }
            ?>
			</section>
			<aside class="col-md-3">
				<p><input type="text"  width="40" placeholder="Poste uma mensagem" id="txt"/>
				<button type="button" class="btn btn-primary btn-xs" value="Ok" onclick="f2()"> Exibir</button></p>
				<p id="resposta"></p> 
				<p><button type="button" value="btn1" class="btn btn-default" onclick="f1()"> Clique </button> 
				<button type="button" value="btn2" class="btn btn-danger" onclick="f3()"> Random </button> </p>
				
			</aside>
		</div> 
		<div class="row">
			<footer class="col-md-12"> <h4> footer @copyright ... </h4> </footer>
		</div>

	</div>
	</body>
</html>

