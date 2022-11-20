<?php 
	include_once('con.php')
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$usuario = $_POST['id'];
	$email = $_POST['email'];
	$senha = $_POST['senha'];

	$sql_cadastrosl = "INSERT INTO tb_usuarios (nome, sobrenome, usuario, email, senha)
						values("$nome", "$sobrenome", "$usuario", "$email", "$senha");
	$cadastro = msqli_query($con, $sql_cadastrosl);
	$linha_afetada = mysqli_affected_rows($conector);
	mysqli_close($con;)
?>