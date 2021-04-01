<?php 
require_once("../db/Connection.class.php");
require_once("../model/usuario.class.php");
session_start();
if (isset($_POST['cpf']) && isset($_POST['senha'])) {

    $con = new Connection();
    $usuario = new Usuario();
    $usuario->cpf = $_POST['cpf'];
    $usuario->senha = $_POST['senha'];
    if ($usuario->valida()) {
        //$_SESSION["usuario"] = $usuario->id;

          $_SESSION['usuario']; 
        $_SESSION['usuariocep'];
     //   $_SESSION['usuarioendereco'] =   $usuario->endereco;
    //  $_SESSION['usuarionumero'] =   $usuario->numero;
    
      
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../view/';
        </script>";

    } else {
        $_SESSION["usuario"] = 0;
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../view/login.php';
        </script>";

    }
 }