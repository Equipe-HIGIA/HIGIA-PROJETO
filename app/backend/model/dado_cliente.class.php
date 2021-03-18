<?php



class DadosCliente {
 
    
  
    public $nivel; 
    public $medicamentos;
    public $usuario_id;
  

function Dadc(){

    $sql = "insert into cliente(nivel, medicamentos, usuario_id) values (:nivel, :medicamentos, :usuario_id)";
    $pdo = new Connection();
    $st = $pdo->prepare($sql);
    $st->bindParam(':nivel',$this->nivel,PDO::PARAM_INT);
    $st->bindParam(':medicamentos',$this->medicamentos,PDO::PARAM_STR);
    $st->bindParam(':usuario_id',$this->usuario_id,PDO::PARAM_INT);
    $st->execute();  
    $usuario_id = $pdo->lastInsertId();
 

}


}





?>