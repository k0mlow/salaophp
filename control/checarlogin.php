<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/salaophp/model/dao/ClienteDAO.php';
$daoUsuario = ClienteDAO::getInstance();

$sql = "where email = :email and senha =:senha";
$arrayDeParametros = array(":email", ":senha");
$arrayDeValores = array ($_POST['email'], md5($_POST['senha']));

$lista = $daoUsuario->listWhere($sql, $arrayDeParametros, $arrayDeValores);
if(count($lista) > 0){
    session_start();
    $_SESSION['idUsuarioLogado']=$lista[0]->getId();
    
  header("location: ../index.php"); 
}else
    header("location: ../login.php?erro=1"); 
?>