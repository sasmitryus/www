 <?php
    session_start();
    header("Content-Type: text/html; charset=utf-8");
    include("Config/config.php");
    include("library/vendor/autoload.php");
    $dispatch=new Classes\ClassDispatch();
    include($dispatch->getInclusao());

 ?>  
