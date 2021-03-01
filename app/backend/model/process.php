<?php

require_once("../controller/connection.php");

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senha);
$Primeiro_Nome = filter_input(INPUT_POST, 'Primeiro_Nome', FILTER_SANITIZE_STRING);
$Ultimo_Nome = filter_input(INPUT_POST, 'Ultimo_Nome', FILTER_SANITIZE_STRING);
$Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_STRING);
$CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$regiao = filter_input(INPUT_POST, 'regiao', FILTER_SANITIZE_STRING);
 $resultado_cadastro_cliente = "INSERT INTO cliente (email, senha, Primeiro_Nome, Ultimo_Nome, Cidade, CPF, regiao, foto)  VALUES('$email', '$senha', '$Primeiro_Nome', '$Ultimo_Nome', '$Cidade', '$CPF', '$regiao', '$foto')";

$rcc = mysqli_query($conn, $resultado_cadastro_cliente);

header("Location: msg_cadas.php");



?>