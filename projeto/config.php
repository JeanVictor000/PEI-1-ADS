<?php
    $dbHost = 'localHost';
    $dbUsername = 'root';
    $dbPassword = "";
    $dbName = "cadastro-mtvx";

    $conexao = new mysqli ($dbHost,$dbUsername,$dbPassword,$dbName);

    
    //if ($conexao->connect_errno) {
    //    echo "Erro ao conectar ao banco de dados: " . $conexao->connect_error;
     //   exit();
   // } else {
   //     echo "Conexão bem-sucedida!";
   // }

?>