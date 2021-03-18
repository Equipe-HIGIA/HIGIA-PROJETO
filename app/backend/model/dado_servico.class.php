<?php

class DadosServico{


    public $paginas; 
    public $especialidade;
    public $idades;
    public $qualificacao;
    public $ambiente;
    public $servico;
    public $localatendimento;
    public $especial;
    public $raio;
    public $grupo;
    public $usuario_id;
  


    function Dads(){

        $sql = "insert into profissional(paginas, especialidade, qualificacao, ambiente, grupo, localatendimento, servico, raio, idades, especial, usuario_id) values (:paginas, :especialidade, :qualificacao, :ambiente, :grupo, :localatendimento, :servico, :raio, :idades, :especial  ,:usuario_id)";
        $pdo = new Connection();
        $st = $pdo->prepare($sql);
        $st->bindParam(':paginas',$this->paginas,PDO::PARAM_STR);
        $st->bindParam(':especialidade',$this->especialidade,PDO::PARAM_STR);
        $st->bindParam(':qualificacao',$this->qualificacao,PDO::PARAM_STR);
        $st->bindParam(':ambiente',$this->ambiente,PDO::PARAM_STR);
        $st->bindParam(':grupo',$this->cpf,PDO::PARAM_INT);
        $st->bindParam(':localatendimento',$this->localatendimento,PDO::PARAM_STR_CHAR);
        $st->bindParam(':servico',$this->servico,PDO::PARAM_STR);
        $st->bindParam(':raio',$this->raio,PDO::PARAM_STR);
        $st->bindParam(':idades',$this->idades,PDO::PARAM_STR);
        $st->bindParam(':especial',$this->especial,PDO::PARAM_STR);
        $st->bindParam(':usuario_id',$this->usuario_id,PDO::PARAM_INT);
        $st->execute();  
        $usuario_id = $pdo->lastInsertId();
     
    
    }
    
    



}




?>