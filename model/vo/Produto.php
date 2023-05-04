<?php

class Produto {
 
    Private $id; 
    Private $nome;
    Private $preco;
    Private $quantidade;
    
        function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getPreco() {
        return $this->preco;
    }

    function getQuantidade() {
        return $this->quantidade;
    }
    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }


    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }
}
