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
  
    $_SESSION['cliente_Primeiro_Nome'] = $resultado['Primeiro_Nome'];
   $_SESSION['cliente_Ultimo_Nome'] = $resultado['Ultimo_Nome'];
    $_SESSION['clienteCidade'] = $resultado['Cidade'];
      $_SESSION['clienteRegiao'] = $resultado['regiao'];

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