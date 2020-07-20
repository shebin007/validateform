<?php
    $db_host="localhost";
    $db_user="shebink_vedasch";
    $db_password="Binshe";
    $db_name="shebink_veda";
    try{
        $db=new PDO("mysql:host={$db_host};dbname={$db_name}","shebink_vedasch","Binshe");
        $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e){
        $e->getMessage();

    }
?>