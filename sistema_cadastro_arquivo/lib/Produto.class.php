<?php


class Produto {

    private $id;
    private $nome;
    private $valor;
    private $quantidadeEstoque;

    public function Produto($id, $nome, $valor, $quantidadeEstoque){
        $this->id = $id;
        $this->nome = $nome;
        $this->valor = $valor;
        $this->quantidadeEstoque = $quantidadeEstoque;
    }
}