<?php include_once '../verificaSessao.php'?>

<?php
    if(!empty($_GET['id']))
    {
        include_once("../config.php");
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadmotorista WHERE id=$id";
        $result = $conn->query($sqlSelect);
        
        if($result->num_rows > 0) 
        {
            while($user_data = mysqli_fetch_assoc($result)) 
            {
                $id = $user_data['id'];
                $nome = $user_data['nome'];
                $cpf = $user_data['cpf'];
                $telefone = $user_data['telefone'];
            }

        } else {
            header("location: ../editar/formEditMotorista.php");
        }

    }
?>


<?php
   include_once("../config.php");
   if(isset($_POST['btnEditMotorista']))
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

        // print_r($_POST['motorista']);

        // echo "<br><br><br>";


        $id = $_POST['id']        ;
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $telefone = $_POST['telefone'];

        $sqlUpdate = "UPDATE cadmotorista SET nome='$nome', cpf='$cpf', telefone='$telefone' WHERE id=$id";

        $result = $conn->query($sqlUpdate);

        header("location:../consulta/formConsmotorista.php");
   }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/editar//style-formeditmotorista.css">

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
                
                <form action="../editar/formEditMotorista.php" method="post">
                    
                    <div class="form-titulo">
                        <h1>Editar usuario</h1>
                    </div>    

                    <input type="hidden" id="id" name="id" value="<?php echo"$id"?>">

                    <div class="form-edit">                    
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" placeholder="Nome" value="<?php echo"$nome"?>">  
                    </div>
                        
                    <div class="form-edit">
                        <label for="cpf">CPF</label>
                        <input type="text" name="cpf" id="cpf" placeholder="CPF" value="<?php echo"$cpf"?>">
                    </div>

                    <div class="form-edit">
                        <label for="telefone">Telefone</label>
                        <input type="text" name="telefone" id="telefone" placeholder="Telefone" value="<?php echo"$telefone"?>">
                    </div>

                    <input type="hidden" id="dtCadCarro" name="dtCadCarro">

                    <div class="form-btn-edit">
                        <input type="submit" name="btnEditMotorista" id="btnEditMotorista">
                    </div>
                </form>
            </div>    
        </div>    
    </div>    
</body>
</html>

















