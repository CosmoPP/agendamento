<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="logo.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" href="css/login_style/corpo.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px) and (max-width: 1023px)" href="css/login_style/adapt.css">
	<title>E.E.E.P Padre João Bosco de Lima - Sistema De Agendamento</title>
<script type="text/javascript" src="js/jquery.12.04.js"></script>
<script type="text/javascript" src="js/login.js"></script>
<script>
function validacao(){
	if  (document.fm.usuario.value == '') {
		document.fm.usuario.focus();
		alert("Preencha o campo nome.");
		return false;
	}

	if (document.fm.senha.value == '') {
		document.fm.senha.focus();
		alert("Preencha o campo senha.");
		return false;
	}
}
</script>
</head>
<body onload="return foco()">
<div class="carregamento">
	<div class="estado"><img src="img/carregando.gif"></div>
</div>
<div class="geral">
<main>
<header>
<div class="top-barra">
	<h1>Sistema De Agendamento</h1>
</div>
<div class="eeep"></div>
<div class="data">
<img src="img/data.gif"><p id="d"></p>
</div>
</header>
<form id="login-falso" action="#" method="post" name="fm" onsubmit="return validacao()">
<fieldset>
 <legend><img src="img/cadeado.jpg"><span>Área restrita</span></legend>
 	<div>
	<ul>
		<span>Nome:</span><li>&ensp;&ensp; <input type="text" id="usuario" name="usuario"></li>
		<span>Senha:</span><li>&ensp;&ensp; <input type="password" id="senha" name="senha"></li>
		<li><a href=""><img src="img/interrogacao.jpg">Esqueceu sua senha?</a></li>
		<li><input type="submit" id="env" value="Entrar"></li>
	</ul>
	</div>
</fieldset>
</form>
<?php
include_once "conexao.php";
//isset verifica se algum campo esta em branco
// ! --> e para dentro do if  
if(isset($_POST['usuario']) && isset($_POST['senha'])){
	
	$usuario = $_POST['usuario'];
	$senha =   $_POST['senha'];
	
	
	$sql = "SELECT * FROM USUARIO WHERE CPF = '$usuario' AND SENHA = '$senha' ";
	$result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {  
		  $dados = mysqli_fetch_assoc($result);
		  $nome =  $dados['NOME'];
		  $tipo =  $dados['TIPO'];  
   //inicia a sessao 
		  session_start();
		  $_SESSION["nome"] = $nome;
		  if($tipo==1){
   //header leva para outra pagina que do adm; ADM.PHP E O NOME DA OUTRA PAGINA  
   //se n for ADM leva para a pagina do usuario   
			  header('Location:adm.php');
			  
			  }
		else{
			//trocar nome da ABA a ser aberta
			header('Location:p/index2.php');
			
			}
		  
		 if (mysqli_num_rows($result) != $usuario||$senha){
			 
			 echo 'não cadastrado';
			 
			 }
	}
	
}
		?>
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
</div>
</body>
</html>