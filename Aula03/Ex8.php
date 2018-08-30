<!DOCTYPE html>
<html>
<head>
	<title>Exercício 08</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<h1>Exercício 08</h1>
			</td>
		</tr>
		<br/><br/><br/><br/><br/><br/><br/>
		<tr>
			<td>
				<p class="enunciado">Efetue um algoritmo em PHP que fixado à uma variável (um valor qualquer) e imprima os valores de 0 até o valor recebido, exemplo:</p>
				<ul>
					<li>Valor recebido = 9</li>
					<li>Impressão do programa = 0 1 2 3 4 5 6 7 8 9</li>
				</ul>
				<p class="resultado">
					<?php
						$num = 16;
						for ($i=0; $i <= $num; $i++){
							if ($i==0) 
								echo "R: $i ";
							else
								echo "$i ";
						}
					?>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="Ex9.php">AVANÇAR</a><br/><a href="Ex7.php">VOLTAR</a></td>
		</tr>
	</table>	
</body>
</html>