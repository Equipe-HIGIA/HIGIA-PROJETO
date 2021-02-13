<?php

require_once("../controller/connection2.php");


$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senha);
$Primeiro_Nome = filter_input(INPUT_POST, 'Primeiro_Nome', FILTER_SANITIZE_STRING);
$Ultimo_Nome = filter_input(INPUT_POST, 'Ultimo_Nome', FILTER_SANITIZE_STRING);
$Cidade = filter_input(INPUT_POST, 'Cidade', FILTER_SANITIZE_STRING);
$CPF = filter_input(INPUT_POST, 'CPF', FILTER_SANITIZE_STRING);
$Formacao_Academica = filter_input(INPUT_POST, 'Formacao_Academica', FILTER_SANITIZE_STRING);
$Experiencia_Profi = filter_input(INPUT_POST, 'Experiencia_Profi', FILTER_SANITIZE_EMAIL);
$Especialidade = filter_input(INPUT_POST, 'Especialidade', FILTER_SANITIZE_EMAIL);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$regiao = filter_input(INPUT_POST, 'regiao', FILTER_SANITIZE_STRING);



 $resultado_cadastro_profissional = "INSERT INTO profissional ( senha, Primeiro_Nome, Ultimo_Nome, Cidade, CPF, Formacao_Academica, Experiencia_Profi, Especialidade, email, regiao)  VALUES( '$senha', '$Primeiro_Nome', '$Ultimo_Nome', '$Cidade', '$CPF', '$Formacao_Academica',  '$Experiencia_Profi',  '$Experiencia_Profi','$email', '$regiao')";

$rcp = mysqli_query($conn, $resultado_cadastro_profissional);





?>