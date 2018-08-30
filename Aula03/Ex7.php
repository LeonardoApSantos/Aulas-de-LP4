<!DOCTYPE html>
<html>
<head>
	<title>Exercício 07</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>
	<table align="center">
		<tr>
			<td >
				<h1>Exercício 07</h1>
			</td>
		</tr>
		<br/><br/><br/><br/><br/><br/><br/>
		<tr>
			<td>
				<p class="enunciado">Efetue um algorítmo PHP que receba a altura e o sexo de uma pessoa, calcule e imprima o seu peso ideal, utilizando as seguintes fôrmulas:</p>
				<ul>
					<li>para homens: (72.7 * H) - 58</li>
					<li>para mulheres: (62.1 * H) - 44.7</li>
				</ul>
				<p class="resultado">
					<?php
						$sexo = "M";
						$altura = 1.71;
						$resultado = 0;

						if ($sexo == "M") {
							$resultado = (72.7*$altura)-58;
							echo "R: Seu peso ideal é $resultado";
						}
						elseif ($sexo == "F") {
							$resultado = (62.1*$altura)-44.7;
							echo "R: Seu peso ideal é $resultado";
						}
						else
							echo "R: Sexo inválido";
					?>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="Ex8.php">AVANÇAR</a><br/><a href="Ex6.php">VOLTAR</a></td>
		</tr>
	</table>
</body>
</html>