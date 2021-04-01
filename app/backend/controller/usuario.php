<?php 
require_once("../db/Connection.class.php");
require_once("../model/usuario.class.php");
session_start();



if (isset($_POST['op']) && $_POST['op']=="inc") {
    $con = new Connection();
    $usuario = new Usuario();
    $usuario->cpf = $_POST['cpf'];
    $usuario->senha = $_POST['senha'];
    $usuario->endereco =  $_POST['endereco']; 
    $usuario->numero =  $_POST['numero']; 
    $usuario->cep =  $_POST['cep']; 
    $usuario->cidade =  $_POST['cidade']; 
    $usuario->celular =  $_POST['celular']; 
    $usuario->fixo =  $_POST['fixo']; 
    $usuario->email =  $_POST['email']; 
    $usuario->genero =  $_POST['genero'];
    $usuario->nome =  $_POST['nome']; 
    $usuario->incluir();
    if ($usuario->id>0) {
        unset($_SESSION["usuario"]);
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../view/login.php';
        </script>";
    } else {
        
        echo "<script language='javascript' type='text/javascript'>
        window.location.href='../../view/usuario.php';
        </script>";
    }
} if (isset($_POST['cpf']) && isset($_POST['senha'])) {

    $con = new Connection();
    $usuario = new Usuario();
    $usuario->cpf = $_POST['cpf'];
    $usuario->senha = $_POST['senha'];

    if ($usuario->valida()) {
       //$_SESSION['usuario'] = $usuario->id;
         $_SESSION['usuario'];
        


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