<?php 
        include_once "../database.php";

        $id =$_GET["id"];

        $sql = "DELETE FROM ads_vanessa_jogos WHERE id = '$id'";

         if(mysqli_query($conexao, $sql)){
                 header("Location: ../table/tabela_admin.php");
         } else {
                 echo "falha na exclusão";
         }

?>