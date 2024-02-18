<?php

//Classe
class Pessoa{
    //Atributos
    private $nome;
    private $telefone;
    private $origem;
    private $data;
    private $observacao;

    //metodo GET nome
    public function getNome(){
        return $this -> nome;
    }

    //metodo SET nome
    public function setNome($nome){
        $this -> nome = $nome;
    }

    //metodo GET telefone
    public function getTelefone(){
        return $this -> telefone;
    }

    //metodo SET telefone
    public function setTelefone($telefone){
        $this -> telefone = $telefone;
    }

    //metodo GET origem
    public function getOrigem(){
        return $this -> origem;
    }

    //metodo SET origem
    public function setOrigem($origem){
        $this -> origem = $origem;
    }

    //metodo GET data
    public function getData(){
        return $this -> data;
    }

    //metodo SET data
    public function setData($data){
        $this -> data = $data;
    }

    //metodo GET cidadObservacaoe
    public function getObservacao(){
        return $this -> observacao;
    }

    //metodo SET Observacao
    public function setObservacao($observacao){
        $this -> observacao = $observacao;
    }

}

?>