<?php

    $servidor = "Localhost";
    $usuario = "root";
    $senha = "";
    $bdName = "bd_cadastro";


    $conectaBanco = new mysqli($servidor,$usuario,$senha,$bdName);
    

    // if($conectaBanco->connect_errno){
    //     echo "erro conexão";
    // } else {
    //     echo "Sucesso conexão";
    // }
?>