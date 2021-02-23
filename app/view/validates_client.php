<?php
session_start();
include_once('../backend/controller/connection.php');



if ((isset($_POST['email'])) && (isset($_POST['senha']))) {
   
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha = md5($senha);

$sql = "SELECT * FROM cliente WHERE  email = '$email' && senha ='$senha' LIMIT 1";
$result = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($result);

if(empty($resultado)){
    $_SESSION['loginErro'] = 'Usuário ou senha inválida';
    header("Location: login.php");
}elseif(isset($resultado)){
   // $_SESSION['clienteid'] = $resultado['id'];
   // $_SESSION['clienteNome'] = $resultado['nome'];
   // $_SESSION['clienteNiveisAccesoId'] = $resultado['niveis_acesso_id'];
   // $_SESSION['clienteEmail'] = $resultado['email'];
   // $_SESSION['clienteSenha'] = $resultado['senha'];

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