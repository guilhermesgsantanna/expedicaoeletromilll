<!-- FUNÇÃO PARA DELETAR O REGISTRO -->

<?php
    if(!empty($_GET['id']))
    {
        include_once('../config.php');
        $id = $_GET['id'];
        $sqlConsulta = "SELECT * FROM cadnfe WHERE id = $id";
        $resultSqlConsulta = mysqli_query($conn, $sqlConsulta);

            if($resultSqlConsulta->num_rows >0);
            $sqldelete = "DELETE FROM cadnfe WHERE id=$id";
            $resultSqlDelete = mysqli_query($conn, $sqldelete);
    }

    header("location: ../consulta/formConsNfe.php")
?>