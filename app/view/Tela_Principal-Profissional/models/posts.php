<?php


require_once("../controllers/connection_post.php");




$rp = mysqli_query($conn, $resultado_post);


if(isset($_POST['enviar'])){


$target = "images/".basename($_FILES['image']['name']);


$image  = $_FILES['image']['name'];
$titulo = $_POST['titulo'];
$Area_texto = $_POST['Area_texto'];
$subtitulo = $_POST['subtitulo'];
$area_texto_principal = $_POST['area_texto_principal'];
$opcao =  $_POST['opcao'];
$preco =  $_POST['preco'];


$resultado_post = "INSERT INTO posts (image, titulo, Area_texto, subtitulo, area_texto_principal, opcao, preco)  VALUES('$image', '$titulo', '$Area_texto', '$subtitulo', '$area_texto_principal', '$opcao', '$preco') ";



$rp = mysqli_query($conn, $resultado_post);


if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){header('Location: msg_post.php');}

}
?>