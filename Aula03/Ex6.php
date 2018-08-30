<!DOCTYPE html>
<html>
<head>
	<title>Exercício 06</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="CSS/Estilo.css">	
</head>
<body>
	<table align="center">
		<tr>
			<td>
				<h1>Exercício 06</h1>
			</td>
		</tr>
		<br/><br/><br/><br/><br/><br/><br/>
		<tr>
			<td>
				<p class="enunciado">Efetue um algorítmo PHP que inicialize variáveis referente a quatro notas de um aluno, calcule e imprima a média aritmética das notas e a mensagem de aprovado para média superior ou igual a 6.0 ou a mensagem de reprovado para média inferior a 6.0. </p>
				<p class="resultado">
					<?php
						$nota1 = 6;
						$nota2 = 5;
						$nota3 = 7;
						$nota4 = 8;
						if((($nota4+$nota3+$nota2+$nota1)/4)>=6.0)
							echo "R: Aprovado.";
						else
							echo "R: Reprovado.";	
					?>
				</p>
			</td>
		</tr>
		<tr>
			<td align="center"><a href="Ex7.php">AVANÇAR</a><br/><a href="Ex5.php">VOLTAR</a></td>
		</tr>
	</table>
</body>
</html>