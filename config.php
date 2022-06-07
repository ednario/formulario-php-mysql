<?php 
    $dbHost = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "hardcodeform";

    //create connection
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // if($conexao->connect_error){
    //     echo "Error: ".$conexao->connect_error;
    // }
    // else{
    //     echo "Conexão bem sucedida";
    // }
?>