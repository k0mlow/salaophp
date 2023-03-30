<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once $_SERVER['DOCUMENT_ROOT'].'/salaophp/model/dao/ClienteDAO.php';
        
        $u = new Cliente();
        $u -> setNome('duda');
        $u ->setEmail('Eduarda');
        $u -> setSenha('afogados');

        $dao = ClienteDAO::getInstance();
        $dao->insert($u);
        echo "Salvou mais um usuário...";
        
        //teste do getById
        $testeobj = ClienteDAO::getInstance()->getById(172665);
        print_r($testeobj);
        
        //teste do atualizar
        $testeobj->setEmail('eduarda@gmail.com');
        ClienteDAO::getInstance()->update($testeobj);
        
        //teste do delete;
        ClienteDAO::getInstance()-> delete(172667);
        
        ?>
    </body>
</html>
