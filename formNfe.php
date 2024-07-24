<?php

    if(isset($_POST['btnCadNfe'])) {
        include_once "config.php";

        $nfe = $_POST['nfe'];
        $cnpj = $_POST['cnpj'];
        $cliente = $_POST['cliente'];
        $dtNfe = $_POST['dtNfe'];
        $dtEntrega = $_POST['dtEntrega'];
        $canhoto = $_POST['canhoto'];
        $carro = $_POST['carro'];
        $motorista = $_POST['motorista'];
        $dtCadastro = $_POST['dtCadastro'];

        // echo '<br>';
        // print_r($nfe);
        // echo '<br>';
        // print_r($cnpj);
        // echo '<br>';
        // print_r($cliente);
        // echo '<br>';
        // print_r($dtNfe);
        // echo '<br>';
        // print_r($dtEntrega);
        // echo '<br>';
        // print_r($canhoto);
        // echo '<br>';
        // print_r($carro);
        // echo '<br>';
        // print_r($motorista);
        // echo '<br>';
        // print_r($dtCadastro);
        
        
        $sqlNfe = "INSERT INTO cadnfe (nfe, cnpj, cliente, dtNfe, dtEntrega, canhoto, carro, motorista, dtCadastro) VALUES ('$nfe', '$cnpj', '$cliente', '$dtNfe', '$dtEntrega', '$canhoto', '$carro', '$motorista', NOW())";

        $sqlNfeResult = mysqli_query($conn, $sqlNfe);

        header('location: sistema.php');
    
    }

?>