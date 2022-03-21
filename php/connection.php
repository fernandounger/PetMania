<?php

define("__HOST__","pfw0ltdr46khxib3.cbetxkdyhwsb.us-east-1.rds.amazonaws.com");
define("__USER__","kjvkctwmcyslabr6");
define("__PASS__","s0f32w4e9r06m0ag");
define("__DATABASE__","ffpfjnix4dvfbelk");


function getConnection(){
    try{
        $key = 'strval';
        $con = new PDO("mysql:host={$key(__HOST__)};dbname={$key(__DATABASE__)}",__USER__,__PASS__) or die("Ocorreu um erro ao tentar conexão com o Banco de Dados");

        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $con;
    }
    catch(PDOException $error){
        echo "Erro de conexão com o banco. Erro: {$error->getMessage()}";
        exit;

    }
}

