<?php

require_once("../controller/connection.php");

$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senha);

$resultado_cadastro_cliente = "INSERT INTO usuario (cpf ,senha)  VALUES('$cpf', '$senha')";

$rcc = mysqli_query($conn, $resultado_cadastro_cliente);



$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$fixo = $_POST['fixo'];
$celular = $_POST['celular'];
$email = $_POST['email'];
$genero = $_POST['genero'];
$nivel = $_POST['nivel'];
$medicamentos = $_POST['medicamentos'];


$resultado_cadastro_dado = "INSERT INTO cliente (nome, endereco, numero, cep, cidade, celular, fixo, email, genero, nivel, medicamentos)  VALUES('$nome', '$endereco', '$numero',  '$cep',  '$cidade',  '$celular', '$fixo', '$email', '$genero', '$nivel','$medicamentos')";

$rcd = mysqli_query($conn, $resultado_cadastro_dado);



header("Location: msg_cadas.php");



?>