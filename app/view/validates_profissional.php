<?php
session_start();
include_once('../backend/controller/connection.php');



if ((isset($_POST['email'])) && (isset($_POST['nome']))) {
   
    $email = mysqli_real_escape_string($conn, $_POST['email']);
     $nome = mysqli_real_escape_string($conn, $_POST['nome']);
    

$sql = "SELECT * FROM profissional WHERE  email = '$email' && nome ='$nome' LIMIT 1";
$result = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($result);

if(empty($resultado)){
    $_SESSION['loginErro'] = 'Usuário ou senha inválida';
    header("Location: login_profissional.php");
}elseif(isset($resultado)){
   

    header("Location: Tela_Principal-Profissional/index.php");
}else{
    $_SESSION['loginErro'] = 'Usuário ou senha inválida';
    header("Location: login_profissional.php");
}







}else{
    $_SESSION['loginErro'] = 'Usuário ou senha inválida';
    header("Location: login_profissional.php");
}



    
   

?>