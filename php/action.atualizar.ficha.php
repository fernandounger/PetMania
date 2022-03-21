<?php

require('./veterinario.crud.php');

if(!empty($_POST['idFicha']))
{   
    header("location: re.lista.consultas.php");
}
if(empty($_POST['tratamento']))     {$_POST['tratamento'] = '';}
if(empty($_POST['prescricao']))     {$_POST['prescricao'] = '';}
if(empty($_POST['observacoes']))   {$_POST['observacoes'] = '';}
if(empty($_POST['diagnostico']))   {$_POST['diagnostico'] = '';}

$ficha = new stdClass();
$ficha->diagnostico = $_POST['diagnostico'];
$ficha->tratamento = $_POST['tratamento'];
$ficha->prescricao = $_POST['prescricao'];
$ficha->observacoes = $_POST['observacoes'];
$ficha->id_ficha = $_POST['idFicha'];

if(atualizaFichaMedica($ficha))
{
    header('location: redirect.veterinario.listar.consulta.php'); 
    die();
}
else
{
    header('location: redirect.veterinario.listar.consulta.php?status=fail');
    die();
}





























// else{
//     $consulta = new stdClass();
//     $consulta->idAnimal = $_POST['idAnimal'];
//     $consulta->idVet = $_POST['idVet'];
//     $consulta->motivo = $_POST['motivo'];

//     if(CadastroFichaMedica($consulta)){
//         header("location: atendente.listar.consulta.php");
//         die();
//     }
//     header("location: atendente.listar.consulta.php?status=fail");
//         die();

// }