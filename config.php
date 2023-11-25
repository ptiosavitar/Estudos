<?php

    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbmain = "cadastros";

    $mysqli = new mysqli($servername, $username, $password, $dbmain);

    if($mysqli->error) {

        die("falha ao conectar com o banco de Dados". $mysqli->error);

    }

    // if($conn->connect_error){

    //     die ("Falha na conexão com o banco de dados :(". $conn->connect_error);

    // }else {

    //     echo "Conexão com banco de dados efetuada com sucesso :) <br><br>";

    // }


?>