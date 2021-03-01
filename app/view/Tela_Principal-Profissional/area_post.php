
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HÍGIA</title>


  <style> *{ font-family: "Baloo Tamma 2" !important;}
  
  .bordas{
  border:5px solid #FF653B;
  background-color: #FF653B;
  width: 400px;
  border-radius: 10px;
}
  </style>
   
   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    

</head>
<body>
  
<?php include 'include/header.php'; ?>


<div class="container-xl align-items-center justify-content-center">


<br><br>

<!-- Button trigger modal -->
<button type="button" class=" btn btn-lg d-flex justify-content-around btn-primary " data-bs-toggle="modal" data-bs-target="#staticBackdrop">
<svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" fill="currentColor" class="bi bi-lightbulb-fill" viewBox="0 0 16 16">
  <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13h-5a.5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm3 8.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1-.5-.5z"/>
</svg>Criar Post
</button>

<!-- Modal -->
<div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Criar Post</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="models/posts.php" method="POST" enctype="multipart/form-data" class="was-validated">

      <div class="col-md-4">
    <label for="validationTextarea" class="form-label">Titulo</label>
    <input type="text" name="titulo" class="form-control is-valid" id="validationTextarea" placeholder="Ola mundo1" required>
    <div class="invalid-feedback">
      Por favor escreva o titulo
    </div>
  </div>

  <div class="col-md-4">
    <label for="validationTextarea" class="form-label">SubTitulo</label>
    <input type="text" name="subtitulo" class="form-control is-valid" id="validationTextarea" placeholder="Ola mundo2" required>
    <div class="invalid-feedback">
      Por favor escreva o SubTitulo
    </div>
  </div>


  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Descrição inicial</label>
    <textarea name="Area_texto" class="form-control is-invalid" id="validationTextarea" placeholder="Insira a descrição inicial" required></textarea>
    <div class="invalid-feedback">
     Por favor escreva o texto para o seu produto
    </div>
  </div>
  

  <div class="mb-3">
    <label for="validationTextarea" class="form-label">Descrição Principal</label>
    <textarea name="area_texto_principal" class="form-control is-invalid" id="validationTextarea" placeholder="Insira a descrição principal" required></textarea>
    <div class="invalid-feedback">
     Por favor escreva o texto para o seu produto
    </div>
  </div>

  <select class="form-select is-invalid" name="opcao" aria-label="Default select example">
  <option selected>Selecione Uma das opção</option>
  <option value="Ioga">Ioga</option>
  <option value="Musculação">Musculação</option>
  <option value="Treinos aeróbicos">Treinos aeróbicos</option>
  <option value="Dança">Dança</option>

  <div class="invalid-feedback">
     Por favor escreva o texto para o seu produto
    </div>

</select>
<br>

<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Preço do produto</label>
  <input type="text" name="preco" class="form-control is-invalid" id="formGroupExampleInput" placeholder="Por favor informe o preço do produto">

  <div class="invalid-feedback">
     Por favor escreva o texto para o seu produto
    </div>

</div>


  <div class="mb-3">
    <input type="file" name="image" class="form-control" aria-label="file example" required>
    <div class="invalid-feedback">Escolha uma imagem para mostrar o seu produto</div>
  </div>

  <div class="mb-3">
    <button class="btn btn-primary" type="submit" name="enviar">Enviar</button>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>





<br>
<br>

<div class="bordas "></div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>
</html>