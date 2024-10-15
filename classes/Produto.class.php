<?php

class Produto {

    private $descricao;
    private $tipo;
    private $quantidade;
    private $valor;
    
    public function getDescricao() {
        return $this->descricao;
    }
    
    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }
    
    public function getTipo() {
        return $this->tipo;
    }
    
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    
    public function getQuantidade() {
        return $this->quantidade;
    }
    
    public function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
    
    public function getValor() {
        return $this->valor;
    }
    
    public function setValor($valor) {
        $this->valor = $valor;
    }
    
}


?>