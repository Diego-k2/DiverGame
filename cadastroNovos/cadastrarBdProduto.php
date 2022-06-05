<?php

    include "../database.php";

    $nome = $_POST["nome"];
    $ano = $_POST["ano"];
    $criador = $_POST["criador"];
    $classificacao = $_POST["classificacao"];
    $genero = $_POST["genero"];
    $formato = $_POST["formato"];


    $sql = "INSERT INTO ads_vanessa_jogos (jogo_nome, jogo_ano, jogo_criador, jogo_classificacao, jogo_genero, jogo_formato) VALUES ('$nome', '$ano', '$criador', '$classificacao', '$genero', '$formato')";


    if(mysqli_query($conexao, $sql))
    {
        header("Location: ../table/tabela_admin.php");
    }
    else
    {
        echo "Falha ao cadastrar user";
    }