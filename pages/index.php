<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="../css/estilizacaobase.css"/>
		<link rel="stylesheet" type="text/css" href="../css/rodape.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com"/> <!~~fontes~~>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
		<link rel="shortcut icon" href= "../img/icon.png">
		<title>Sitema de Login | Inplementação do banco de dados</title>

		<style>
            a:link, a:visited {
                color: #3AA436;
                font-size: 15px;
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
            }

            /*Pagina login*/
            #login {
                display: flex;
                height: 90vh;
                justify-content: center;
            }

            .logo h1 img {
                height: 80px;
                display: block;
                margin: auto;
                padding-top: 40px;
            }

            .box {
                background: #000000;
                width: 400px;
                height: 300px;
                border-radius: 80px 0;
                display: block;
                margin: auto;
                margin-top: 40px;
            }

            .input {
                padding-top: 45px;
            }

            .data {
                display: flex;
                flex-direction: column;
                width: 250px;
                margin: auto;
                padding-top: 20px;
            }

            .recovery {
                padding-top: 10px;
                padding-left: 75px;
            }

            .botton .submit {
                display: block;
                margin: auto;
                margin-top: 25px;
                border-radius: 20px;
                width: 100px;
                height: 25px;
                color: #ffffff;
                background-color: #3AA436;
            }

            .usser {
                text-align: center;
                padding-top: 5px;
            }
        </style>
		
	</head>
	<body>
		<div id="Login">
			<header>
				<div class="logo"><h1><a><img src="../img/login-logo.png"/></a></h1></div> 
			    	<div class="box">
					    <form>
						    <div class="input">
						        <div class="data">  <!~~entrada de informação~~>
							        <label for="usuario">Usuário:</label>
							        <input type="text" id="usuario" name="usuario" required />
						        </div>
						        <div class="data">
							        <label for="password">Senha:</label>
							        <input type="password" id="password" name="senha" required />
						        </div>
						        <!~~ links e botões~~!>
						        <div class="recovery"><a href="Rec-senha.php">Esqueceu a senha?</a></div>
						        <div class="botton"><input type="submit" value="Login" class="submit" name="Login"/></div>
						        <div class="usser"><a href="Novo.php">Criar conta</a></div>
                            </div>
					    </form>
				   </div>
			</header>
		</div>
	   </body>
    </html>
    <footer class="footer">
        <span>&copy; Segunda parte do Projeto - sistema de login 2022</span>
    </footer>