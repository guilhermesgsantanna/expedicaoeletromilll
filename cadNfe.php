<?php include_once 'verificaSessao.php'?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style-cadnfe.css">
</head>

<nav>
    <?php include_once"template/navBar.php" ?>
</nav>

<body>
    <div class="container">
        <div class="box-esq">
            <div class="mil-exp-titulo">
                <h1>Eletromil Comercial LTDA</h1>
                <h2>Expedição</h2>
            </div>

            <div class="img-principal">
                <img class="img-eletromil" src="img/eletromil.png" alt="IMAGEM ELETROMIL">
            </div>
        </div>

        <div class="box-dir">
            <div class="box-dir-item">
                <form action="formNfe.php" method="post">
                    <h1>Cadastro de NFe</h1>
                    <div class="box1">
                        <div class="box1-1">
                            <div class="input-box">
                                <label for="nfe">NFe</label>
                                <input type="text" name="nfe" id="nfe" placeholder="NFe">
                            </div>

                            
                            <div class="input-box">
                                <label for="cnpj">CNPJ</label>
                                <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ">
                            </div> 
                        </div>                      

                        <div class="input-box">
                            <label for="cliente">Cliente</label>
                            <input type="text" name="cliente" id="cliente" placeholder="Cliente">
                        </div>
                    </div>
                                                
                    <div class="box2">
                        <div class="input-box">
                            <label for="dtNfe">Data de Emissão</label>
                            <input class="cad-data" type="date" name="dtNfe" id="dtNfe" placeholder="Data da NFe">
                        </div>

                        <div class="input-box">
                            <label for="dtEntrega">Data da entrega</label>
                            <input class="cad-data" type="date" name="dtEntrega" id="dtEntrega" placeholder="Data de entrega">
                        </div>    
                    </div>

                        
                    <div class="box3">
                        <div class="input-box">
                            <label for="canhoto">Canhoto</label>
                            <input type="text" name="canhoto" id="canhoto" placeholder="Canhoto">
                        </div>

                        <div class="input-box">    
                            <label for="carro">Carro</label>
                            <input type="text" name="carro" id="carro" placeholder="Carro">
                        </div>

                        <div class="input-box">
                            <label for="motorista">Motorista</label>
                            <input type="text" name="motorista" id="motorista" placeholder="Motorista">
                        </div>

                    </div>    
                        
                    <input type="hidden" id="dtCadastro" name="dtCadastro">

                    <input type="submit" id="btnCadNfe" name="btnCadNfe" value="Cadastrar">            
                </form>
            </div>
        </div>
        
    </div>
</body>
</html>