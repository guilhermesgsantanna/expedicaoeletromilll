<!-- FUNÇÃO PARA DELETAR O REGISTRO -->

<?php
    if(!empty($_GET['id']));
    {
        include_once("../config.php");

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM cadusuario WHERE id = $id";
        $resultSqlSelect = mysqli_query($conn, $sqlSelect);

            if($resultSqlSelect->num_rows > 0)
            {
                $sqlDelete = "DELETE FROM cadusuario WHERE id=$id";
                $resultSqlDelete = mysqli_query($conn, $sqlDelete);
            }

        header("location: ../consulta/formConsUsuario.php");
    }

        

?>