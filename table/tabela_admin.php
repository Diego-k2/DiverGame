<?php


    include "../database.php";


	$sql = "SELECT * FROM `ads_vanessa_jogos`"; 

    $resultado = mysqli_query($conexao, $sql);

?>


<!doctype html>
<html lang="pt-br">
  <head>
  	<title>Tabela Administrador</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	<link type="image/png" sizes="32x32" rel="icon" href="../assets/img/icons8-controle-32.png">


	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"><img src="https://img.icons8.com/clouds/256/undefined/apple-arcade.png"/></h2>
				</div>
                
			</div>

            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
					<a href="../cadastroNovos/produtoNovo.php" class="btn btn-primary">Adicione um novo produto</a>
                    <a href="../cadastroNovos/administradorNovo.php" class="btn btn-success">Adicione um novo administrador</a>
                    <a href="../login/login.php" class="btn btn-warning">Sair</a>
				</div>
			</div>
           
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table">
					    <thead class="thead-primary">
					      <tr>
					        <th>Id</th>
					        <th>Nome</th>
					        <th>Ano</th>
					        <th>Criador</th>
					        <th>Classificação</th>
					        <th>Gênero</th>
							<th>Formato</th>
							<th>Ações</th>
							<th></th>
					      </tr>
					    </thead>
						
					    <tbody>
                        <?php while($dados = mysqli_fetch_array($resultado)) { ?>
					      <tr>
					        <td scope="row" class="scope" ><?php echo $dados['id']?></td>
					        <td><?php echo $dados['jogo_nome']?></td>
                            <td><?php echo $dados['jogo_ano']?></td>
					        <td><?php echo $dados['jogo_criador']?></td>
					        <td><?php echo $dados['jogo_classificacao']?></td>
					        <td><?php echo $dados['jogo_genero']?></td>
                            <td><?php echo $dados['jogo_formato']?></td>
					        <td><a href="../atualizaDados/editaProduto.php?id=<?php echo $dados['id']?>"><img src="https://img.icons8.com/material-outlined/24/undefined/pencil--v2.png"/></a></td>
                            <td><a href="../atualizaDados/deleteProduto.php?id=<?php echo $dados['id']?>"><img src="https://img.icons8.com/material-outlined/24/undefined/trash--v1.png"/></a></td>
					      </tr>
                        <?php } ?>
					    </tbody>
					  </table>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

