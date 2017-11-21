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
	<a href="../login.php">
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
							<a href="1.html"><li>Projetor 1º - modelo <br />(reservado/livre)</li></a>
							<a href="2.html"><li>Projetor 2º - modelo <br />(reservado/livre)</li></a>
						</ul>
					</section>
					<section id="n2">
						<ul>
							<a href="3.html"><li>Projetor 3º - modelo <br />(reservado/livre)</li></a>
							<a href="4.html"><li>Projetor 4º - modelo <br />(reservado/livre)</li></a>
						</ul>
					</section>
					<section id="n3">
						<ul>
							<a href="3.html"><li>Projetor 5º - modelo <br />(reservado/livre)</li></a>
							<a href="4.html"><li>Projetor 6º - modelo <br />(reservado/livre)</li></a>
						</ul>
					</section>
				</div>
			</li>
			<li>Dispositivos De Aúdio
				<div class="sub">
					<section id="n1">
						<ul>
							<a href="1.html"><li>Amplificador 1º - modelo (reservado/livre)</li></a>
							<a href="2.html"><li>Amplificador 2º - modelo (reservado/livre)</li></a>
						</ul>
					</section>
					<section id="n2">
						<ul>
							<a href="3.html"><li>Amplificador 3º - modelo (reservado/livre)</li></a>
							<a href="4.html"><li>Amplificador 4º - modelo (reservado/livre)</li></a>
						</ul>
					</section>
					<section id="n3">
						<ul>
							<a href="3.html"><li>Amplificador 5º - modelo (reservado/livre)</li></a>
							<a href="4.html"><li>Amplificador 6º - modelo (reservado/livre)</li></a>
						</ul>
					</section>
				</div>
			</li>
			<li>Televisores
			<div class="sub">
					<section id="n1">
						<ul>
							<a href="1.html"><li>Televisor 1º - modelo <br />(reservado/livre)</li></a>
							<a href="2.html"><li>Televisor 2º - modelo <br />(reservado/livre)</li></a>
						</ul>
					</section>
					<section id="n2">
						<ul>
							<a href="3.html"><li>Televisor 3º - modelo <br />(reservado/livre)</li></a>
							<a href="4.html"><li>Televisor 4º - modelo <br />(reservado/livre)</li></a>
						</ul>
					</section>
					<section id="n3">
						<ul>
							<a href="3.html"><li>Televisor 5º - modelo <br />(reservado/livre)</li></a>
							<a href="4.html"><li>Televisor 6º - modelo <br />(reservado/livre)</li></a>
						</ul>
					</section>
				</div>
			</li>
			<li class="agendar">Agendar</li>
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
		<div id="dvs">
			<table border="1px">
				<tr>
					<td align="center"><input type="checkbox" class="pj-1"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Projetor 1º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-2"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Projetor 2º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-3"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Projetor 3º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-4"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Projetor 4º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-5"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Projetor 5º</td>
				</tr>
			</table>
			<table border="1px" class="abaixo">
				<tr>
					<td align="center"><input type="checkbox" class="pj-1"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Televisor 1º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-2"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Televisor 2º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-3"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Televisor 3º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-4"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Televisor 4º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-5"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Televisor 5º</td>
				</tr>
			</table>
		</div>
		<div id="dvs">
			<table border="1px">
				<tr>
					<td align="center"><input type="checkbox" class="pj-1"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Amplificador 1º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-2"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Amplificador 2º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-3"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Amplificador 3º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-4"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Amplificador 4º</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-5"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Amplificador 5º</td>
				</tr>
			</table>
		</div>
		<div id="dvs">
			<table border="1px #fff">
				<tr>
					<td align="center"><input type="checkbox" class="pj-1"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 01</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-1"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 02</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-1"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 03</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-1"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 04</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-1"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 05</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-2"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 06</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-3"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 07</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-4"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 08</td>
				</tr>
				<tr>
					<td align="center"><input type="checkbox" class="pj-5"></td>
					<td align="center" width="180px" height="40px" style="color: #fff;">Aula - 09</td>
				</tr>
			</table>
            
		</div>
       
		<div id="title">
			<span>Preencha todos os campos para efetuar o agendamento.</span>
			<div class="fechar">X</div>
		</div>
       
	</div>
      
</div>

</body>
</html>