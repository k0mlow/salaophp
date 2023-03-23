<?php


class Agendamento {
  private $idServico;
  private $id;
  private $idCliente;
  private $data;
  private $hora;
  function getIdServico() {
      return $this->idServico;
  }

  function getId() {
      return $this->id;
  }

  function getIdCliente() {
      return $this->idCliente;
  }

  function getData() {
      return $this->data;
  }

  function getHora() {
      return $this->hora;
  }

  function setIdServico($idServico) {
      $this->idServico = $idServico;
  }

  function setId($id) {
      $this->id = $id;
  }

  function setIdCliente($idCliente) {
      $this->idCliente = $idCliente;
  }

  function setData($data) {
      $this->data = $data;
  }

  function setHora($hora) {
      $this->hora = $hora;
  }


}
