<?php include_once '../verificaSessao.php'?>
<br><br>
<a href="../sair.php">Sair</a>

<?php
    if(!empty($_GET['id']))
    {
        include_once("../config.php");
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM cadnfe WHERE id=$id";
        $result = $conn->query($sqlSelect);
        
        if($result->num_rows > 0) 
        {
            while($user_data = mysqli_fetch_assoc($result)) 
            {
                $id = $user_data['id'];
                $nfe = $user_data['nfe'];
                $cnpj = $user_data['cnpj'];
                $cliente = $user_data['cliente'];
                $dtNfe = $user_data['dtNfe'];
                $dtEntrega = $user_data['dtEntrega'];
                $canhoto = $user_data['canhoto'];
                $carro = $user_data['carro'];
                $motorista = $user_data['motorista'];
            }

        } else {
            header("location: ../editar/formEditNfe.php");
        }

    }
?>


<?php
   include_once("../config.php");
   if(isset($_POST['btnEditNfe']))
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
        $nfe = $_POST['nfe'];
        $cnpj = $_POST['cnpj'];
        $cliente = $_POST['cliente'];
        $dtNfe = $_POST['dtNfe'];
        $dtEntrega = $_POST['dtEntrega'];
        $canhoto = $_POST['canhoto'];
        $carro = $_POST['carro'];
        $motorista = $_POST['motorista'];

        $sqlUpdate = "UPDATE cadnfe SET nfe=$nfe, cnpj='$cnpj', cliente='$cliente', dtNfe='$dtNfe', dtEntrega='$dtEntrega', canhoto='$canhoto', carro='$carro', motorista='$motorista' WHERE id=$id";

        $result = $conn->query($sqlUpdate);

        header("location:../consulta/formConsNfe.php");
   }


?>










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/editar//style-formeditnfe.css">

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

        <div class="box-dir">
            <div class="card-login">
                <h1>Editar NF-e</h1>

                <!-- FORMULÁRIO DE EDIÇÃO DE REGISTROS -->
                <form action="../editar/formEditNfe.php" method="post">
                    
                    <input type="hidden" id="id" name="id" value="<?php echo"$id"?>">

                    <div class="box1">
                        <div class="box1-1">
                            <div class="form-edit">
                                <label for="nfe">NFe</label>
                                <input type="text" name="nfe" id="nfe" placeholder="NFe" value="<?php echo"$nfe"?>">
                            </div>     

                            <div class="form-edit">
                                <label for="cnpj">CPF</label>
                                <input type="text" name="cnpj" id="cnpj" placeholder="CNPJ" value="<?php echo"$cnpj"?>">
                            </div>         
                        </div>

                        <div class="form-edit">
                            <label for="cliente">Cliente</label>
                            <input type="text" name="cliente" id="cliente" placeholder="Telefone" value="<?php echo"$cliente"?>">
                        </div>     
                    </div>

                    <div class="box2">
                        <div class="form-edit">
                            <label for="dtNfe">Data da Nota fiscal</label>
                            <input type="date" name="dtNfe" id="dtNfe" placeholder="Data da Nfe" value="<?php echo"$dtNfe"?>">
                        </div>      
                        
                        <div class="form-edit">                    
                            <label for="dtEntrega">Data da entrega</label>
                            <input type="date" name="dtEntrega" id="dtEntrega" placeholder="Data da Entrega" value="<?php echo"$dtEntrega"?>">
                        </div>     
                    </div>

                    <div class="box3">
                        <div class="form-edit">
                            <label for="canhoto">Canhoto</label>
                            <input type="text" name="canhoto" id="canhoto" placeholder="Canhoto" value="<?php echo"$canhoto"?>">
                        </div>     

                        <div class="form-edit">
                            <label for="carro">Carro</label>
                            <input type="text" name="carro" id="carro" placeholder="Carro" value="<?php echo"$carro"?>">
                        </div>     

                        <div class="form-edit">
                            <label for="motorista">Motorista</label>
                            <input type="text" name="motorista" id="motorista" placeholder="Motorista" value="<?php echo"$motorista"?>">
                        </div>     
                    </div>

                    <input type="hidden" id="dtCadastro" name="dtCadastro">

                    <div class="form-btn-edit">
                        <input type="submit" name="btnEditNfe" id="btnEditNfe">
                    </div>    
                </form>
            </div>
        </div>
    </div>    
</body>
</html>