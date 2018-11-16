<?php
namespace Models;

class ClassCadastro extends ClassCrud{

    #Realizará a inserção no banco de dados
    public function insertCad($arrVar)
    {
        $this->insertDB(
          "tb_login",
          "?,?,?,?,?,?,?,?",
                array(
                    0,
                    $arrVar['Nome'],
                    $arrVar['Email'],
                    $arrVar['Email_rec'],
                    $arrVar['Senha'],
                    $arrVar['Nivel'],
                    $arrVar['Logado'],
                    $arrVar['Img']
                )
        );
    }

    #Verificar se o email já existe no banco de dados
    public function getIssetEmail($Email)
    {
        $b=$this->selectDB(
            "*",
            "tb_login",
            "where Email=?",
            array(
                $Email
            )
        );
        return $r=$b->rowCount();
    }
}
?>