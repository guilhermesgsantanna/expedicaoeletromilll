<?php
    
    
    if(isset($_POST['btnCadastrar'])){
        include_once("config.php");

        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];
        $dataCadastro = $_POST['dataCadastro'];

        $sql="INSERT INTO cadmotorista (nome, cpf, telefone, dtCadastro) VALUES ('$nome', '$cpf', '$telefone', NOW())";

        $sqlResult = mysqli_query($conn, $sql);
        
        header('location: sistema.php');        
    }
?>