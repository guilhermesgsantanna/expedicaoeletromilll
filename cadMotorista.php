<?php include_once 'verificaSessao.php'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-motorista.css">
</head>

<nav>
    <!-- BARRA DE NAVEGAÇÃO -->
    <?php include_once"template/navBar.php" ?>
</nav>

<body>
    <div class="container">
        <!-- DIV QUE CONTEM OS DADOS DA ESQUERDA, IMAGEM -->
        <div class="box-esq">
            <div class="mil-exp-titulo">
                <h1>Eletromil Comercial LTDA</h1>
                <h2>Expedição</h2>
            </div>

            <div class="img-principal">
                <img class="img-eletromil" src="img/eletromil.png" alt="IMAGEM ELETROMIL">
            </div>
        </div>


        <!-- DIV QUE CONTEM OS DADOS DA DIREITA, CADASTRO -->
        <div class="box-dir">
            <div class="box-dir-item">

                <div class="box-title">
                    <h1>Cadastro de Motoristas</h1>             
                </div>    

                <div class="box-form">
                    <form class="box-form" action="formMotorista.php" method="post">
                        <div class="input-box">
                            <label for="nome">Nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Nome">
                        </div>
                        
                        <div class="input-box">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf" placeholder="CPF">
                        </div>    

                        <div class="input-box">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" placeholder="telefone">

                        </div>

                        <input type="hidden" name="dataCadastro" id="dataCadastro">

                        <div class="box-btn-cadastrar">
                            <input type="submit" name="btnCadastrar" id="btnCadastrar" value="Cadastrar">
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>