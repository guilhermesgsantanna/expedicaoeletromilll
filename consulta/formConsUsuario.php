<?php include_once '../verificaSessao.php'?>
<!-- CONSULTA DADOS SQL -->
    <?php
        if(!empty($_GET['search'])) {
            echo"CONTEM ALGO A PESQUISAR";
            $data = $_GET['search'];

            echo '<br>';

            echo $_GET['search'];

            $sql = "SELECT * FROM cadusuario WHERE nomeFunc LIKE '%$data%'";

            $resultSql = mysqli_query($conn, $sql);

            print_r($resultSql);
        }
        else {
            echo"NÃO TEM NADA PARA PESQUISAR";

            $sql = "SELECT * FROM cadusuario";

            $resultSql = mysqli_query($conn, $sql);
        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/style-formconsusuario.css">

    <link rel="stylesheet" href="../css/editar/style-formeditusuario.css">

    <title>Document</title>
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
        <div class="div-dir">
            <div class="div-itens-dir">
                <!-- CAIXA DE PESQUISA -->
                <div class="box-search">
                    <div class="input-box">
                        <label for="search">Digite sua pesquisa</label>
                        <input type="search" name="search" id="search" placeholder="pesquisar">
                    </div>

                    <div class="button-box">
                        <button onclick="searchData()" id="btnpesquisar">Pesquisar</button>
                    </div>
                </div>
                <!-- ------------------------------------------ -->

                <!-- tabela com os dados -->
                <div class="box-table">
                    <!-- TABELA COM TODOS OS REGISTROS -->
                    <div class="table-responsive">
                        <table class="table table-primary table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Usuario</th>
                                    <th scope="col">Senha</th>
                                    <th scope="col" class="opcoes">Opções</th>
                                </tr>
                            </thead>
                            <tbody class="table-group-divider">
                                <?php
                                    while($user_data = mysqli_fetch_assoc($resultSql))
                                    {
                                        echo "<tr>";
                                        echo "<td>".$user_data['id']."</td>";
                                        echo "<td>".$user_data['nomeFunc']."</td>";
                                        echo "<td>".$user_data['usuario']."</td>";
                                        echo "<td>".$user_data['senha']."</td>";

                                        echo "<td>
                                        <a class='btn btn-sm btn-primary' href='../editar/formEditusuario.php?id=$user_data[id]'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'><path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325'/></svg>
                                        </a> 

                                        <a class='btn btn-danger btn-primary' href='../deletar/delUsuarios.php?id=$user_data[id]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                        <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z'/><path d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z'/></svg>
                                        </a>
                                        </td>";
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div> 
            </div>
        </div>                
    </div>    
</body>

<!-- script JAVASCRIPT consulta ao pressionar o botão ou enter no input-->
<script>
    var search = document.getElementById('search');
        search.addEventListener("keydown", function(event) {
            if (event.key === "Enter")
            {
                searchData();
            }
        });

        function searchData()
        {
            window.location = 'formConsUsuario.php?search=' + search.value;
        }                     
 </script>
</html>
