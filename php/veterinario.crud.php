<?php

require('./connection.php');

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

function listaFichaID($busca)
{
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT 
        id_ficha,
        id_animal,
        data_visita,
        vet_id,
        motivo_visita,
        diagnostico,
        tratamento,
        prescricao,
        observacoes 
        FROM ficha_medica 
        WHERE id_ficha = :termobusca");

        $stmt->bindParam(":termobusca",$busca); 

        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_OBJ);

        return $row;
    }
    catch(PDOException $error){
        return "Falha ao procurar. Erro: {$error->getMessage()}";
    }
    finally{
        unset($cont);
        unset($stmt);
    }  

    
}