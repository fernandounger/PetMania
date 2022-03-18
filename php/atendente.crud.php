<?php

require('./connection.php');

function CadastroCliente($cliente){
    try{
        $con  = getConnection();

        $stmt = $con->prepare("INSERT INTO endereco(cidade,bairro,logradouro,numero,CEP) VALUES (:cidade,:bairro,:logradouro,:numero,:cep)");

        $stmt->bindParam(":cidade",$cliente->cidade);
        $stmt->bindParam(":bairro",$cliente->bairro);
        $stmt->bindParam(":logradouro",$cliente->logradouro);
        $stmt->bindParam(":numero",$cliente->numero);
        $stmt->bindParam(":cep",$cliente->cep);

            if($stmt->execute()){
                unset($stmt);

                $stmt = $con->prepare("INSERT INTO dono(cpf,Nome,email,endereco,telefone) VALUES(:cpf,:nome,:email,LAST_INSERT_ID(),:telefone)");

                $stmt->bindParam(":cpf",$cliente->cpf);
                $stmt->bindParam(":nome",$cliente->nome);
                $stmt->bindParam(":email",$cliente->email);
                $stmt->bindParam(":telefone",$cliente->telefone);


                if($stmt->execute()){
                    return true;
                }
                
                



            }
    }catch(PDOException $error){
        return "falha ao cadastrar o Cliente. Erro:{$error->getMessage()}";
    }
    finally{
        unset($con);
        unset($stmt);
    }
}


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


