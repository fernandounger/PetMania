<?php

require('./atendente.crud.php');


if(
    empty($_POST['idAnimal']) ||
    empty($_POST['idVet']) ||
    empty($_POST['motivo'])
){
    echo "erro: faltou algo!";
    
    header("Refresh: 10; atendente.form.cadastro.consulta.php");
}

else{
    $consulta = new stdClass();
    $consulta->idAnimal = $_POST['idAnimal'];
    $consulta->idVet = $_POST['idVet'];
    $consulta->motivo = $_POST['motivo'];

    if(CadastroFichaMedica($consulta)){
        header("location: redirect.consulta.listar.php");
        die();
    }
    header("location: atendente.listar.consulta.php?status=fail");
        die();

}