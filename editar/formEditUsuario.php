<?php include_once '../verificaSessao.php'?>
<br><br>

<?php
    if(!empty($_GET['id']))
    {
        include_once("../config.php");
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadusuario WHERE id=$id";
        $result = $conn->query($sqlSelect);
        
        if($result->num_rows > 0) 
        {
            while($user_data = mysqli_fetch_assoc($result)) 
            {
                $id = $user_data['id'];
                $nomeFunc = $user_data['nomeFunc'];
                $senha = $user_data['senha'];
                $usuario = $user_data['usuario'];
            }

        } else {
            header("location: ../editar/formConsUsuario.php");
        }

    }
?>


<?php
   include_once("../config.php");
   if(isset($_POST['btnEditUsuario']))
   {
        // echo "<br><br><br>"; 

        // print_r($_POST['id']);            

        // echo "<br><br><br>"; 

        // print_r($_POST['nomeFunc']);

        // echo "<br><br><br>";

        // print_r($_POST['usuario']);

        // echo "<br><br><br>";

        // print_r($_POST['senha']);

        // echo "<br><br><br>";

        $id = $_POST['id']        ;
        $nomeFunc = $_POST['nomeFunc'];
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE cadusuario SET nomeFunc='$nomeFunc', usuario='$usuario', senha='$senha' WHERE id=$id";

        $result = $conn->query($sqlUpdate);

        header("location:../consulta/formConsUsuario.php");
   }


?>    



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/editar/style-formeditusuario.css">
</head>
<body>
    <!-- BARRA DE NAVEGAÇÃO -->
    <nav>
        <?php include_once "../template/navBar1.php" ?>
    </nav>
    <!-- ----------------------------------------------------------------- -->     

    <div class="box-container">
        <!-- DIV QUE CONTEM OS DADOS DA ESQUERDA, IMAGEM -->
        <div class="box-esq">
            <div class="mil-exp-titulo">
                <h1>Eletromil Comercial LTDA</h1>
                <h2>Expedição</h2>
            </div>

            <div class="img-principal">
                <img class="img-eletromil" src="../img/eletromil.png" alt="IMAGEM ELETROMIL">
            </div>
        </div>  
        <!-- --------------------------------------------------------- -->

        <!-- FORMULÁRIO DE EDIÇÃO DE REGISTROS  -->
        <div class="box-dir">
            <div class="card-login">

                <form action="../editar/formEditUsuario.php" method="post">
                    <div class="form-titulo">
                        <h1>Editar usuario</h1>
                    </div>    

                    <input type="hidden" id="id" name="id" value="<?php echo"$id"?>">
                    
                    <div class="form-edit">
                        <label for="nomeFunc">Nome</label>
                        <input type="text" id="nomeFunc" name="nomeFunc" value="<?php echo"$nomeFunc"?>" placeholder="Nome">
                    </div>  
                     
                    <div class="form-edit">
                        <label for="usuario">Usuário</label>
                        <input type="text" id="usuario" name="usuario" value="<?php echo"$usuario"?>" placeholder="usuario">
                    </div>

                    <div class="form-edit">    
                        <label for="senha">Senha</label>
                        <input type="text" id="senha" name="senha" value="<?php echo"$senha"?>" placeholder="Senha">
                    </div>    

                    <div class="form-btn-edit">
                        <input type="submit" name="btnEditUsuario" id="btnEditUsuario" value="Alterar">
                    </div>
                </form>
            </div>    
        </div>    
    </div>     
</body>
</html>