<?php include_once 'verificaSessao.php'?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-cadcarro.css">
</head>
<body>
    <!-- BARRA DE NAVEGAÇÃO -->
    <?php include_once "template/navBar.php" ?>

        <!-- CONTAINER PRINCIPAL QUE CONTEM TODOS OS REGISTROS -->
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

            

        
        <!-- FORMULARIO DA DIREITA, COMTEM O CABEÇALHO COM LOGO E BOTÃO VOLTAR E OS CAMPOS PARA PREENCHER -->
        <div class="box-dir">

            <!-- CONTEM AS DIVS DO FORMULARIO DE CADASTRO -->
            <div class="card-login">
                <form action="formCadCarro.php" method="post">

                    <div class="form-titulo">
                        <h1>Cadastro de Carro</h1>
                    </div>    

                    <div class="form-edit1">
                        <div class="form-edit2">
                            <label for="carroCod">Código do carro</label>
                            <input type="text" name="carroCod" id="carroCod" placeholder="Código do carro"> 
                        </div>

                        <div class="form-edit2">
                            <label for="placaCarro">Placa do carro</label>
                            <input type="text" name="placaCarro" id="placaCarro" placeholder="Placa do carro">
                         </div>
                    </div>
                    
                    <div class="form-edit">
                        <label for="nome">Nome do carro:</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome do carro">
                    </div>                        
                   
                    
                    
                    <div class="form-edit">
                        <label for="motCarro">Motorista</label>
                        <input type="text" name="motCarro" id="motCarro" placeholder="Motorista">
                    </div>

                    <input type="hidden" id="dtCadCarro" name="dtCadCarro">

                    <div class="form-btn-edit">
                        <input type="submit" name="btnCadCarro" id="btnCadCarro">
                    </div>
                </form>                
            </div>

            <!-- ----------------------------------------------------------- -->
        </div>
        <!-- ----------------------------------------------------------- --> 
    </div>

    
</body>
</html>

