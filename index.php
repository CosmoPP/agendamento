<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="logo.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" href="css/corpo.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px) and (max-width: 1023px)" href="css/adapt.css">
	<title>E.E.E.P Padre João Bosco de Lima</title>
<script type="text/javascript" src="js/jquery.12.04.js"></script>
<script type="text/javascript" src="js/index.js"></script>
</head>
<body>
<div class="carregamento">
	<div class="estado"><img src="img/carregando.gif"></div>
</div>
<main>
<header>
<div class="top-barra">
	<h1>Sistema De Agendamento</h1>
	<a href="../Proj/login.php">
   
	<div class="sair">
		<img src="css/imgs/out.png" width="20px" height="17px" /> <span>Sair</span></div>
         
	</div>
	</a>
<div class="eeep"></div>
<div class="data">
<img src="img/data.gif"><p id="d"></p>
</div>
</header>
<div class="content-conteudo">
	<nav class="menu">
		<ul>
			<li>Cadastrar
				<div class="sub">
					<section id="n1">
						<ul>
							<a href="1.html"><li>Equipamentos</li></a>
							<a href="2.html"><li>USuário</li></a>
                            <a href="3.html"><li>Horário</li></a>
						</ul>
					</section>
					
				</div>
			</li>
			<li>Consultar
				<div class="sub">
					<section id="n1">
						<ul>
							<a href="1.html"><li>Equipamentos</li></a>
							<a href="2.html"><li>USuário</li></a>
                            <a href="3.html"><li>Horário</li></a>
						</ul>
					</section>
				</div>
			</li>
			<li>Alterar
			<div class="sub">
					<section id="n1">
						<ul>
							<a href="1.html"><li>Equipamentos</li></a>
							<a href="2.html"><li>USuário</li></a>
                            <a href="3.html"><li>Horário</li></a>
						</ul>
					</section>
					
				</div>
			</li>
		</ul>
	</nav>
</div>
<?php 
session_start();

if($_SESSION['nome']){
	echo "<font color=#993300>"." Bem vindo(a) " ." "."<font color=#0000CC>". $_SESSION['nome'];
	}else{
	
		header('Location:login.php');
		echo "<script>"."alert 'Úsuario ou Senha está correto'"." </script>" ;
		
	}
	

?>
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
</body>
</html>