<?php

include_once('controllers/connection_post.php');

$chamando_post = mysqli_query($conn, "SELECT * FROM posts");

?>

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
    

</head>
<body class="bg-white">
  
<?php include 'include/header.php'; ?>

<br><br>

<div class="col-md-4">
<form class="d-flex">
        <input class="form-control md-3  border-dark" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-danger" type="submit">Search</button>


<script></script>

      </form>
<div>
<br><br>


<div class="borda"></div>


<br><br>


<?php while ($row = mysqli_fetch_array($chamando_post)) { ?>
 


 
<div class="card mb-3 text-center shadow  bg-body rounded  border-secondary col-md-auto" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img src="models/images/<?php echo $row['image'] ?>" style= "height: 200px; width:200px;" >
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $row['titulo'];?></h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
             
<!-- Modal -->
<a class="btn btn-outline-danger m-2"  href="post_extendido.php" role="button" >
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-up-right" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8.636 3.5a.5.5 0 0 0-.5-.5H1.5A1.5 1.5 0 0 0 0 4.5v10A1.5 1.5 0 0 0 1.5 16h10a1.5 1.5 0 0 0 1.5-1.5V7.864a.5.5 0 0 0-1 0V14.5a.5.5 0 0 1-.5.5h-10a.5.5 0 0 1-.5-.5v-10a.5.5 0 0 1 .5-.5h6.636a.5.5 0 0 0 .5-.5z"/>
  <path fill-rule="evenodd" d="M16 .5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h3.793L6.146 9.146a.5.5 0 1 0 .708.708L15 1.707V5.5a.5.5 0 0 0 1 0v-5z"/>
</svg>  </a>

 
     
      </div>
    </div>
  </div>
</div>
</div>

<!-- Button trigger modal -->




<!-- Button trigger modal -->







<?php }?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>








</body>
</html>
