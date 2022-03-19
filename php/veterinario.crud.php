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


function atualizaFichaMedica($ficha){ #ok
    try{
        $con  = getConnection();

        $stmt =  $con->prepare("UPDATE ficha_medica SET 
        diagnostico = :diagnostico,
        tratamento = :tratamento,
        prescricao = :prescricao,
        observacoes = :observacoes
        WHERE id_ficha = :idFicha
        ");

        $stmt->bindParam(":diagnostico",$ficha->diagnostico);
        $stmt->bindParam(":tratamento",$ficha->tratamento);
        $stmt->bindParam(":prescricao",$ficha->prescricao);
        $stmt->bindParam(":observacoes",$ficha->observacoes);
        $stmt->bindParam(":idFicha",$ficha->idFicha);

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