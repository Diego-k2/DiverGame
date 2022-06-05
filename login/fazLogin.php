<?php

    include "../database.php";


    $emailUser = $_POST["email"];
    $senhaUser = $_POST["senha"]; 


    $sql = "SELECT * FROM ads_diego_usuarios WHERE email ='$emailUser' AND senha = '$senhaUser' AND perfil LIKE '%1%'";
    $sql2 = "SELECT * FROM ads_diego_usuarios WHERE email ='$emailUser' AND senha = '$senhaUser' AND perfil LIKE '%0%'";

    $verifica = mysqli_query($conexao, $sql);
    $verifica2 = mysqli_query($conexao, $sql2);

    $dados = mysqli_fetch_array($verifica);

    if (mysqli_num_rows($verifica)<=0){
        if (mysqli_num_rows($verifica2)<=0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login.html';</script>";
        }else{
            header("Location: ../table/tabela_admin.php");
        }
    die();
    }else{
        header("Location: ../table/tabela_cliente.php");
    }

    ?>