<?php
    define('DATABASE',array('HOST'=>'85.10.205.173','DB'=>'ifbooks','USER'=>'edujoanat21','PASSWORD'=>'gZuG9R)Yq^k7wB6$'));

    try{
        $pdo = new PDO("mysql:host=".DATABASE['HOST'].";port=3308;dbname=".DATABASE['DB'],DATABASE['USER'],DATABASE['PASSWORD'],
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>