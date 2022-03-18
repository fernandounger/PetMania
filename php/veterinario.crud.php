<?php

require('./connection.php');


function Cadastro_Ficha_Medica($ficha){
    try{
        $con  = getConnection();

        $stmt =  $con->prepare("INSERT INTO ficha_medica(id_animal,vet_id,motivo_visita) VALUES(:idAnimal,:idVet,:motivo)");

        $stmt->bindParam(":idAnimal",$ficha->idAnimal);
        $stmt->bindParam(":idVet",$ficha->idVet);
        $stmt->bindParam(":motivo",$ficha->motivo);

        if($stmt->execute()){
            return true;
        }

    }
    catch(PDOException $error){
        return "Falha ao cadastrar a consulta/atendimento. Erro: {$error->getMessage()}";
    }
    finally{
        unset($cont);
        unset($stmt);
    }
}


#ainda não testada
function atualizaFichaMedica($ficha){
    try{
        $con  = getConnection();

        $stmt =  $con->prepare("UPDATE ficha_medica SET 
        diagnostico = :diagnostico,
        tratamento = :tratamento,
        prescricao = :prescricao,
        observacoes = :observacoes
        WHERE id_ficha = :idFicha
        ");

        $stmt->bindParam(":diagnostico",$diagnostico);
        $stmt->bindParam(":tratamento",$tratamento);
        $stmt->bindParam(":prescricao",$prescricao);
        $stmt->bindParam(":observacoes",$observacoes);
        $stmt->bindParam(":idFicha",$idFicha);

        if($stmt->execute()){
            return true;
        }

    }

    catch(PDOException $error){
        return "Falha ao cadastrar a consulta/atendimento. Erro: {$error->getMessage()}";
    }
    finally{
        unset($cont);
        unset($stmt);
    }
}
