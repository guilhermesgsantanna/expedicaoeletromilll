<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    /* BARRA DE NAVEDAÇÃO */
    .nav-bar{
        width: 100vw;
        margin-top: 10px;
        display: flex;
        justify-content: space-between;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, .212);
    }

    /* IMAGEM LOGO BARRA DE NAVEGAÇÃO */
    .nav-bar img{
        height: 60px;
        box-shadow: 5px 5px 10px rgba(0, 0, 0, .212);

    }

    /* BOTÃO SAIR */
    .btn-voltar,
    .btn-sair{
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 40px 15px;
        padding: 10px 20px;
        background-color: rgb(134, 131, 131);
        border-radius: 10px;
        outline: none;
        text-decoration: none;
        color: rgb(46, 45, 45);
        box-shadow: 5px 5px 10px rgba(0, 0, 0, .212);
        cursor: pointer;
        transition: 0.5s;
        font-weight: 800;
        letter-spacing: 1px;
        font-size: 12px;
    }

    .btn{
        display: flex;
        padding: 0 20px;
    }

    .btn-voltar:hover,
    .btn-sair:hover {
        background-color: rgb(204, 202, 202);
    }
</style>    

<body>
<nav class="nav-bar">
        <a href="sistema.php"><img src="img/logo-eletromil.png" alt="logoEletromil"></a>
        
        <div class="btn">
            <a href="sistema.php" class="btn-voltar">Voltar</a>
            <a href="sair.php" class="btn-sair">Sair</a>
        </div>
        
    </nav>
</body>
</html>