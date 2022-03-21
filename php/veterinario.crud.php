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
        WHERE id_ficha = :id_ficha");

        $stmt->bindParam(":diagnostico",$ficha->diagnostico);
        $stmt->bindParam(":tratamento",$ficha->tratamento);
        $stmt->bindParam(":prescricao",$ficha->prescricao);
        $stmt->bindParam(":observacoes",$ficha->observacoes);
        $stmt->bindParam(":id_ficha",$ficha->id_ficha);

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

function listarFichas($busca){
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT DISTINCT
        id_ficha,
        data_visita,
        especie,
        nome_animal,
        Veterinario,
        nome_dono,
        motivo_visita
        FROM tudo_ficha 
        WHERE nome_animal LIKE :termobusca 
        OR nome_dono LIKE :termobusca
        OR id_ficha = :termobusca");


        if(is_numeric($busca)){
            $stmt->bindParam(":termobusca",$busca);
        }else{
            $stmt->bindValue(":termobusca","%{$busca}%");
        }


        $result = array();

            if($stmt->execute()) {
                if($stmt->rowCount() > 0) {
                    while($row = $stmt->fetch(PDO::FETCH_OBJ)){
                        array_push($result,$row);
                    }
                }
            }
        return $result;
    }
    catch(PDOException $error){
        return "Falha ao procurar. Erro: {$error->getMessage()}";
    }
    finally{
        unset($cont);
        unset($stmt);
    }
}