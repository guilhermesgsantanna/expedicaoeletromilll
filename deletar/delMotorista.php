<!-- FUNÇÃO PARA DELETAR MOTORISTA -->

<?php
    if(!empty($_GET['id']))
    {
        include_once('../config.php');
        $id=$_GET['id'];
        $sqlSelect = "SELECT * FROM cadmotorista WHERE id=$id";
        $sqlSelectResult = mysqli_query($conn, $sqlSelect);

        print_r($sqlSelectResult);

            if($sqlSelectResult->num_rows > 0);
            {
                $sqlDelete = "DELETE FROM cadmotorista WHERE id=$id";
                $resultSqlDelete = mysqli_query($conn, $sqlDelete);
            }

            header("location: ../consulta/formConsMotorista.php");

    }

?>