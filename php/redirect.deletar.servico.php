<?php

require('./atendente.crud.php');



if(isset($_GET['idservico']) && !empty($_GET['idservico']) && $_GET['idservico'] != NULL){

    if(isset($_GET['idficha']) && !empty($_GET['idficha']) && $_GET['idficha'] != NULL)

    {
        $delete = new stdClass();
        $delete->idFicha = $_GET['idficha'];
        $delete->idServico = $_GET['idservico'];

        if(removeServicos($delete)){
            header("location: atendente.listar.consulta.php?status=success");
            die();
        }
        header("location: atendente.listar.consulta.php?status=fail");
        die();
    }
    else{
        header("location: atendente.listar.consulta.php");
        die();
    }
}
