<!DOCTYPE html>
<html>
<head>
	<title>Atividade 2 | Ex 2</title>
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
			<label>Dica</label>
			<label>E-mail: bacic2018@gmail.com</label>
			<label>Senha: fernandoRoots2018</label>
		</div>
		<div class="form">
			<h2>FAÇA O LOGIN</h2>
			<form method="POST">
				<label class="textoInput">E-mail:</label>
				<input type="text" name="email"/>
				<label class="textoInput">Senha:</label>
				<input type="password" name="senha"/>
				<input class="btn" type="submit" name="botao" value="PROCESSAR"/>
			</form>
			<?php
				function verificaLogin($x,$y){
					if($x==$_POST['email'] && $y==$_POST['senha']){
						?><br/><hr/><?php
						echo "Bem-vindo professor Bacic!<br/>
						E-mail: bacic2018@gmail.com<br/>
						Senha: fernandoRoots2018";
					}elseif (!($x==$_POST['email']) || !($y==$_POST['senha'])) {
						?><br/><hr/><?php
						echo "Seu email ou senha estão incorretos";
					}
				}
				if(!empty($_POST['botao'])){
					$email="bacic2018@gmail.com";
					$senha="fernandoRoots2018";
					verificaLogin($email,$senha);
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