<!DOCTYPE html>
<html>
<head>
	<title>ADMINISTRADOR</title>
</head>
<body>

<?php 
session_start();

if($_SESSION['nome']){
	echo "<font color=#993300>"." Bem vindo(a) " ." "."<font color=#0000CC>". $_SESSION['nome'];
	}else{
	
		header('Location:login.php');
		echo " Úsuario ou Senha está correto " ;
		
	}
	

?>
</body>
</html>
