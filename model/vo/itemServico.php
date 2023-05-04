<?php


class itemServico {
    private $id;
    Private $idOrdemServico; 
    Private $idCliente;
    
    function getId() {
        return $this->id;
    }

    function getIdOrdemServico() {
        return $this->idOrdemServico;
    }

    function getIdCliente() {
        return $this->idCliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdOrdemServico($idOrdemServico) {
        $this->idOrdemServico = $idOrdemServico;
    }

    function setIdCliente($idCliente) {
        $this->idCliente = $idCliente;
    }


}
