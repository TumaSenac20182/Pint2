<?php
  SESSION_start();
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->

	<!--Use o Bootstrap local, caso não tenha conexão.

  <link href="resources/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="css/modern-business.css" rel="stylesheet">-->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

	<title>Login</title>
	<style>
	div{
		align-content: center;
		margin-top: 4%;
	}
	</style>
  </head>
	<body id="LoginForm">
		<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top"></nav>
			<div class="container">
				<div class="login-form">
					<div class="main-div">
						<div class="panel">
							<h2>Login do Administrador</h2>
						</div>
						<form action="#" method="post" onsubmit="validate(); return false;">
							<div class="form-group">
								<input type="email" class="form-control" name="Nemail" id="Iemail" placeholder="Insira seu email" >
							</div>
							<div class="form-group">
								<input type="password" class="form-control" name="Nsenha" id="Isenha" placeholder="Insira sua senha" >
							</div>
							<div class="forgot"></div>
								<button type="submit" class="btn btn-primary">Entrar</button>
								<button type="reset" class="btn btn-primary">Limpar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--Use o Bootstrap local, caso não tenha conexão.

		<script src="resources/jquery/jquery.min.js"></script>
		<script src="resources/bootstrap/js/bootstrap.bundle.min.js"></script>
	-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  </body>
</html>
