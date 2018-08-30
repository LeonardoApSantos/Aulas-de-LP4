<!DOCTYPE html>
<html>
<head>
	<title>Exercício 05</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<h1>Exercício 05</h1>
			</td>
		</tr>
		<br/><br/><br/><br/><br/><br/><br/>
		<tr>
			<td>
				<p class="enunciado">Efetue um algorítmo PHP que inicialize varíaveis para os valores A, B e imprima-os em ordem crescente em relação aos seus valores.</p>
				<p class="resultado">
					<?php
						$A = 8;
						$B = 1;
						if($A>$B)
							echo "R: $B $A";
						elseif($A<$B)
							echo "R: $A $B";
						else
							echo "R: $A $B";
					?>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="Ex6.php">AVANÇAR</a><br/><a href="Ex4.php">VOLTAR</a></td>
		</tr>
	</table>
</body>
</html>