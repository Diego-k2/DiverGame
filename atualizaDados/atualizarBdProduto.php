<?php

include_once "../database.php";

$id = $_POST['id'];
$nome = $_POST["nome"];
$ano = $_POST["ano"];
$criador = $_POST["criador"];
$classificacao = $_POST["classificacao"];
$genero = $_POST["genero"];
$formato = $_POST["formato"];

$sql = "UPDATE ads_vanessa_jogos SET jogo_nome = '$nome', jogo_ano = '$ano', jogo_criador = '$criador', jogo_classificacao = '$classificacao', jogo_genero = '$genero', jogo_formato = '$formato' WHERE id = $id";

if(mysqli_query($conexao, $sql))
    {
        header("Location: ../table/tabela_admin.php");
    }
    else
    {
        echo "Falha ao cadastrar Caminhoneiro";
    }

?>