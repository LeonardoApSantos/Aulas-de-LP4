<!DOCTYPE html>
<html>
<head>
	<title>Atividade 2 | Ex 4 | Resposta</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="conteudo">
		<div id="principal">
			<div id="cabecalho">
				<div id="areaCabecalho">
					<h1 id="logo"><span>ATIVIDADE 2</span></h1>
					<div id="menu">
						<a href="Ex1.php">EXERCÍCIO 1</a>
						<a href="Ex2.php">EXERCÍCIO 2</a>
						<a href="Ex3.php">EXERCÍCIO 3</a>
						<a href="Ex4.php">EXERCÍCIO 4</a>
					</div>
				</div>
			</div>
		<div class="form">
			<h2>O RESULTADO É:</h2>
				<?php
					function Bascara($x,$y,$z){
						$delta=sqrt(($y*$y)-4*$x*$z);
						$x1=(-$y+$delta)/2*$x;
						$x2=((-$y-$delta)/2*$x);
						echo "Delta = $delta<br/>";
						echo "X1 = $x1<br/>";
						echo "X2 = $x2";
					}

					$ValorA=$_POST['a'];
					$ValorB=$_POST['b'];
					$ValorC=$_POST['c'];
					Bascara($ValorA,$ValorB,$ValorC);
					
				?>
		</div>
	</div>
	</div>
	<footer id="rodape">
		<label id="textoRodape">Todos direitos reservados ao Bacic.</label>
	</footer>
</body>
</html>