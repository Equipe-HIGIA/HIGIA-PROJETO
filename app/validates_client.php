<?php

session_start();

if((isset($_POST['email'])) && (isset($_POST['senha']))){

$cliente = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$senha = md5($senha);
}else{
    $_SESSION['loginError'] = "Usuário ou senha invalida";
    header("Location: login.php");
}


?>