<?php

session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HÍGIA</title>


  <style> *{ font-family: "Baloo Tamma 2" !important;}</style>
   
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

</head>
<body>
  
<?php include 'include/header.php'; ?>

<div class="card border border-dark shadow-lg position-absolute top-50 start-50 translate-middle" style="width: 18rem;">
<div class="text-center">
  <img src="..." class="img-thumbnail rounded" alt="...">
</div><div class="card-body">
    
<?php
echo "Primeiro Nome: ".  $_SESSION['Profissional_Primeiro_Nome'];
?><br><br><?php
echo "Ultimo Nome: ". $_SESSION['Profissional_Ultimo_Nome']; 
?><br><br><?php
echo "Cidade: ". $_SESSION['ProfissionalCidade'];
?><br><br><?php
echo "Região: ". $_SESSION['ProfissionalRegiao'];
?><br><br><?php
echo "Formação Academica: ". $_SESSION['ProfissionalFormacao'];
?> </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>