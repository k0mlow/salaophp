<?php


class OrdemServico {
    private $id;
    private $idCliente;
    private $idItemservico;
    
    function getId() {
        return $this->id;
    }

    function getIdcliente() {
        return $this->idcliente;
    }

    function getIdItemservico() {
        return $this->idItemservico;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    function setIdItemservico($idItemservico) {
        $this->idItemservico = $idItemservico;
    }


}
