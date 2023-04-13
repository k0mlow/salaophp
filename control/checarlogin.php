<?php
require_once $_SERVER['DOCUMENT_ROOT']. '/salaophp/model/dao/ClienteDAO.php';
$daoUsuario = ClienteDAO::getInstance();

$sql = "where email = : email and senha =: senha";
$arrayDeParametros = array(":email", ":senha");
$arrayDeValores = array ($_POST['email'], $_POST['senha']);

$lista = $daoUsuario->listWhere($sql, $arrayDeParametros, $arrayDeValores);

if(count($lista) > 0){
    echo "Login realizado com sucesso!";
}else
    echo "senha incorreta;"
?>