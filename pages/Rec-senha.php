<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="../css/normalize.css"/>
		<link rel="stylesheet" type="text/css" href="../css/estilizacaobase.css"/>
		<link rel="stylesheet" type="text/css" href="../css/recovery.css"/> <!~~ estilização da pag~~>
		<link rel="stylesheet" type="text/css" href="../css/rodape.css"/>
		<link rel="preconnect" href="https://fonts.googleapis.com"/> <!~~fontes~~>
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
		<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"/>
		<link rel="shortcut icon" href="../img/icon.png">
		<title>Recuperar senha - Sitema de Login</title>
		<style>
            #recovery-pass {
                display: flex;
                height: 95vh;
                justify-content: center;
            }

            .boxpass {
                background: #000000;
                display: block;
                margin: auto;
                padding: 40px;
                border-radius: 80px;
            }

                .boxpass h2 {
                    padding-top:-70px;
                    font-size: 20px;
                }

            h6 {
                font-size: 13px;
                font-family: sans-serif;
            }

            .bar {
                float: left;
                display: inline;
            }

                .bar input {
                    width: 350px;
                    height: 25px;
                }

                .bar button {
                    background-color: #3AA436;
                    color: #ffffff;
                    height: 30px;
                    width: 70px;
                    align-items: center;
                    border-radius: 0 20px 0 20px;
                }

            a {
                padding-top: 8px;
                padding-left:20px;
                color: #3AA436;
                text-decoration: none;
                display: flex;
            }
                    a:hover {
                        text-decoration: underline;
                    }

            footer {
                margin-top: 20px;
            }
		</style>
	</head>

	<body>
		<header>
			<div id="recovery-pass">
				<div class="boxpass">
					<h2>Esqueceu sua senha?</h2>
					<div class="input1">
						<form action="" method="post">
							<h6>Informe o E-mail de recuperação para enviarmos uma nova senha.</h6>
							<div class="bar"><input type="email" name="email" required></div>
							<div class="bar"><button type="submit" value="enviar" class="button">Enviar</button></div>
							<a href="index.php">Cancelar</a>
						</form>
					</div>
				</div>
			</div>
		</header>
	</body>
</html>
<footer class="footer">
	<span>&copy; Projeto - sistema de login 2022</span>
</footer>