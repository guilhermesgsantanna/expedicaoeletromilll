<!-- SCRIPT QUE VERIFICA SE EXISTE USUAARIO LOGADO NO SISTEMA -->

<?php
session_start(); 
print_r($_SESSION); 
echo '<br>';
include_once ('config.php');
// fazer verificação para verificar se existir usuario e senha permanece na pagina, se nao vai para a tela de login
if ((!isset ($_SESSION['usuario']) == true) and (!isset ($_SESSION['senha']) == true)) {
unset($_SESSION['usuario']); unset($_SESSION['senha']); header('location: home.php');
}
// MANTER LOGADO AO ACESSAR O USUARIO
$logado = $_SESSION['usuario'];

?>