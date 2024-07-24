<!-- TELA PRINCIPAL -->
<?php include_once 'verificaSessao.php'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-sistema.css">
</head>
<body>
    <!-- BARRA DE NAVEGAÇÃO -->
    <nav class="nav-bar">
        <img src="img/logo-eletromil.png" alt="logoEletromil">

        <fieldset>
                <legend>Cadastrar</legend>
                <a href="cadMotorista.php">Cadastrar Motorista</a>
                <a href="cadNfe.php">Cadastrar NFe</a>
                <a href="cadCarro.php">Cadastrar carro</a>
            </fieldset>
        
            <fieldset>
                <legend>Consultar</legend>
                <a href="consulta/formConsMotorista.php">Motoristas</a>
                <a href="consulta/formConsUsuario.php">Usuários</a>
                <a href="consulta/formConsNfe.php">NFe</a>
                <a href="consulta/formConsCarro.php">Carros</a>
            </fieldset>       

        <a href="sair.php">Sair</a>
    </nav>

    <!-- CONTAINER COM OS DADOS DO CORPO DA PÁGINA -->
    <div class="container">

        <div class="box">            
            <img src="img/eletromil.png" alt="">
        </div>
    </div>
</body>
</html>