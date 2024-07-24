<!-- TELA DE CADASTRO DE USUARIO -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de uuário</title>

    <link rel="stylesheet" href="css/style-cadusuario.css">
  
</head>

<body>

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
        <div class="box-form">
            
                <div class="btn-voltar">
                    <a href="home.html">Voltar</a>
                </div>



            <!-- CONTEM BOTÃO VOLTAR E A LOGO-->
            <div class="form-header">

            <!-- ----------------------------------------------------------- -->

            <!-- CONTEM AS DIVS DO FORMULARIO DE CADASTRO -->
            <div class="box-input">
                <form action="formUsuario.php" method="post">

                    <div class="box-title">
                        <h1>Cadastro de usuário</h1>
                    </div>
                    
                    <div class="input-box">
                        <label for="nomeFuncionario">Nome</label>
                        <input type="text" name="nomeFunc" id="nomeFunc" placeholder="Digite seu nome" required>                    
                    </div>
                    
                    <div class="input-box">
                        <label for="usuario">Usuario</label>
                        <input type="text" name="usuario" id="ussuario" placeholder="Usuário" required>
                    </div>

                    <div class="input-box">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Digite sua senha" required>
                    </div>
                    
                    <input type="hidden" id="dataCadastro" name="dataCadastro">

                    <div class="box-btn-cadastrar">
                    <input type="submit" id="btnCadastrar" name="btnCadastrar" value="Cadastrar">
                    </div>          
                </form>                

            </div>
            <!-- ----------------------------------------------------------- -->
    </div>
</body>
</html>