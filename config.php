<?php

    require 'environment.php';
    $config = array();

    //Informações para o banco interno
    if(ENVIRONMENT == 'development'){
        define("BASE_URL","http://localhost/classificadosMVC/");
        $config['dbname'] = 'classificadosMVC';
        $config['host'] = '127.0.0.1';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }else{
        //Informações para o banco externo
        define("BASE_URL","http://www.meusite.com/");
        $config['dbname'] = 'classificadosMVC';
        $config['host'] = '127.0.0.1';
        $config['dbuser'] = 'root';
        $config['dbpass'] = '';
    }

    global $db;

    try{
        $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'],$config['dbuser'],$config['dbpass']);

    }catch(PDOException $e){
        echo "Erro: ".$e->getMessage();
    }