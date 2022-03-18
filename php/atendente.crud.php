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

#ainda não testada
function AtualizaCliente($cliente){

    try{
        $con = getConnection();

        $stmt = $con->prepare("UPDATE cliente SET
        cpf = :cpf,
        Nome = :Nome,
        email = :email,
        telefone = :telefone
        WHERE id_dono = :idDono");
    
    
        $stmt->bindParam(":cpf", $cliente->cpf);
        $stmt->bindParam(":Nome", $cliente->Nome);
        $stmt->bindParam(":email", $cliente->email);
        $stmt->bindParam(":telefone", $cliente->telefone);
        $stmt->bindParam(":idDono", $cliente->idDono);
    
        if($stmt->execute()){
            unset($stmt);
    
            $stmt = $con->prepare("UPDATE endereco SET
            cidade = :cidade,
            bairro = :bairro,
            logradouro = :logradouro,
            numero = :numero,
            CEP = :CEP
            WHERE id_end = :donoEndereco");
    
            $stmt->bindParam(":cidade",$cliente->cidade);
            $stmt->bindParam(":bairro",$cliente->bairro);
            $stmt->bindParam(":logradouro",$cliente->logradouro);
            $stmt->bindParam(":numero",$cliente->numero);
            $stmt->bindParam(":CEP",$cliente->CEP);
            $stmt->bindParam(":donoEndereco",$cliente->endereco);
    
            if($stmt->execute()){
                return true;
            }
        }
    }catch(PDOException $error){
        return "falha ao atualizar dados do Cliente. Erro:{$error->getMessage()}";
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
##########################################################################
#ainda não testada
function servicosPrestados($servico){
    try{
        $con  = getConnection();
        
        $stmt = $con->prepare("INSERT INTO fichaM_Servicos(id_ficha_medica,id_servico) VALUES (:idFicha, :idServico)");
        
        $stmt->bindParam(":idFicha", $servico->idFicha);
        $stmt->bindParam(":idServico",$servico->idServico);

        if($stmt->execute()){
            return true;
        }
    }
    catch(PDOException $error){
        return "Falha ao adicionar Servico. Erro: {$error->getMessage()}";
    }
    finally{
        unset($cont);
        unset($stmt);
    }

}

#ainda não testada
function removeServicos($remove){
    try{
        $con  = getConnection();
        
        $stmt = $con->prepare("DELETE FROM fichaM_Servicos WHERE id_ficha_medica = :idFicha AND id_servico = :idServico;");
        
        $stmt->bindParam(":idFicha", $remove->idFicha);
        $stmt->bindParam(":idServico",$remove->idServico);

        if($stmt->execute()){
            return true;
        }
    }
    catch(PDOException $error){
        return "Falha ao remover Servico. Erro: {$error->getMessage()}";
    }
    finally{
        unset($cont);
        unset($stmt);
    }
}

#template busca
function listaAnimais($busca){
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT nome,
        especie,
        raca,
        data_nasc,
        nome_dono,
        id_animal
        FROM Tabela_Pacientes_cadastrados 
        WHERE nome LIKE :termobusca 
        OR nome_dono LIKE :termobusca
        OR id_animal = :termobusca");


        if(is_numeric($busca)){
            $stmt->bindParam(":nome",$busca);
        }else{
            $stmt->bindValue(":nome","%{$busca}%");
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