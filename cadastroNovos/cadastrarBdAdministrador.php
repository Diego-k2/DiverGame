(15 sloc)  467 Bytes
   
<?php

    include "../database.php";

    $username = $_POST["nome"];
    $usermail = $_POST["email"];
    $userpass = $_POST["senha"];
    $usertelefone = $_POST["telefone"];


    $sql = "INSERT INTO ads_vanessa_user (nome, email, senha, telefone, profile) VALUES ('$username', '$usermail', '$userpass', '$usertelefone', 0)";


    if(mysqli_query($conexao, $sql))
    {
        header("Location: ../table/tabela_admin.php");
    }
    else
    {
        echo "Falha ao cadastrar user";
    }