<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Novo administrador</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="image/png" sizes="32x32" rel="icon" href="../assets/img/icons8-controle-32.png">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="cadastrarBdAdministrador.php" method="POST">
					<span class="login100-form-title p-b-43">
						Cadastrar novo Administrador
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Um nome é necessario">
						<input class="input100" type="text" name="nome">
						<span class="focus-input100"></span>
						<span class="label-input100">Nome</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Um email válido é necessario: ex@abc.xyz">
						<input class="input100" type="text" name="email">
						<span class="focus-input100"></span>
						<span class="label-input100">Email</span>
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Uma senha é necessaria">
						<input class="input100" type="password" name="senha">
						<span class="focus-input100"></span>
						<span class="label-input100">Senha</span>
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Um nome é necessario">
						<input class="input100" type="text" name="telefone">
						<span class="focus-input100"></span>
						<span class="label-input100">Telefone</span>
					</div>
			

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Cadastrar
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Não deseja mais acrescentar? <a href="../table/tabela_admin.php"> Clique aqui</a>
						</span>
					</div>
					
					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-02.jpg');">
				</div>
			</div>
		</div>
	</div>
	
	

	
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>