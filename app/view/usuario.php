
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HÍGIA - Registro de usuário</title>
    <link href="css/tc.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
   
  <style> *{ font-family: "Baloo Tamma 2" !important;}</style>
   
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    
  



</head>
<body>
    
  <div class="container-md">
   
     <form  method="POST" action="../backend/controller/usuario.php" class="row g-3">
     <input type="hidden" name="op" value="inc">
    <div class="container text-center">
       <h5 class="fs-3">Resgistro de Usuário</h5>
    </div>

    <div class="mb-3">
      <label for="formGroupExampleInput" class="form-label">CPF</label>
      <input type="text" name="cpf" class="form-control" id="formGroupExampleInput" placeholder="">
    </div>
    <div class="mb-3">
      <label for="formGroupExampleInput2" class="form-label">Senha</label>
      <input type="password"  name="senha" class="form-control" id="formGroupExampleInput2" placeholder="">
    </div>
        <center><button type="clear" class="btn btn-secondary">Limpar</button><button type="submit" class="btn btn-success">Confirmar</button></center>
      </form>
</div>
<button class="btn btn-primary botao-volta" onclick="window.history.back()">Voltar</button>  </div>
  
  <!-- Bootstrap core JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>