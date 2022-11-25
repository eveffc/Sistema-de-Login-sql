
<?php
    include_once '../config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
	<link rel="stylesheet" type="text/css" href="../css/estilizacaobase.css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com"/> <!~~fontes~~>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
	<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
	<link rel="shortcut icon" href="../img/icon.png">
	<title>Criar Conta - Sitema de Login</title>

	<style>

        #usser {
            height: 95vh;
        }
        h1 img {
            float: left;
            width: 400px;
            margin: 200px 100px;
            padding-top: 30px;
            padding-left: 30px;
        }

        h2 {
            margin-top: 20px;
        }

        .box {
            float: right;
            background: #000000;
            height: 78%;
            display: block;
            margin-top:70px;
            margin-right: 90px;
            padding: 70px 60px;
            border-radius: 80px 0;
        }

        .form input {
            height: 25px;
            margin: 5px;
            margin-top: 15px;
        }

        .name input {
            width: 200px;
        }

        .email input, .idname input {
            width: 421px;
        }

        .password input {
            width: 200px;
        }

        .button2 {
            float: left;
            margin-left: 5px;
            padding-top: 10px;
        }

            .button2 a {
                color: #3AA436;
                text-decoration: none;
            }

                .button2 a:hover {
                    text-decoration: underline;
                }

        .button button {
            float: right;
            margin-right: 5px;
            margin-top: 5px;
            height: 30px;
            width: 70px;
            border-radius: 0 20px 0 20px;
            background-color: #3AA436;
            color: #ffffff;
        }
	</style>
</head>
<body>
	<div id="usser">
		<div class="img"><h1><img src="../img/login-logo.png"></h1></div>
        <div>
            <div class="box">
                <h2>Novo Usuário</h2>
                 
                 <?php  

                    $data=filter_input_array(INPUT_POST);
                    if (!empty($data)) {
                        var_dump($data);

                    $nome="nome";
                    $sobrenome ="sobrenome";
                    $usuario = "usuario";
                    $email = "email";
                    $senha="senha";

                    $conn=("INSERT INTO cadastro(Nome, Sobrenome, Usuario, Email, Senha) values(:nome, :sobrenome, :usuario, :email, :senha)");
                       

                       $conn -> execute();
                    }
                ?>
                <div class="form">
                    <form action="" method="post">
                        <!~~adicionar php~~>
                        <div class="name">
                            <input type="text" placeholder="Nome" name="nome" required />
                       
                            <input type="text" placeholder="Sobrenome" name=sobrenome required />
                            
                        </div>
                        <div class="idname"><input type="text" placeholder="Usuário" name="usuario" required /></div>
                        
                        <div class="email"><input type="email" placeholder="E-mail" name="email" required /></div>
                         

                        <div class="password">
                            <input type="password" placeholder="Senha" name="senha" required />
                             
                            <input type="password" placeholder="Confirme a Senha" name="senha" required />
                             
                        </div>
                        <div class="botton">
                            <div class="button2"><a href="index.php">Fazer login</a></div>
                            <div class="button"><button type="submit" onclick="">Criar</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
</body>
</html>