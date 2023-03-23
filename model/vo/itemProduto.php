<?php

class itemProduto {
    private $id;
    Private $idOrdemProduto; 
    Private $idCliente;
    
    function getId() {
        return $this->id;
    }

    function getIdOrdemProduto() {
        return $this->idOrdemProduto;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdOrdemProduto($idOrdemProduto) {
        $this->idOrdemProduto = $idOrdemProduto;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }


}
