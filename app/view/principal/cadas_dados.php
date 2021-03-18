
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
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body class="bg-white">
  
  <header>
<?php include 'include/header.php'; ?>
  </header>


<br><br>




<main>

<article class="mb-4">
<p class="text-center fs-1">Venha completar os seus dados para poder desfruir o que o higia tem a oference.</p>

</article>


<div class="container-fluid  d-flex justify-content-center">
 
<div class="card  text-center  border-dark shadow" style="width: 28rem;">
  <div class="card-body">
  Cadastro de dados de cliente, caso você queira desfruir os serviços, precisaremos saber os seus dados.
  </div>
</div>
 
<br>

</div>



<p class=" d-flex justify-content-center  align-items-center">

<button class="btn btn-outline-warning shadow-sm m-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
  Cadastro de dados 
</button>
</p>
<div class="collapse" id="collapseExample">
<div class="card card-body border-dark">

<form   method="POST" action="../backend/controller/dados_cliente.php" id="form1">
<div class="mb-3">
  <label for="nivel" class="form-label">Quantas horas você exercita</label>
  <input type="text" class="form-control" name="nivel" placeholder="Digite...">
</div>
<div class="mb-3">
<label for="medicamentos" class="form-label">Medicamentos</label>
<select class="form-select" name="medicamentos" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="sim">Uso medicamentos</option>
  <option value="não">Não uso medicamento</option>
  
</select>
 </div>
 <div class="col-12">
    <button type="submit" name="enviar1" class="btn btn-primary">registrar-se</button>
  </div>
  </form>

</div>

</div>



<br><br>




<div class="container-fluid  d-flex justify-content-center">
 
<div class="card  text-center  border-dark shadow" style="width: 28rem;">
  <div class="card-body">
 O Cadastro de serviços não é obrigatorio esse cadastro servira apenas para os profissionais que tem interesse em  registrar o seu serviço.
  </div>
</div>
 
<br>

</div>



<p class=" d-flex justify-content-center  align-items-center">

<button class="btn btn-outline-warning shadow-sm m-4" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapseExample">
  Cadastro de serviço
</button>
</p>
<div class="collapse" id="collapse2">
<div class="card card-body border-dark">

<form  action="../backend/controller/dados_servico.php" id="form2">
<div class="mb-3">
  <label for="idades" class="form-label">Quantas pessoas você consegue atender</label>
  <input type="number" class="form-control" name="idades" placeholder="Digite...">
</div>



<div class="mb-3">
  <label for="paginas" class="form-label">Escolha uma pagina</label>
  <input type="text" class="form-control" name="paginas" placeholder="Digite...">
</div>

<div class="mb-3">
  <label for="qualificacao" class="form-label">Qualificação</label>
  <input type="text" class="form-control" name="qualificacao" placeholder="Digite...">
</div>

<div class="mb-3">
  <label for="especialidade" class="form-label">Especialidade</label>
  <input type="text" class="form-control" name="especialidade" placeholder="Digite...">
</div>

<div class="mb-3">
    <label for="servico" class="form-label">Descrição do seu serviço</label>
    <textarea class="form-control is-invalid" name="servico" placeholder="Digite o seu texto" required></textarea>
    <div class="invalid-feedback">
      Por favor digite a descrição do seu serviço.
    </div>
  </div>


<div class="mb-3">
<label for="raio" class="form-label">Raio de atuação</label>
<select class="form-select" name="raio" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="1000">1000KM</option>
  <option value="500">500KM</option>
  <option value="400">400KM</option>
  <option value="300">300KM</option>
  <option value="200">200KM</option>
  <option value="100">100KM</option>
  <option value="50">50KM</option>
  <option value="40">40KM</option>
  <option value="30">30KM</option>
  <option value="20">20KM</option>
  <option value="10">10KM</option>
  
</select>
 </div>

 <div class="mb-3">
<label for="raio" class="form-label">Idades que atende os cliene</label>
<select class="form-select" name="raio" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="60+">60+</option>
  <option value="40-50">40-50</option>
  <option value="30-40">30-40</option>
  <option value="20-30">20-30</option>
  <option value="10-20">10-20</option>
  <option value=">0-10">0-10</option>
 
</select>
 </div>

 
<div class="mb-3">
<label for="ambiente" class="form-label">Ambiente</label>
<select class="form-select" name="ambiente" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="faço exercios praticados ao ar livre">Os exercios praticados ao ar livre</option>
  <option value="Os exercios são feitos em aparelho">Os exercios são feitos em aparelho</option>
  <option value="faço execios no ar livre e em aparelhos">Os exercios no ar livre e em aparelhos</option>
 
  
</select>
 </div>



 <div class="mb-3">
<label for="localatendimento" class="form-label">Local de atendimento</label>
<select class="form-select" name="localatendimento" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="Atendo nas casas dos cliente">Atendo nas casas dos cliente</option>
  <option value="Só atendo no meu consutorio">Só atendo no meu consutorio</option>
  <option value="Atendo no meu consutorio e casas dos clietes">Atendo no meu consutorio e casas dos clietes</option>
 
  
</select>
 </div>



 <div class="mb-3">
<label for="especial" class="form-label">Atende pessoas com capacidade fisica especial</label>
<select class="form-select" name="especial" aria-label="Default select example">

  <option selected>Selecione uma das opções</option>
  <option value="S">SIM</option>
  <option value="N">NÃO</option>
 
  
</select>
 </div>


 <div class="col-12">
    <button type="submit" name="enviar2" class="btn btn-primary">registrar</button>
  </div>
  </form>

</div>

</div>







</main>

<br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="app.js"></script>


</body>
</html>
