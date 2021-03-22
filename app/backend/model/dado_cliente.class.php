<?php



class DadosCliente {
 
    
  
    public $nivel; 
    public $medicamentos;
   
  

function Dadc(){

    $sql = "insert into cliente(nivel, medicamentos, usuario_id) values (:nivel, :medicamentos)";
    $pdo = new Connection();
    $st = $pdo->prepare($sql);
    $st->bindParam(':nivel',$this->nivel,PDO::PARAM_INT);
    $st->bindParam(':medicamentos',$this->medicamentos,PDO::PARAM_STR);
     $st->execute();  
  

}


}





?>