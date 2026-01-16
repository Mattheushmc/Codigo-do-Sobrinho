<?php

class Cliente {

    private $id;
    private $nome;
    private $idade;
    private $cpf;

    public function __construct($id, $nome, $idade, $cpf){
    
        $this->id = $id;
        $this->nome = $nome;
        $this->idade = $idade;
        $this->cpf = $cpf;

    }

    public function getId(){
        return $this->id; 
    }

    public function setId($id){
        $this->id = $id;
    }
    public function getNome(){
        return $this->nome; 
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade; 
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }
    public function getCpf(){
        return $this->cpf; 
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
}

?>
