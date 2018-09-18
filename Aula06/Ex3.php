<!DOCTYPE html>
<html>
<head>
	<title>Atividade 2 | Ex 3</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<?php include('funcaoEx1.php')?>
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
			<h2>DIGITE UM NÚMERO DE UM MÊS</h2>
			<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<label class="textoInput">Número do mês:</label>
				<input type="number" name="num"/>
				<input class="btn" type="submit" name="botao" value="PROCESSAR"/>
			</form>
			<?php
				if(!empty($_POST['botao'])){
					?><br/><hr/><?php
					$valor = $_POST['num'];
					calcular($valor);
				}
			?>
		</div>
	</div>
	</div>
	<footer id="rodape">
		<label id="textoRodape">Todos direitos reservados ao Bacic.</label>
	</footer>
</body>
</html>