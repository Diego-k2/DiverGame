<?php 

        include_once "../database.php";


        $id = $_GET["id"];

        $sql = "SELECT * FROM ads_vanessa_jogos WHERE id = $id";


        $resultado = mysqli_query($conexao, $sql);
        
        $dados = mysqli_fetch_array($resultado);

?>

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
				<form class="login100-form validate-form" action="atualizarBdProduto.php" method="POST">
					<span class="login100-form-title p-b-43">
						Atualizar produto
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Um nome é necessario">
						<label>Id</label>
						<input class="input100" type="text" name="id" value="<?php echo $dados['id']?>" readonly>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Um nome é necessario">
						<label>Nome</label>
						<input class="input100" type="text" name="nome" value="<?php echo $dados['jogo_nome']?>">
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Um ano é necessario">
						<label>Ano</label>
						<input class="input100" type="text" name="ano" value="<?php echo $dados['jogo_ano']?>">
					</div>
					

                    <div class="wrap-input100 validate-input" data-validate = "Um criador é necessario">
						<label>Criador</label>
						<input class="input100" type="text" name="criador" value="<?php echo $dados['jogo_criador']?>">
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Uma classificação é necessaria">
						<label>Classificação</label>
						<input class="input100" type="text" name="classificacao" value="<?php echo $dados['jogo_classificacao']?>">
					</div>

                    <div class="wrap-input100 validate-input" data-validate = "Um genero é necessario">
						<label>Gênero</label>
						<input class="input100" type="text" name="genero" value="<?php echo $dados['jogo_genero']?>">
					</div>
			
                    <div class="wrap-input100 validate-input" data-validate = "Um formato é necessario">
						<label>Formato</label>
						<input class="input100" type="text" name="formato" value="<?php echo $dados['jogo_formato']?>">
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Atualizar produtos
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							Não deseja mais atualizar? <a href="../table/tabela_admin.php"> Clique aqui</a>
						</span>
					</div>
					
					
				</form>

				<div class="login100-more" style="background-image: url('images/bg-01.jpg');">
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