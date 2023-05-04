<?php


class OrdemProduto {
     private $id;
    private $idCliente;
    private $idItemProduto;
    
    function getId() {
        return $this->id;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function getIdItemProduto() {
        return $this->idItemProduto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdcliente($idCliente) {
        $this->idCliente = $idCliente;
    }

    function setIdItemProduto($idItemProduto) {
        $this->idItemProduto = $idItemProduto;
    }


}
