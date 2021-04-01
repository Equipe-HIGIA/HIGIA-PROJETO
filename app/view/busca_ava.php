<?php



require_once("../backend/db/connection.class.php");


$qualificacao = "%".trim($_GET['qualificacao']."%");


$ambiente  = $_GET['ambiente'];
$localatendimento  = $_GET['localatendimento'];
$especial  = $_GET['especial'];


$pdo = new Connection();

$st = $pdo->prepare('SELECT * FROM profissional WHERE qualificacao LIKE :qualificacao  AND ambiente = :ambiente AND localatendimento = :localatendimento  AND especial = :especial');

$st->bindParam(':qualificacao',$qualificacao,PDO::PARAM_STR);
$st->bindParam(':ambiente',$ambiente,PDO::PARAM_STR);
$st->bindParam(':especial',$especial,PDO::PARAM_STR);
$st->bindParam(':localatendimento',$localatendimento,PDO::PARAM_STR);
        

$st->execute();  


$resultados = $st->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HÍGIA</title>


    
    <style> *{ font-family: "Baloo Tamma 2" !important;}
  
  
  
  </style>
   
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body class="bg-white">
    
     
<header>

<?php include 'include/header.php'; ?>
  

<button class="btn  btn-outline-warning btn-lg botao-volta shadow-sm m-2 rounded" onclick="window.history.back()"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>Voltar</button>
</header>

<br>



<main>

<h1 class="fs-1 m-4 text-center">Resultado da busca</h1>

<?php
if (count($resultados)) {
	foreach($resultados as $Resultado) {
?>


<script language="JavaScript" type="text/javascript">
$(document).ready(function() {
  var count = 0;
  var badge = $('#carrinhoIndex');
  badge.text(count);
  $(document).on('click', '#en<?php echo $Resultado['id']; ?>', function(e){
    e.preventDefault;
    count++;
    badge.text(count)
    });
}) 
</script>


<div class="container ">
  <div class="row justify-content-center">
<div class="card border-dark shadow-lg  mb-5  rounded" >
  <div class="card-header m-6"><?php echo $Resultado['qualificacao']; ?></div>
  <div class="card-body text-dark">
    <h5 class="card-title">Descrição do serviço</h5>
    <p class="card-text fs-5"><?php echo $Resultado['servico']; ?></p>
  
  
 
<div class="d-flex">

<a class="btn btn-primary mx-auto mb-3" data-bs-toggle="collapse" href="#e<?php echo $Resultado['id']; ?>" id="en<?php echo $Resultado['id']; ?>" role="button" aria-expanded="false" aria-controls="e<?php echo $Resultado['id']; ?>"  style="width: 200px;">
Contato
  </a>

</div>

   
<div class="collapse mb-4" id="e<?php echo $Resultado['id']; ?>">
  <div class="card card-body">
  <p class="card-text fs-5">

      <p>Numeros de pessoa que consegue atender:<br> <?php echo $Resultado['grupo']; ?></p>
      <p>Raio que consegue atender:<br><?php echo $Resultado['raio']; ?></p>
      
      </p>
     </div>
</div>

  


  <div class="card-footer bg-transparent border-dark">
    <div class="d-flex " >
    <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['ambiente']; ?></span></h6>
  <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['localatendimento']; ?></span></h6>
  <h6><span class="badge rounded-pill bg-secondary"><?php echo $Resultado['especial']; ?></span></h6>
  </div>
  </div>



</div>
</div>
</div>
  <br>
<?php
} 

}
 else {
?>
<h1 class="fs-1 fw-bolder m-4  text-center position-absolute top-50 start-50 translate-middle">Não foram encontrados resultados pelo termo buscado.</h1>
<?php
}
?>

</main>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

</body>
</html>

