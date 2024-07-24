<!-- FUNÇÃO PARA DELETAR O REGISTRO -->

<?php
    if(!empty($_GET['id']))
    {
        include_once('../config.php');
        $id = $_GET['id'];
        $sqlSelect="SELECT * FROM cadcarro WHERE id=$id";
        $sqlSelectResult = mysqli_query($conn, $sqlSelect);

        print_r($sqlSelectResult);

            if($sqlSelectResult->num_rows >0) 
            {
                $sqldelete = "DELETE FROM cadCarro WHERE id=$id";
                $resultSqlDelete = mysqli_query($conn ,$sqldelete);
            }

            header('location: ../consulta/formConsCarro.php');
    }

?>