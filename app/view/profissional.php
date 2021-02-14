<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hígia</title>


    <link href="../css/tc.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  

   
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</head>
<body>
    



  <div class="container-md">
   
    <form class="row g-3" method="POST" action="../backend/model/process2.php">
       
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Senha</label>
          <input type="password" name="senha" class="form-control" id="inputPassword4">
        </div>
        <div class="col-12">
          <label for="inputAddress" class="form-label">Primeiro nome</label>
          <input type="text" name="Primeiro_Nome" class="form-control" id="inputAddress" placeholder="">
        </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Ultímo nome</label>
          <input type="text" name="Ultimo_Nome" class="form-control" id="inputAddress2" placeholder="">
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Cidade</label>
          <input type="text" name="Cidade" class="form-control" id="inputCity">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">CPF</label>
          <input type="text" name="CPF" class="form-control" id="inputZip">
        </div>
        
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Formação acadêmica</label>
          <input type="text" name="Formacao_Academica" class="form-control" id="inputZip">
        </div>  <div class="col-md-2">
          <label for="inputZip" class="form-label">experiência profissional</label>
          <input type="text" name="Experiencia_Profi" class="form-control" id="inputZip">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">especialidade</label>
          <input type="text" name="Especialidade" class="form-control" id="inputZip">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
              <label for="inputCity" class="form-label">Região</label>
              <input type="text" name="regiao" class="form-control" id="inputCity">
            </div>
      
        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Aceitar acordo e termos de serviço.
            </label>
          </div>
        </div>
        <div class="col-12">
          <button type="submit" class="btn btn-primary">Cadastrar-Se</button>
        </div>
      </form>

</div>




   
  <!-- Bootstrap core JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>


</body>
</html>