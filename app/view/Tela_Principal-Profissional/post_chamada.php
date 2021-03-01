<?php


require_once("controllers/connection_post.php");


$sql = "SELECT * FROM posts ";

$result = mysqli_query($conn, $sql);
$resultado = mysqli_fetch_assoc($result);

if (isset($resultado)) {
    
    $_SESSION['image_post'] = $resultado['image'];
   $_SESSION['post_titulo'] = $resultado['titulo'];
    $_SESSION['post_Area_texto'] = $resultado['Area_texto'];
    
}



?>