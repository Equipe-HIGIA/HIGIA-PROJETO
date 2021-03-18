<!DOCTYPE html>


<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" viewport-fit="cover">
    <meta name="msapplication-tap-highlight" content="no">
       
  
    <!-- Links  -->


    <link href="css/tl.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    
   <!--   -->

    <title>Hígia - Disposicao para a Saude</title>
</head>
<body class="bg-white">
 
      <!--  NavBar -->

  <nav class="navbar navbar-expand-lg  text-white bg-dark text-white" id="navbarToggleExternalContent">
  <div class="container-fluid  ">
  <a class="navbar-brand nav-link disabled text-white" href="index.php"><img id="logohigia" src="img/logo.png"></a>
  
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-grid-3x3-gap-fill" viewBox="0 0 16 16">
  <path d="M1 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V2zM1 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V7zM1 12a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-2zm5 0a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-2z"/>
  </svg>
    </span>
  </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav text-white">
        <li class="nav-item">
          <a href="app/view/login.php" id="btnmenu" class="nav-link text-yellow fs-4 <?php if(basename($_SERVER['PHP_SELF']) == "login.php"){echo "active";}else{echo "";}?>" aria-current="page" ><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="" viewBox="0 0 16 16">
  <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
  <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
</svg>Login</a>
        </li>
        <li class="nav-item">
          <a  href="app/view/usuario.php" class="nav-link text-yellow fs-4  <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>" ><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>Cadastrar-se</a>
        </li>
    
        <li   class="nav-item">
          <a href="app/view/desenvolvedores.php" class="nav-link text-yellow fs-4  <?= (basename($_SERVER['PHP_SELF']) == "index.php")?"active":"";?>"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-phone-fill" viewBox="0 0 16 16">
  <path d="M8 0l1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
  <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
</svg>Contato</a>
        </li></ul>
      </div>    
    </div>
    <span id="frasemenu" class="navbar-text">
    DISPOSIÇÃO PARA A SAÚDE
    </span>
    </nav>

    <!--   -->
    <div class="centralizar">


    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <div class="carousel-item active" data-bs-interval="10000" id="bgvid" >
     


     <video  playsinline autoplay muted loop   >
   <source src="video/Running - 3599.mp4" type="video/mp4">
       </video>


     
     </div>
     <div  class="carousel-item" data-bs-interval="10000" id="bgvi"> 
   
       <img src="img/jonathan-borba-kCVZIbOKztI-unsplash.jpg" class="img-fluid" alt="Responsive image">

   
     
     </div>
     <div  class="carousel-item" data-bs-interval="10000" id="bgv">
       
      
     <img src="img/jess-eddy-nnsyyS7Of_Q-unsplash.jpg" class="img-fluid" alt="Responsive image">

      
     </div>

  </div>
</div>






<div class="bgvid">
  <h1>Sempre pensando na sua saúde.
  </h1>
</div>




  </div>
  
  <!--   -->

<br><br><br><br>

    <!-- Textos -->


<h2 id="sobre" class="text-center">SOBRE</h2>

<br><br>

<div class="centralizar"><h4 class="text-center">
 O aplicativo Higia, surgiu para auxiliar a todas as pessoas que precisam de um profissional de Educacao Fisica,
 que possa oferecer a assistência necessária, na busca por melhoria da saude.
 <br><br>Nos dias atuais, nota-se a dificuldade em encontrar tempo e disposição para cuidar da saúde.
 Diante disto, o sistema foi desenvolvido, visando encurtar a distância e intermediar o acesso entre profissional e cliente,
 de maneira prática e efetiva, gerando praticidade, trabalho, e saúde para ambos.
 <br><br>O Higia, ainda proporciona visibilidade aos profissionais que precisam de maior divulgação e ascensão do seu trabalho. 
 Pois, com este website, o portfólio do profissional estará disponível para milhares de potenciais clientes,
 através de filtros que buscam igualdade entre características básicas, pré-cadastrados por ambos usuários. 
</h4>
</div>
<br><br><br><br>

<div class="centralizar"><img src="img/luis-vidal-FodEsaNZs48-unsplash.jpg" class="img-fluid" alt="Responsive image"  style=" height:500; width:80%;" id="sda1"></div>

  

<br><br><br><br>

<h2 class="text-center">Como funciona</h2>

<br><br>


  <div class="centralizar"><h4 class="text-center">
  O Profissional de Educacao Fisica tera a oportunidade de utilizar o aplicativo, como uma alavanca para seu portfólio profissional.
  Tendo a chance de mostrar seu trabalho e encontrar clientes que buscam por alguém com as características e formações especificas que este, tem a oferecer. 
  O aplicativo irá trabalhar o marketing deste profissional, apresentando-o a milhares de potenciais clientes.
  Do outro lado, o cliente que busca pelo profissional ideal, que possa atender efetivamente suas necessidades, bastando buscar em nosso catalogo,
  especificando as opcoes desejadas.

  </h4>
</div>
 <br><br><br><br>


 <div class="centralizar"><img src="img/1saude_auto_x2.jpg" class="img-fluid" alt="Responsive image" style=" height:500; width:80%;" id="sda"></div>

  <br><br><br><br>

  <h2 id="produtos" class="text-center">Produto oferecido</h2>

  <div class="centralizar"><h4 class="text-center">
    Oferecemos um sistema de cadastro e filtro de informações, visando comparar e apresentar dados úteis.
    Onde, se encontra o Profissional, que busca aumentar a visibilidade de seu portfólio profissional
    e novas oportunidades de trabalho e o Cliente que busca por melhoria da saúde. Nosso sistema, tem como base,
    facilitar o contato entre nossos usuários. 
  </h4>
  </div>
  <br><br><br><br>

  <div class="centralizar"><img src="img/ivan-torres-SVITzHh1Cdg-unsplash.jpg" class="img-fluid" alt="Responsive image" style=" height:500; width:80%;" id="sw"></div>


  <br><br><br><br>

  <h2 class="text-center">Promoções</h2>

  <div class="centralizar"><h4 class="text-center">
   Promoções especiais para Profissionais. E futuros eventos que poderão te ajudar a alavancar seu portfólio, dando a ele, maior visibilidade.
  </h4> 
  </div>

       <br><br><br><br>
       <div class="centralizar"><img src="img/logoextendida.png" class="img-fluid" alt="Responsive image"></div>
       <br><br>

      <div id="divbtn">
        <h2 alt="Responsive image">Participe dessa experiência.</h2>
      </div>
      <div id="divbtn">
        <a id="btncadastro" class="nav-item nav-link btn rounded-pill btn-outline-warning " href="app/view/usuario.php" role="button">Cadastre-se já</a>
      </div>

    <!-- Final -->

  </div>
  <div class="card-group bg-dark ">
    <p id="copyright">
      © 2021 Higia - Disposicao para a Saude | Projeto TCC
 </p>
    
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  <script src="js/index.js"></script>
  

</body>
</html>