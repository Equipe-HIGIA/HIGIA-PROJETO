<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hígia</title>

    <style> *{ font-family: "Baloo Tamma 2" !important;}</style>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">



</head>
<body>
    
<div class="container d-flex justify-content-center">

<div class=" card  shadow-lg text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <li class="nav-item">
      <a type="button" class=" nav-link btn btn-outline-primary" href="login.php" role="button">Cliente</a>
      </li>
      <li class="nav-item">
      <a type="button" class="  nav-link btn btn-outline-primary" href="login_profissional.php" role="button">Profissionais</a>
      </li>
      
    </ul>
  </div>
  <div class="card-body">
   
   

<form action="validates_client.php"  method="POST">
  <div class="mb-3 ">
    <label for="exampleInputEmail1" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">senha</label>
    <input type="password" name="senha" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    
  </div>
  <button  type="submit"class="btn btn-outline-warning">Login</button>
<p class="text-center text-danger">
<?php
if(isset($_SESSION['loginErro'])){
  echo $_SESSION['loginErro'];
  unset ($_SESSION['loginErro']);
}

?>

</p>



</form>
   
 
   
   </div>
</div>





</div>






<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>