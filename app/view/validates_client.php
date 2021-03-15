<?php

session_start();
include_once('../backend/controller/connection.php');


if ((isset($_POST['cpf'])) && (isset($_POST['senha']))) {
   
    $cpf = mysqli_real_escape_string($conn, $_POST['cpf']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

$sql = "SELECT * FROM usuario WHERE  cpf = '$cpf' && senha ='$senha' LIMIT 1";
$result = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($result);



if(empty($resultado)){
    $_SESSION['loginErro'] = 'Usuário ou senha inválida';
    header("Location: login.php");
}elseif(isset($resultado)){
  
   
    
    

  

    header("Location: Tela_Principal/index.php");
}else{
    $_SESSION['loginErro'] = 'Usuário ou senha inválida';
    header("Location: login.php");
}







}else{
    $_SESSION['loginErro'] = 'Usuário ou senha inválida';
    header("Location: login.php");
}



    
   

?>