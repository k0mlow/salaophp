<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/salaophp/model/dao/BDPDO.php';
require_once $_SERVER['DOCUMENT_ROOT'].'/salaophp/model/vo/Cliente.php';



class ClienteDAO {
    public static $instance;
    private function __construct() {
}
public static function getInstance() {
    if (!isset(self::$instance))
        self::$instance = new ClienteDAO();
             return self::$instance;
    
}
   public function insert(Cliente $usuario){
       try {
           $sql = "INSERT INTO cliente (nome,email,senha) "
                   . "VALUES (:nome,:email,:senha)";
           //perceba que na linha abaixo vai precisar de um import
           $p_sql = BDPDO::getInstance()->prepare($sql);
           $p_sql->bindValue(":nome", $usuario->getNome());
           $p_sql->bindValue(":email", $usuario->getEmail());
           //iremos critografar a senha para md5, asism o usuário terá mais segurança, já que frequentemente usamos a mesma senha para diversas aplicações.
           $p_sql->bindValue(":senha", md5($usuario->getSenha()));
           return $p_sql->execute();
       } catch (Exception $e) {
           print "Erro ao executar a função de salvar".$e->getMessage();
   
       }

}
   public function update($usuario){
        try {
           $sql = "UPDATE cliente SET nome = :nome,"
                   . "email = :email,"
                   . "senha = :senha "
                   . "where id=:id";
                   
           //perceba que na linha abaixo vai precisar de um import
           $p_sql = BDPDO::getInstance()->prepare($sql);
           $p_sql->bindValue(":nome", $usuario->getNome());
           $p_sql->bindValue(":email", $usuario->getEmail());
           //iremos critografar a senha para md5, asism o usuário terá mais segurança, já que frequentemente usamos a mesma senha para diversas aplicações.
           $p_sql->bindValue(":senha", md5($usuario->getSenha()));
           $p_sql->bindValue(":id", $usuario->getId());
           return $p_sql->execute();
       } catch (Exception $e) {
           print "Erro ao executar a função de atualizar".$e->getMessage();
   
       }
       
   }
   public function delete($id){
       try {
           $sql = "delete from cliente where id = :id";
           //perceba que na linha abaixo vai precisar de um import
           $p_sql = BDPDO::getInstance()->prepare($sql);
           $p_sql->bindValue(":id", $id);
           return $p_sql->execute();
       } catch (Exception $e) {
           print "Erro ao executar a função de deletar".$e->getMessage();
   
       }
       
   }
   public function getById($id){
       try {
            $sql = "SELECT * FROM cliente WHERE id = :id";
            $p_sql = BDPDO::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $id);
            $p_sql->execute();
            return $this->converterLinhaDaBaseDeDadosParaObjeto($p_sql->fetch(PDO::FETCH_ASSOC));
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde.";
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
        }
   }
   
   private function converterLinhaDaBaseDeDadosParaObjeto($row) {
        $obj = new Cliente;
        $obj->setId($row['id']);
        $obj->setNome($row['nome']);
        $obj->setEmail($row['email']);
        $obj->setSenha($row['senha']);
        return $obj;
    }
   

     public function listWhere($restanteDoSQL, $arrayDeParametros, $arrayDeValores){
         
         try {
            $sql = "SELECT * FROM cliente " . $restanteDoSQL;
            $p_sql = BDPDO::getInstance()->prepare($sql);
            for($i = 0; $i < sizeof($arrayDeParametros); $i++){
                $p_sql->bindValue($arrayDeParametros[$i], $arrayDeValores[$i]);
            }     
            $p_sql->execute();
            $lista = array();            
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            
            
            while($row){
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);      
            }
            
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde." . $e->getMessage();
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
        }
         
     }
      public function listAll(){
         
         try {
            $sql = "SELECT * FROM cliente " ;
            $p_sql = BDPDO::getInstance()->prepare($sql);
           
            $p_sql->execute();
            $lista = array();            
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);
            
            
            while($row){
                $lista[] = $this->converterLinhaDaBaseDeDadosParaObjeto($row);
            $row = $p_sql->fetch(PDO::FETCH_ASSOC);      
            }
            
            return $lista;
        } catch (Exception $e) {
            print "Ocorreu um erro ao tentar executar esta ação, foi gerado
 um LOG do mesmo, tente novamente mais tarde." . $e->getMessage();
            GeraLog::getInstance()->inserirLog("Erro: Código: " . $e->
getCode() . " Mensagem: " . $e->getMessage());
        }
         
     }
     }


?>