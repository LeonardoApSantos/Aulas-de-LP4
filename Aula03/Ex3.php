<!DOCTYPE html>
<html>
<head>
	<title>Exercício 03</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<h1>Exercício 03</h1>
			</td>
		</tr>
		<br/><br/><br/><br/><br/><br/><br/>
		<tr>
			<td>
				<p class="enunciado">Efetue um código em PHP que inicialize uma variável com um determinado valor e verifique se esse valor é positivo, negativo ou igual a zero. Imprima na tela:</p>
				<ul>
					<li>"Valor Positivo"</li>
					<li>"Valor Negativo"</li>
					<li>"Igual a Zero"</li>
				</ul>
				<p class="resultado">
					<?php
						$numero = 5;
						if ($numero > 0)
							echo "R: Valor Positivo";
						elseif ($numero < 0)
							echo "R: Valor Negativo";
						else
							echo "R: Igual a Zero";
					?>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="Ex4.php">AVANÇAR</a><br/><a href="Ex2.php">VOLTAR</a></td>
		</tr>
	</table>
</body>
</html>