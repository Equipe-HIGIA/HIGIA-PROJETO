<?php

require_once("../db/Connection.class.php");
require_once("../model/dado_servico.class.php");

if(isset($_POST['enviar2'])){

$con = new Connection();

$ds = new DadosServico();
$ds->paginas = $_POST['paginas'];
$ds->especialidade = $_POST['especialidade'];
$ds->especialidade = $_POST['especialidade'];
$ds->qualificacao = $_POST['qualificacao'];
$ds->ambiente = $_POST['ambiente'];
$ds->localatendimento = $_POST['localatendimento'];
$ds->servico = $_POST['servico'];
$ds->raio = $_POST['raio'];
$ds->idades = $_POST['idades'];
$ds->especial = $_POST['especial'];


$ds->Dads();
}

?>



?>