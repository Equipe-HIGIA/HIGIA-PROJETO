<?php
require_once("../db/Connection.class.php");
require_once("../model/dado_cliente.class.php");

if(isset($_POST['enviar1'])){

$con = new Connection();

$dados = new DadosCliente();
$dados->nivel = $_POST['nivel'];
$dados->medicamentos = $_POST['medicamentos'];
$dados->Dadc();

echo "<script language='javascript' type='text/javascript'>
window.location.href='../../view/';
</script>";
}

?>