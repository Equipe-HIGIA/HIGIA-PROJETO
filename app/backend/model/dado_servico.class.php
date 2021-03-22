<?php

class DadosServico{


    public $paginas; 
    public $especialidade;
    public $qualificacao;
    public $ambiente;
    public $grupo;
    public $localatendimento;
    public $servico;
    public $raio;
    public $idades;
    public $especial;
    
  


    function Dads(){

        $s = "insert into profissional(paginas, especialidade, qualificacao, ambiente, grupo, localatendimento, servico, raio, idades, especial) values (:paginas, :especialidade, :qualificacao, :ambiente, :grupo, :localatendimento, :servico, :raio, :idades, :especial)";
        $pdo = new Connection();
        $st = $pdo->prepare($s);
        $st->bindParam(':paginas',$this->paginas,PDO::PARAM_STR);
        $st->bindParam(':especialidade',$this->especialidade,PDO::PARAM_STR);
        $st->bindParam(':qualificacao',$this->qualificacao,PDO::PARAM_STR);
        $st->bindParam(':ambiente',$this->ambiente,PDO::PARAM_STR);
        $st->bindParam(':grupo',$this->grupo,PDO::PARAM_INT);
        $st->bindParam(':localatendimento',$this->localatendimento,PDO::PARAM_STR);
        $st->bindParam(':servico',$this->servico,PDO::PARAM_STR);
        $st->bindParam(':raio',$this->raio,PDO::PARAM_STR);
        $st->bindParam(':idades',$this->idades,PDO::PARAM_STR);
        $st->bindParam(':especial',$this->especial,PDO::PARAM_STR);
        $st->execute();  
        echo $pdo->lastInsertId();
    }
    
    



}




?>