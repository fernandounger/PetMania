<?php

require('./atendente.crud.php');

if(
    empty($_POST['servico']) ||
    empty($_POST['idficha'])
){
    echo "erro: faltou algo!";
    
    header("Refresh: 10; atendente.listar.consulta.php");
}

$servicosFicha = new stdClass();
$servicosFicha->idServico = $_POST['servico'];
$servicosFicha->idFicha = $_POST['idficha'];

if(servicosPrestados($servicosFicha)){
    header("location: atendente.listar.consulta.php?status=success");
        die();
}else{
    header("location: atendente.listar.consulta.php?status=fail");
        die();
}


