<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" href="logo.ico" type="image/x-icon" />
<link rel="stylesheet" type="text/css" media="screen and (min-width: 1024px)" href="css/adm_style/corpo.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 0px) and (max-width: 1023px)" href="css/adm_style/adapt.css">
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
	<a href="login.php">
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
			<li>Projetores
				<div class="sub">
					<section id="n1">
						<ul>
							<li>Projetor 1º - modelo <br />(reservado/livre)</li>
							<li>Projetor 2º - modelo <br />(reservado/livre)</li>
						</ul>
					</section>
					<section id="n2">
						<ul>
							<li>Projetor 3º - modelo <br />(reservado/livre)</li>
							<li>Projetor 4º - modelo <br />(reservado/livre)</li>
						</ul>
					</section>
					<section id="n3">
						<ul>
							<li>Projetor 5º - modelo <br />(reservado/livre)</li>
							<li>Projetor 6º - modelo <br />(reservado/livre)</li>
						</ul>
					</section>
				</div>
			</li>
			<li>Dispositivos De Aúdio
				<div class="sub">
					<section id="n1">
						<ul>
							<li>Amplificador 1º - modelo (reservado/livre)</li>
							<li>Amplificador 2º - modelo (reservado/livre)</li>
						</ul>
					</section>
					<section id="n2">
						<ul>
							<li>Amplificador 3º - modelo (reservado/livre)</li>
							<li>Amplificador 4º - modelo (reservado/livre)</li>
						</ul>
					</section>
					<section id="n3">
						<ul>
							<li>Amplificador 5º - modelo (reservado/livre)</li>
							<li>Amplificador 6º - modelo (reservado/livre)</li>
						</ul>
					</section>
				</div>
			</li>
			<li>Televisores
			<div class="sub">
					<section id="n1">
						<ul>
							<li>Televisor 1º - modelo <br />(reservado/livre)</li>
							<li>Televisor 2º - modelo <br />(reservado/livre)</li>
						</ul>
					</section>
					<section id="n2">
						<ul>
							<li>Televisor 3º - modelo <br />(reservado/livre)</li>
							<li>Televisor 4º - modelo <br />(reservado/livre)</li>
						</ul>
					</section>
					<section id="n3">
						<ul>
							<li>Televisor 5º - modelo <br />(reservado/livre)</li>
							<li>Televisor 6º - modelo <br />(reservado/livre)</li>
						</ul>
					</section>
				</div>
			</li>
			<li class="agendar">Cadastrar</li>
		</ul>
	</nav>
	<div class="sbv"></div>
</div>

<?php 
session_start();

if($_SESSION['nome']){
	echo "<font color=#993300>"." Bem vindo(a) " ." "."<font color=#0000CC>". $_SESSION['nome'];
	}else{
	
		header('Location:login.php');
		echo " Úsuario ou Senha está correto " ;
		
	}
	

?>
<footer>
	<p>© 2017 - Padre João Bosco de Lima - Todos os direitos reservados</p>
</footer>
</main>
<div class="box">
	<div id="window">
		<div id="title">
			<span>O que deseja cadastrar ?</span>
			<div class="fechar">X</div>
		</div>
		<div class="opts">
			<div id="opts-equipamentos">Equipamentos</div>
			<div id="divisor"></div>
			<div id="opts-professores">Professores</div>
		</div>
	</div>
	<div id="window-cadastro-professores">
		<div id="title">
			<span>Preencha corretamente. (Cadastro de Professores)</span>
			<div class="fechar-cadastro-professores">X</div>
		</div>
		<form action="receber.php" method="POST" class="eq">
			<fieldset>
				<legend align="center"><img src="img/cadeado.png" width="40px" height="40px" /></legend>
				<table
					<tr>
						<td height="37px" style="color: #fff;">Nome:</td>
					</tr>
					<tr>
						<td><input type="text" name="" id="geral-eq-input" required /></td>
					</tr>
					<tr>
						<td height="37px" style="color: #fff;">E-mail:</td>
					</tr>
					<tr>
						<td><input type="email" name="" id="geral-eq-input" required /></td>
					</tr>
					<tr>
						<td height="37px" style="color: #fff;">Telefone:</td>
					</tr>
					<tr>
						<td height="37px"><input type="text" name="" id="geral-eq-input" required /></td>
					</tr>
					<tr>
						<td height="37px" style="color: #fff;">Senha:</td>
					</tr>
					<tr>
						<td colspan="2" height="37px"><input type="password" name="" id="geral-eq-input" required /></td>
					</tr>
					<tr>
						<td height="37px" style="color: #fff;">Repita a Senha</td>
					</tr>
					<tr>
						<td><input type="password" name="" id="geral-eq-input" required /></td>
					</tr>
					<tr>
						<td colspan="2" height="50px">
							<input type="submit" name="" value="Cadastrar" id="env" />
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
	<div id="window-cadastro-equipamentos">
		<div id="title">
			<span>Preencha corretamente. (Cadastro de Equipamentos)</span>
			<div class="fechar-cadastro-equipamentos">X</div>
		</div>
		<form action="receber.php" method="POST" class="eq">
			<fieldset>
				<legend align="center"><img src="img/cadeado.png" width="40px" height="40px" /></legend>
				<table
					<tr>
						<td height="37px" style="color: #fff;">Modelo:</td>
					</tr>
					<tr>
						<td><input type="text" name="" id="geral-eq-input"></td>
					</tr>
					<tr>
						<td height="37px" style="color: #fff;">Quantidade:</td>
					</tr>
					<tr>
						<td><input type="number" name="" id="geral-eq-input"></td>
					</tr>
					<tr>
						<td height="37px" style="color: #fff;">Descrição:</td>
					</tr>
					<tr>
						<td colspan="2" height="37px"><textarea></textarea></td>
					</tr>
					<tr>
						<td colspan="2" height="37px">
							<input type="submit" name="" value="Cadastrar" id="env" />
						</td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>