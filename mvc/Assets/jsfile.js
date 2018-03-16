function f1(){
	window.alert("Janela de diálogo");
}

function f2(){
var texto = document.getElementById("txt").value; //Obtendo o texto digitado pelo usuário
document.getElementById("txt").value = ""; //Limpando a caixa de texto
 window.alert("Frase digitada: "+texto); //mostrar mensagem digitada
} 

function f3(){ //função que mostra numero aleatório
	var a; 
	a = (Math.random()* 11);
	window.alert(Math.floor(a));
}

function f4(){ //função do button submit para limpar os campos e exibir mensagem
	document.getElementById("campo_name").value="";
	document.getElementById("campo_email").value="";
	document.getElementById("campo_tel").value="";
	window.alert("Enviado!")
}

