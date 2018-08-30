<!DOCTYPE html>
<html>
<head>
	<title>Exercício 02</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<h1>Exercício 02</h1>
			</td>
		</tr>
		<br/><br/><br/><br/><br/><br/><br/>
		<tr>
			<td>
				<p class="enunciado">Escreva um programa em PHP que tenha uma variável que armazena um formato de data no padrão "dia/mês/ano hora:min" em seguida mostre a data atual e a hora (função interna do servidor PHP) no padrão solicitado. </p>
				<p class="resultado">
					<?php
						$data = date('d/m/Y H:i');
						echo "R: $data";
					?>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="Ex3.php">AVANÇAR</a><br/><a href="Ex1.php">VOLTAR</a></td>
		</tr>
	</table>
</body>
</html>