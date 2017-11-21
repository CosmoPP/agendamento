<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
</head>

<body>


<?php
$nome = array(5);
$nome[0] = 'Israel';
$nome[1] = 'Aparecida';
$nome[2] = 'Adailson';

?>
<table border="1px">
	<tr>
    	<td>Aula</td>
     	<td colspan="4">Equipamento</td> 
        <td>Professores</td> 
      
    
            	
    </tr>
    <tr>
    	<td rowspan="5" width="100px" align="center">1ª Aula<br> 7:20 - 8:10</td>
     	<td>Proj</td>
      	<td width="20px" align="center" id="cl">x</td>
       	<td>CX</td>
        <td width="20px"></td>
        <td width="20px"><?php  echo $nome[0];?></td>
             
    </tr>
    <tr>
    	<td>Proj</td>
        <td>x</td>
        <td></td>
        <td></td>
      <td width="20px"><?php  echo $nome[1];?></td>
	</tr>
     <tr>
    	<td>Proj</td>
        <td><font color="#FF0000"><b>
		
		
		<?php
		
		 if(isset($nome[2]) ){
			 echo "x";
		 };
		 
		 ?></b></font></td>
        <td></td>
        <td></td>
       
        <td width="20px"><?php  echo $nome[2];?></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
         
	</tr>
    
   <!-- 2° Aula-->
    <tr>
    	<td rowspan="5" width="100px" align="center">2ª Aula<br> 7:20 - 8:10</td>
     	<td>Proj</td>
      	<td width="20px" align="center" id="cl">x</td>
       	<td>CX</td>
        <td width="20px"></td>
        <td width="20px"></td>
             
    </tr>
    <tr>
    	<td>Proj</td>
        <td>x</td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
     <tr>
    	<td>Proj</td>
        <td><font color="#FF0000"><b>x</b></font></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
         
	</tr>
    
    
    <tr>
    	<td colspan="6" height="40px"></td>
    </tr>
     <!-- 3ºAula -->
    
    <tr>
    	<td rowspan="5" width="100px" align="center">3ª Aula<br> 7:20 - 8:10</td>
     	<td>Proj</td>
      	<td width="20px" align="center" id="cl">x</td>
       	<td>CX</td>
        <td width="20px"></td>
        <td width="20px"></td>
             
    </tr>
    <tr>
    	<td>Proj</td>
        <td>x</td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
     <tr>
    	<td>Proj</td>
        <td><font color="#FF0000"><b>x</b></font></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
         
	</tr>
    
    
    <!-- 4° Aula-->
    <tr>
    	<td rowspan="5" width="100px" align="center">4ª Aula<br> 7:20 - 8:10</td>
     	<td>Proj</td>
      	<td width="20px" align="center" id="cl">x</td>
       	<td>CX</td>
        <td width="20px"></td>
        <td width="20px"></td>
             
    </tr>
    <tr>
    	<td>Proj</td>
        <td>x</td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
     <tr>
    	<td>Proj</td>
        <td><font color="#FF0000"><b>x</b></font></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
         
	</tr>
    
    
    
    <!-- 5° Aula-->
    <tr>
    	<td rowspan="5" width="100px" align="center">5ª Aula<br> 7:20 - 8:10</td>
     	<td>Proj</td>
      	<td width="20px" align="center" id="cl">x</td>
       	<td>CX</td>
        <td width="20px"></td>
        <td width="20px"></td>
             
    </tr>
    <tr>
    	<td>Proj</td>
        <td>x</td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
     <tr>
    	<td>Proj</td>
        <td><font color="#FF0000"><b>x</b></font></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
	</tr>
    <tr>
    	<td>Proj</td>
        <td></td>
        <td></td>
        <td></td>
        <td width="20px"></td>
         
	</tr>
</table>


</body>
</html>