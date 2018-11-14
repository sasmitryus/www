<?php
namespace Models;

class ClassCadastro extends ClassCrud{

    #Realizará a inserção no banco de dados
    public function insertCad($arrVar)
    {
        $this->insertDB(
          "users",
          "?,?,?,?,?,?,?",
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
}
?>