<!-- SCRIPT PARA CADASTRAR OS DADOS DO USUARIO NO SISTEMA, DADOS QUE SERÃO RECEBIDOS PELO CADUSUARIO.PHP

//<?php
    // // VERIFICAR SE OS DADOS DO FORMULARIO ESTÃO CHEGANDO
    
    // if (isset($_POST['btnCadastrar'])){
    //     print_r('nome:' . $_POST['nomeFunc']);
    //     echo '<br>';
    //     print_r('usuario:' . $_POST['usuario']);
    //     echo '<br>';
    //     print_r('senha:' . $_POST['senha']);
    //     echo '<br>';
    //     echo '10';
    // } 

 
 
 
    // APOS VERIFICAR INCLUIR OS DADOS NO BANCO
    if(isset($_POST['btnCadastrar'])) {
        include_once"config.php";
        $nome = $_POST['nomeFunc'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $dataCadastro = $_POST['dataCadastro'];

        $sql = "INSERT INTO cadusuario (nomeFunc, usuario, senha, dtCadastro) VALUES ('$nome', '$usuario', '$senha', NOW())";

        $sqlResult = mysqli_query($conn, $sql);

        header('location: home.php');
    } 
?> -->