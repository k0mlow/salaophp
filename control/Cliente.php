<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/salaophp/model/vo/Cliente.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/salaophp/model/dao/ClienteDAO.php';

$obj = new Cliente();
$obj->setNome($_POST['nome']);
$obj->setEmail($_POST['email']);
$obj->setSenha($_POST['senha']);

ClienteDAO::getInstance()->insert($obj);

header("location: ../cadastrarcliente.php");
?>
