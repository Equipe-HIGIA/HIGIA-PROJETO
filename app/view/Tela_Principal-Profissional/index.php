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
  
  .modal-bgd{
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 0;
    left:0;
    background-color: rgba(0,0,0,0.5);
    display:flex;
    justify-content: center;
    align-items: center;
    visibility: hidden;
    opacity: 0;
    transition:  visibility 0s, opacity 0.5s;
  }
  .bgs-active{
    visibility: visible;
    opacity: 1;
  }


.modal-err{
  position: relative;
  background-color: white;
  width: 30%;
  height: 30%;
  display: flex;
  justify-content: space-around;
align-items: center;
flex-direction: column;

}
.modals-closer{
  position: absolute;
  top: 10px;
  right: 10px;
  font-weight: bold;
  cursor: pointer;
}
  </style>
   

   <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@600&display=swap" rel="stylesheet">  
  
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

</head>
<body class="bg-white">
  
<?php include 'include/header.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="app.js"></script>


</body>
</html>
