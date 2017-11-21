<?php

$servidor='localhost';
$usuario='root';
$senha='';
$banco="cons";

$con=mysqli_connect($servidor,$usuario,$senha);
$sql=mysqli_select_db($con,$banco);

/*if($sql){
	echo "Conectado";
}else{

	echo "erro";
}
*/


?>