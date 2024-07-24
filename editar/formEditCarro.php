<?php include_once '../verificaSessao.php'?>

<!-- FUNÇÃO PARA RETORNAR OS CONTATOS -->
 <?php
    if(!empty($_GET['id']))
    {
        include_once("../config.php");
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadcarro WHERE id=$id";
        $result = $conn->query($sqlSelect);
        
        if($result->num_rows > 0) 
        {
            while($user_data = mysqli_fetch_assoc($result)) 
            {
                $id = $user_data['id'];
                $carroCod = $user_data['carroCod'];
                $nome = $user_data['nome'];
                $placaCarro = $user_data['placaCarro'];
                $motCarro = $user_data['motCarro'];
            }
        } else {
            header("location: ../editar/formEditCarro.php");
        }

    }
?>

<!-- FUNÇÃO PARA SALVAR OS CONTATOS -->
<?php
   include_once("../config.php");
   if(isset($_POST['btnEditCarro']))
   {
        // echo "<br><br><br>"; 

        // print_r($_POST['id']);            

        // echo "<br><br><br>"; 

        // print_r($_POST['carroCod']);

        // echo "<br><br><br>";

        // print_r($_POST['nome']);

        // echo "<br><br><br>";

        // print_r($_POST['placaCarro']);

        // echo "<br><br><br>";

        // print_r($_POST['motCarro']);

        // echo "<br><br><br>";


        $id = $_POST['id']        ;
        $carroCod = $_POST['carroCod'];
        $nome = $_POST['nome'];
        $placaCarro = $_POST['placaCarro'];
        $motCarro = $_POST['motCarro'];

        $sqlUpdate = "UPDATE cadcarro SET carroCod='$carroCod', nome='$nome', placaCarro='$placaCarro', motCarro='$motCarro' WHERE id=$id";

        $result = $conn->query($sqlUpdate);

        header("location:../consulta/formConsCarro.php");
   }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/editar//style-formeditcarro.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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

        <!-- FORMULÁRIO DE EDIÇÃO DE REGISTROS -->
        <div class="box-dir">
            <div class="card-login">
                
                <form action="../editar/formEditCarro.php" method="post">
                    
                    <div class="form-titulo">
                        <h1>Editar usuario</h1>
                    </div>    

                    <input type="hidden" id="id" name="id" value="<?php echo"$id"?>">

                    <div class="form-edit">                    
                        <label for="carroCod">Código do carro</label>
                        <input type="text" name="carroCod" id="carroCod" placeholder="Código do carro" value="<?php echo"$carroCod"?>"> 
                    </div>
                        
                    <div class="form-edit">
                        <label for="nome">Nome do carro:</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome do carro" value="<?php echo"$nome"?>">
                    </div>

                    <div class="form-edit">
                        <label for="placaCarro">Placa do carro</label>
                        <input type="text" name="placaCarro" id="placaCarro" placeholder="Placa do carro" value="<?php echo"$placaCarro"?>">
                    </div>

                    <div class="form-edit">
                        <label for="motCarro">Motorista</label>
                        <input type="text" name="motCarro" id="motCarro" placeholder="Motorista" value="<?php echo"$motCarro"?>">
                    </div>                        

                    <input type="hidden" id="dtCadCarro" name="dtCadCarro">

                    <div class="form-btn-edit">
                        <input type="submit" name="btnEditCarro" id="btnEditCarro" value="Alterar">
                    </div>
                </form>
            </div>    
        </div>    
    </div>    
</body>
</html>

