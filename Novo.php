<?php
	if(isset($_POST['submit']))
	{
		print_r($_POST['nome']);
		print_r($_POST['sobrenome']);
		print_r($_POST['email']);


	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/estilizacaobase.css"/>
	<link rel="stylesheet" type="text/css" href="../css/cadastro.css"/> <!~~ estilização da pag~~>
	<link rel="stylesheet" type="text/css" href="../css/rodape.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com"/> <!~~fontes~~>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
	<link rel="shortcut icon" href="../img/icon.png">
	<title>Criar Conta - Sitema de Login</title>
</head>
<body>
	<div id="usser">
		<h1><img src="../img/login-logo.png"></h1>
		<div class="box">
		<h2>Novo Usuário</h2>
		<div class="form">
			<form action="Novo.php" method="post"><!~~adicionar php~~>
				<div class="name">
					<input type="text" placeholder="Nome" name="nome" required />
					<input type="text" placeholder="Sobrenome" name="Sobrenome" required />
				</div>
				<div class="idname"><input type="text" placeholder="Nome de usuário" name="Id" required></div>
				<div class="e-mail"> <input type="email" placeholder="nome@email.com" name="email" required></div>
				<div class="password">
					<input type="password" placeholder="Senha" name="Senha" name="senha" required />
					<input type="password" placeholder="Confirme a senha" name="Senha" required />
			</div>
		</div>
		<div class="botton">
			<div button type="button" value="enviar" class="button2"><a href="../index.html">Fazer login</a></button></div>
			<div button type="submit" value="submit" class="button" onclick=""><button>Criar</button></div>
		</div>
		</form>
		</div>
	</div>
</body>
</html>