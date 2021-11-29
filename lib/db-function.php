<?php



 function dbConnection(array $sqlConnect): mysqli{
    $database = mysqli_init();

    if(!$database-> real_connect($sqlConnect['host'],$sqlConnect['username'],$sqlConnect['password'],$sqlConnect['dbName'])){
        trigger_error( "Ошибка загрузки данных",E_USER_ERROR);
    }
     if(!$database-> set_charset( 'utf8mb4')){
         trigger_error( "Ошибка кодировки",E_USER_ERROR);
     }

    return $database;

 }