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


  <style> *{ font-family: "Baloo Tamma 2" !important;}
  
 
  
  </style>
   
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

</head>
<body class="bg-white">
  
  <header>
<?php include 'include/header.php'; ?>
</header>
<br><br>



<main>


<div class="container-md">

<div class="card rounded-3 border-warning shadow-lg mb-3 position-absolute top-50 start-50 translate-middle" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Warning card title</h5>
    <p class="card-text">
    
    <?php
echo "Nome: ".$_SESSION['clienteNome'];
?><br><?php
echo "CEP: ".$_SESSION['clienteCep'];
?><br><?php
echo "Endereço: ". $_SESSION['clienteEndereco']; 
?><br><?php
echo "Cidade: ". $_SESSION['clienteCidade'];
?><br><?php
echo "Genêro: ". $_SESSION['clienteGenero'];
?><br><?php
echo "Medicamento: ". $_SESSION['clienteMedicamento'];
?><br><?php
echo "Celular: ". $_SESSION['clienteCelular'];
?><br><?php
echo "Fixo: ". $_SESSION['clienteFixo'];
?><br><?php
echo "Horas que treina: ". $_SESSION['clienteNivel'];
?>

</p>
  </div>
</div>

</div>



</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>








</body>
</html>