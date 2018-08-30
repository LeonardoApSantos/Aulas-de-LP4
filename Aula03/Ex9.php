<!DOCTYPE html>
<html>
<head>
	<title>Exercício 09</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">	
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<h1>Exercício 09</h1>
			</td>
		</tr>
		<br/><br/><br/><br/><br/><br/><br/>
		<tr>
			<td>
				<p class="enunciado">Efetue um algoritmo em PHP que receba um valor qualquer e calcule o seu fatorial (!), sabendo que o fatorial de um número é: 7! = 7*6*5*4*3*2*1</p>
				<p class="resultado">
					<?php
						$num=7;
						$help=1;
						for ($i=$num; $i >=1 ; $i--)
							$help *= $i;
						echo "R: O fatorial de $num é igual a $help";
					?>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="Ex8.php">VOLTAR</a></td>
		</tr>
	</table>	
</body>
</html>