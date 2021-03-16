<?php 
class Usuario {
    public $id;
    public $cpf;
    public $senha;
    
    

function valida() {
    $sql = "select id from usuario where cpf like :cpf and senha = :senha ";
    $pdo = new Connection();
    $st = $pdo->prepare($sql);
    $st->bindParam(':cpf',$this->cpf,PDO::PARAM_STR);
    $st->bindParam(':senha',$this->senha,PDO::PARAM_STR);
    $st->execute();
    if ($st->rowCount()==0){
        return false; 
    } else {
        $r = $st->fetchAll(  );
        $this->id = reg[0]["id"];
        return true;
    }     
   
}

function incluir() {
    $q = "insert into usuario(cpf, senha) values (:cpf,:senha)";
    $pdo = new Connection();
    $st = $pdo->prepare($q);
    $st->bindParam(':cpf',$this->cpf,PDO::PARAM_STR);
    $st->bindParam(':senha',$this->senha,PDO::PARAM_STR);    
    $st->execute();    
    $this->id = $pdo->lastInsertId();
} 




}