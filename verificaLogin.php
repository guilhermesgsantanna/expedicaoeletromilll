<!-- verifica se os dados de login estao corretos, se estiver correto, loga no sistema, se nao, volta para a home -->

<?php

    //INICIAR A SESSÃO
    session_start();
    // VERIFICAR SE OS DADOS ESTÃO CHEGANDO
    // print_r($_REQUEST) . "<br>";

    if(isset($_POST['btnEntrar']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){
        //ACESSAR O SISTEMA
        include_once('config.php');
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        // VERIFICAR SE OS DADOS ESTÃO CHEGANDO NO FORMULARIO
        // print_r($usuario);
        // echo '<br>';
        // print_r($senha);



        $sql = "SELECT * FROM cadusuario WHERE usuario = '$usuario' and senha = '$senha'";
        $sqlResult = $conn->query($sql);

        // VERIFICAR SE O REGISTRO ESTA CORRETO
        if(mysqli_num_rows($sqlResult) <1) {
            // APAGAR OS DADOS RECEBIDOS E VOLTAR PARA A TELA DE LOGIN SE NAO 
            unset($_SESSION['usuario']);
            unset($_SESSION['senha']);
            header('location:home.php');
        } else {
            $_SESSION['usuario'] = $usuario;
            $_SESSION['senha'] = $senha;
            header('location:sistema.php');
        }

    } else {
        header('location: home.php');
    }  
?>

<!-- 
    session_start();
    print_r($_SESSION);
    include_once "config.php";

    // VEFICAR O USUARIO E SENHA PARA LOGAR NO SISTEMA E MANTER LOGADO, SE NAO VOLTAR PARA TELA DE LOGIN
    if ((!isset($_SESSION['email']) ==true) and (!isset($_SESSION['senha'])==true)) {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('location: login.php.php');
    }
    // MANTER LOGADO AO ACESSAR O USUARIO
    $logado=$_SESSION['email']; -->
