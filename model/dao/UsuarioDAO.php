<?php
require_once './BDPDO.php';
require_once '../vo/Cliente.php';


class UsuarioDAO {
    public static $instance;
    private function __construct() {
}
public static function getInstance() {
    if (!isset(self::$instance))
        self::$instance = new UsuarioDAO();
    return self::$instance;
    
}
   public function insert(Usuario $usuario){
       try {
           $sql = "INSERT INTO usuario (nome,email,tipo,senha) VALUES (:nome,:email,:tipo,:senha)";
           //perceba que na linha abaixo vai precisar de um import
           $p_sql = BDPDO::getInstance()->prepare($sql);
           $p_sql->bindValue(":nome", $usuario->getNome());
           $p_sql->bindValue(":email", $usuario->getEmail());
           $p_sql->bindValue(":tipo", $usuario->getTipo());
           //iremos critografar a senha para md5, asism o usuário terá mais segurança, já que frequentemente usamos a mesma senha para diversas aplicações.
           $p_sql->bindValue(":senha", md5($usuario->getSenha()));
           return $p_sql->execute();
       } catch (Exception $e) {
           print "Erro ao executar a função de salvar".$e->getMessage();
   
       }

}
   public function update($usuario){}
   public function remove($id){}
   public function getById($id){}
   public function listAll(){}
    
}
?>