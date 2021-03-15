
  
  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hígia</title>


    <link href="../css/tc.css" rel="stylesheet">
   
   
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
   


    <!-- Adicionando JQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>

    <!-- Adicionando Javascript -->
    <script>

        $(document).ready(function() {

            function limpa_formulário_cep() {
                // Limpa valores do formulário de cep.
                $("#rua").val("");
                $("#cidade").val("");
               
            }
            
            //Quando o campo cep perde o foco.
            $("#cep").blur(function() {

                //Nova variável "cep" somente com dígitos.
                var cep = $(this).val().replace(/\D/g, '');

                //Verifica se campo cep possui valor informado.
                if (cep != "") {

                    //Expressão regular para validar o CEP.
                    var validacep = /^[0-9]{8}$/;

                    //Valida o formato do CEP.
                    if(validacep.test(cep)) {

                        //Preenche os campos com "..." enquanto consulta webservice.
                        $("#rua").val("...");
                        $("#cidade").val("...");
                      
                        //Consulta o webservice viacep.com.br/
                        $.getJSON("https://viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                            if (!("erro" in dados)) {
                                //Atualiza os campos com os valores da consulta.
                                $("#rua").val(dados.logradouro);
                                $("#cidade").val(dados.localidade);
                                
                            } //end if.
                            else {
                                //CEP pesquisado não foi encontrado.
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });
                    } //end if.
                    else {
                        //cep é inválido.
                        limpa_formulário_cep();
                        alert("Formato de CEP inválido.");
                    }
                } //end if.
                else {
                    //cep sem valor, limpa formulário.
                    limpa_formulário_cep();
                }
            });
        });

    </script>
  
  </head>
<body>
    
    <div class="container-md">
   
        <form class="row g-3" method="POST" action="../backend/model/process.php">
        
        
    <div class="container text-center">
 <h5 class="fs-3">Criação de Cadastro</h5>
</div>

        <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">CPF</label>
  <input type="text" name="cpf" class="form-control" id="formGroupExampleInput" placeholder="">
</div>
<div class="mb-3">
  <label for="formGroupExampleInput2" class="form-label">Senha</label>
  <input  type="password"  name="senha" class="form-control" id="formGroupExampleInput2" placeholder="">
</div>




<br>
<br>
<br>
<br>

<br>
<br>


<div class="container text-center">
 <h5 class="fs-3">Cadastro de dados</h5>
</div>


  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="inputEmail4">
  </div>
  
  <br>




<div class="col-12">
    <label for="inputAddress2" class="form-label">CEP</label>
    <input type="text" name="cep" class="form-control" id="cep" maxlength="9"  placeholder="Digite um cep..." >
   



  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Endereço</label>
    <input type="text" name="endereco" id="rua" class="form-control" id="inputAddress" placeholder="" >
  </div>
 
  
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Cidade</label>
    <input type="text" name="cidade" id="cidade" class="form-control" id="inputCity">
  </div> 
  


  <div class="col-md-2">
    <label for="inputZip" class="form-label">Nome</label>
    <input type="text" name="nome"  class="form-control" id="inputZip">
  </div>

  <br>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Treina por quantas horas</label>
    <input type="number" name="nivel" class="form-control" id="inputCity">
  </div>
   
<br>
   <div>
   <label for="inputCity" class="form-label">Medicamentos</label>

<select class="form-select form-select" name="medicamentos" aria-label=".form-select-sm example">
  <option selected>Selecione uma das opções</option>
  <option value="uso medicamentos">uso medicamentos</option>
  <option value="Não uso medicamento">Não uso medicamento</option>
</select>
</div>

<br>
<div>
   <label for="inputCity" class="form-label">genêro</label>
  
<br>
<select class="form-select form-select" name="genero" aria-label=".form-select-sm example">
  <option selected>Selecione uma das opções</option>
  <option value="Mulher">Mulher</option>
  <option value="Macho-para-fêmea">Macho-para-fêmea</option>
  <option value="Pessoa trans">Pessoa trans</option>
  <option value="transgênero não binário">transgênero não binário</option>
  <option value="andrógena">andrógena(o)</option>
  <option value="Bi-gênero">Bi-gênero</option>
  <option value="Homem">Homem</option>
  <option value="Transexual/Transsexual">Transexual/Transsexual</option>
  <option value="sem gênero">sem gênero</option>
  <option value="Drag-Queen">Drag-Queen</option>
  <option value="Drag-King">Drag-King</option> 
  <option value="não prefiro dizer">não prefiro dizer</option>


</select>
</div>


<br>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Numero do celular</label>
    <input type="text" name="celular"  class="form-control" id="inputZip">
  </div>
  <br>
  
<br>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Numero do fixo(caso tenha)</label>
    <input type="text" name="fixo"  class="form-control" id="inputZip">
  </div>
  <br>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">Numero da casa</label>
    <input type="text" name="numero"  class="form-control" id="inputZip">
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
              <button type="submit" class="btn btn-primary" href="msg_cadas.php">Cadastrar-Se</button>
            </div>
          </form>

    </div>
   
  <!-- Bootstrap core JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>



</body>
</html>