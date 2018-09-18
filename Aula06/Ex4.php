<!DOCTYPE html>
<html>
<head>
	<title>Atividade 2 | Ex 4</title>
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
			<h2>DIGITE OS VALORES DA EQUAÇÃO</h2>
			<form method="POST" action="destinatarioEx4.php">
				<label class="textoInput">A:</label>
				<input type="number" name="a"/>
				<label class="textoInput">B:</label>
				<input type="number" name="b"/>
				<label class="textoInput">C:</label>
				<input type="number" name="c"/>
				<input class="btn" type="submit" name="botao" value="PROCESSAR"/>
			</form>
		</div>
	</div>
	</div>
	<footer id="rodape">
		<label id="textoRodape">Todos direitos reservados ao Bacic.</label>
	</footer>
</body>
</html>