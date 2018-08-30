<!DOCTYPE html>
<html>
<head>
	<title>Exercício 04</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<h1>Exercício 04</h1>
			</td>
		</tr>
		<br/><br/><br/><br/><br/><br/><br/>
		<tr>
			<td>
				<p class="enunciado">Efetue um algorítmo PHP que inicialize variáveis A, B, C, e D. Efetue a soma entre A e C, a multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da multiplicação. Imprima:</p>
				<ul>
					<li>"A+C é maior que B*D"</li>
					<li>"A+C é menor que B*D"</li>
					<li>"A+C é igual a B*D"</li>
				</ul>
				<p class="resultado">
					<?php
						$A = 5;
						$B = 9;
						$C = 2;
						$D = 8;
						if (($A+$C)>($B*$D)) 
							echo "R: A+C é maior que B*D";
						elseif (($A+$C)<($B*$D)) 
							echo "R: A+C é menor que B*D";						
						else 
							echo "R: A+C é igual a B*D";						
					?>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="Ex5.php">AVANÇAR</a><br/><a href="Ex3.php">VOLTAR</a></td>
		</tr>
	</table>
</body>
</html>