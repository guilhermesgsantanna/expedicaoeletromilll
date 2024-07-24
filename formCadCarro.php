<?php

    if(isset ($_POST['btnCadCarro'])) {
        include_once"config.php";

        $carroCod = $_POST['carroCod'];
        $nome = $_POST['nome'];
        $placaCarro = $_POST['placaCarro'];
        $motCarro = $_POST['motCarro'];
        $dtCadCarro = $_POST['dtCadCarro'];

        // print_r($carroCod);
        // print_r($nome);
        // print_r($motCarro);

        $sqlCadCarro = "INSERT INTO cadcarro (carroCod, nome, placaCarro, motCarro, dtCadastro) VALUES ('$carroCod', '$nome', '$placaCarro','$motCarro', NOW())";

        $sqlCadCarroResult = mysqli_query($conn, $sqlCadCarro);

        header("location:sistema.php");
    } else {
        echo "Deu erro!";
    }    
?>