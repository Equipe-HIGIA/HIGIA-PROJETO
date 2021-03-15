<?php

require_once("../controller/connection.php");


$cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = md5($senha);



$resultado_cadastro_pro = "INSERT INTO usuario (cpf ,senha)  VALUES('$cpf', '$senha')";

$rcp = mysqli_query($conn, $resultado_cadastro_pro);



$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$numero = $_POST['numero'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$celular = $_POST['celular'];
$fixo = $_POST['fixo'];
$email = $_POST['email'];
$paginas = $_POST['paginas'];
$especialidade = $_POST['especialidade'];
$qualificacao = $_POST['qualificacao'];
$ambiente = $_POST['ambiente'];
$grupo = $_POST['grupo'];
$local = $_POST['local'];
$genero = $_POST['genero'];
$servico = $_POST['servico'];
$raio = $_POST['raio'];
$idades = $_POST['idades'];
$especial = $_POST['especial'];


$resultado_cadastro_dado = "INSERT INTO profissional (nome, endereco, numero, cep, cidade, celular, fixo, email, paginas, especialidade, qualificacao, ambiente, grupo, local, genero, servico, raio, idades, especial)  VALUES('$nome', '$endereco', '$numero',  '$cep',  '$cidade',  '$celular', '$fixo', '$email', '$paginas', '$especialidade', '$qualificacao', '$ambiente', '$grupo', '$local', '$genero', '$servico', '$raio', '$idades', '$especial')";

//$resultado_cadastro_dado = "INSERT INTO profissional (nome, endereco, numero, cep, cidade, celular, fixo, email, paginas, especialidade, qualificacao, ambiente, grupo, local, genero, servico, raio, idades, especial)  VALUES('$nome', '$endereco',  '$numero', '$cep', '$cidade', '$celular', '$fixo', '$email', '$paginas', '$especialidade', '$qualificacao', '$ambiente', '$grupo', '$local', '$servico', '$raio', '$idades', '$especial')";

$rcd = mysqli_query($conn, $resultado_cadastro_dado);



header("Location: msg_cadas.php");




?>


