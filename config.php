<!-- CONEXÃO COM O BANCO DE DADOS -->

<?php

    $dbHost = 'localhost';
    $dbUserName= 'root';
    $dbPassword = '';
    $dbName = 'expedicao-eletromil';

    $conn = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);

    if ($conn->connect_errno) {
        echo "Deu erro";
    } else {
        echo "Conectado com sucesso";
    }
?>