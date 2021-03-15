<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HÍGIA</title>


  <style> *{ font-family: "Baloo Tamma 2" !important;}
  
  .borda{
  border:5px solid #FF653B;
  background-color: #FF653B;
  
  border-radius: 10px;
}
  
  
  </style>
   
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
<script type="text/javascript">

$( function()  {
  
$("#from").datepicker();


});


$( function()  {
  
  $("#to").datepicker();
  
  
  });

</script>
</head>
<body class="bg-white">
  
<header>

<?php include 'include/header.php'; ?>
</header>

<br>




   <main>
  
    <form method="POST">
  
      <br>
   
   <div class="form-group">
   
   
   <label for="inputCity"  class="form-label">Idade</label>
   <br>
  <select class="form-select form-select" name="idades" aria-label=".form-select-sm example">
    <option selected>Selecione uma das opções</option>
    <option value="60+">60+</option>
    <option value="40-50">40-50</option>
    <option value="30-40">30-40</option>
    <option value="20-30">20-30</option>
    <option value="10-20">10-20</option>
    <option value="1-10">1-10</option>
    <option value="Atendo todas idades">Atendo todas idades</option>
  </select>
   
   </div>


   <br>
   <div class="form-group">
   
   <label for="inputCity"  class="form-label">qualificação</label>
   <br>

  <select class="form-select form-select" name="qualificacao" aria-label=".form-select-sm example">
    <option selected>Selecione uma das opções</option>
    <option value="Fisioterapia">Fisioterapia</option>
    <option value="Educação Física">Educação Física</option>
    <option value="Quiropraxia">Quiropraxia</option>
    <option value="Terapia ocupacional">Terapia ocupacional</option>
    <option value="Saúde Coletiva">Saúde Coletiva</option>
  
  </select>
   </div>

   <br>
   <div class="form-group">
   
   <label for="inputCity"  class="form-label">Raio de Atuação</label>
   <br>
<select class="form-select form-select" name="raio" aria-label=".form-select-sm example">
  <option selected>Selecione uma das opções</option>
  <option value="1000">1000Km</option>
  <option value="500">500km</option>
   <option value="250">250km</option>
   <option value="100">100km</option>
   <option value="50">50km</option>
   <option value="30">30km</option>
   <option value="20">20km</option>
   <option value="10">10km</option>
   <option value="5">5km</option>
</select>
   </div>

<br>
   <div>
   <label for="inputCity" class="form-label">Ambiente de trabalho</label>
  
<select class="form-select form-select"  name="ambiente" aria-label=".form-select-sm example">
  <option selected>Selecione uma das opções</option>
  <option value="Não tenho ambiente de trabalho">Não tenho ambiente de trabalho especifico</option>
  <option value="Consutorio">Consutorio</option>
  <option value="Trabalho em casa">Trabalho em casa</option>

</select>
</div>

   <button class="btn btn-outline-warning m-2" name="pesquisar" type="submit">Search</button>
    </form>
   
    </main>
 
  

<br><br>
  <div class="borda"></div>
  <br><br><br>

<div class="row">

<?php

include_once("controller/connection.php");
if (isset($_POST['pesquisar'])) {
 
  $qualificacao = $_POST['qualificacao'];
  $ambiente = $_POST['ambiente'];
  $raio = $_POST['raio'];
  $idades = $_POST['idades'];


if ($qualificacao != "" || $ambiente != "" || $raio != "" ||  $idades != "" ||  $servico != "" ) {


$query = "SELECT * FROM profissional WHERE qualificacao = '$qualificacao'  OR ambiente = '$ambiente'  || raio = '$raio' OR idades = '$idades' "; // servico = '$servico'


  $data = mysqli_query($conn, $query) or die('erro');
if (mysqli_num_rows($data) > 0) {

while ($row = mysqli_fetch_array($data)) {
  
  $qualificacao = $row['qualificacao'];
  $ambiente = $row['ambiente'];
  $raio = $row['raio'];
  $idades = $row['idades'];
  $servico = $row['servico'];
?>


<div class="card mb-3 text-center shadow  bg-body rounded  border-secondary col-md-auto" style="max-width: 540px;">
   <div class="row g-0">
     <div class="col-md-4">
     <img src="../backend/model/images/" style= "height: 200px; width:200px;" >
     </div>
     <div class="col-md-8">
       <div class="card-body">
         <h5 class="card-title"></h5>
         <div class="ms-2">
         <p class="card-text m-2"><?php echo $servico;?></p>
         <p class="badge bg-secondary m-2"><?php echo  $qualificacao;?></p>
         <p class="badge bg-secondary m-2"><?php echo $raio;?></p>
         <p class="badge bg-secondary m-2"><?php echo $ambiente;?></p>
         <p class="badge bg-secondary m-2"><?php echo  $idades;?></p>
 </div>

 
 <!-- Modal -->
 <a class="btn btn-outline-danger m-2"  href="post_extendido.php" role="button" >
 Ver Contato
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
   <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
   <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
 </svg></a>
 
 <button class="btn btn-outline-danger m-3" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
 Comentarios
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
   <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
 </svg> </button>
   
 
       </div>
     </div>
   </div>
 </div>
 </div>
 
 <!-- Button trigger modal -->
 
 
 
 
 <!-- Button trigger modal -->
 
 
 
 
 
 
 


</div>


<?php
}

} else {
 ?>
<h1> Não encontrado</h1>
 <?php
}




}

}

?>



 


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script sc="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
</body>
</html>