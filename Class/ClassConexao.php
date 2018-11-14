 <?php 
//Namespace Classes;

abstract class ClassConexao{

#Realizará a conexão com o banco de dados
protected function conectaDB()
{
    try{
        $Con=new PDO("mysql:host=localhost;dbname=db_help_mitryus","root","");
        return $Con;
    }catch (PDOException $Erro){
        return $Erro->getMessage();
    }
}
}
 ?>