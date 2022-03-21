<?php

require('./connection.php');

/************************************************  FUNÇÕES CLIENTE ****************************************************************************/
function CadastroCliente($cliente){ #ok
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


/******Atualização***** */

function AtualizaCliente($cliente){ #ok

    try{
        $con = getConnection();

        $stmt = $con->prepare("UPDATE dono SET
        cpf = :cpf,
        Nome = :Nome,
        email = :email,
        telefone = :telefone
        WHERE id_dono = :id_dono");
    
    
        $stmt->bindParam(":cpf", $cliente->cpf);
        $stmt->bindParam(":Nome", $cliente->Nome);
        $stmt->bindParam(":email", $cliente->email);
        $stmt->bindParam(":telefone", $cliente->telefone);
        $stmt->bindParam(":id_dono", $cliente->id_dono);
    
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

#listagem para preencher o edit
function listaClienteID($busca){
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT id_dono,cpf, Nome, telefone, email,endereco 
                               FROM dono WHERE id_dono = :termobusca");

        $stmt->bindParam(":termobusca",$busca);
        
        if($stmt->execute()){
            $dados_cliente = $stmt->fetch(PDO::FETCH_OBJ);

            unset($stmt);

            $stmt = $con->prepare("SELECT id_end,cidade,bairro,logradouro,numero,CEP 
                               FROM endereco WHERE id_end = :termobusca");

            
            $stmt->bindParam(":termobusca",$dados_cliente->endereco);

            $stmt->execute();
            

            $dados_endereco = $stmt->fetch(PDO::FETCH_OBJ);
            
            #fusao dos dados do cliente com os dados do endereco dele
            $d_cli_end = (object) array_merge(
                (array) $dados_cliente, (array) $dados_endereco
            );

        }
        
        


            
        return $d_cli_end;
        
    }
    catch(PDOException $error){
        return "Falha ao procurar. Erro: {$error->getMessage()}";
    }
    finally{
        unset($cont);
        unset($stmt);
    }        
}











function ListaClientes($busca)
{ //ID, NOME, TELEFONE, EMAIL
    try {
        $con = getConnection();
        $result = array();

        $stmt = $con->prepare("SELECT id_dono, Nome, telefone, email 
                               FROM dono WHERE Nome LIKE :termobusca 
                               OR id_dono LIKE :termobusca");


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


    }catch(PDOException $error){
        return "falha ao cadastrar o animal. Erro:{$error->getMessage()}";
    }finally{
        unset($con);
        unset($stmt);
    }
}







/******************** FUNÇÕES ANIMAL *********************************************************************************************/
function CadastroAnimal($animal) #ok
{
    try
    {
        $con = getConnection();

            $stmt = $con->prepare("INSERT INTO animal(id_dono,nome,sexo,data_nasc,raca) 
            VALUES(:id_dono,:nome_animal,:sexo_animal,:data_nasc,:raca_animal)");
            
            $stmt->bindParam(":id_dono", $animal->id_dono);
            $stmt->bindParam(":data_nasc", $animal->data_nasc);
            $stmt->bindParam(":nome_animal",$animal->nome_animal);
            $stmt->bindParam(":raca_animal",$animal->raca_animal);
            $stmt->bindParam(":sexo_animal",$animal->sexo_animal);

            if($stmt->execute()){
            return true;
            }
    }
    catch(PDOException $error){
        return "falha ao cadastrar o animal. Erro:{$error->getMessage()}";
    }
    finally{
        unset($con);
        unset($stmt);
    }
}


/***************** */
function AtualizaAnimal($animal) #ok
{
    try
    {
        $con = getConnection();

            $stmt = $con->prepare("UPDATE animal 
            SET nome = :nome_animal, sexo = :sexo_animal, data_nasc = :data_nasc, raca = :raca_animal, observacoes = :observacoes 
            WHERE id_animal = :id_animal");
            
            $stmt->bindParam(":nome_animal",$animal->nome_animal);
            $stmt->bindParam(":sexo_animal",$animal->sexo_animal);
            $stmt->bindParam(":data_nasc", $animal->data_nasc);
            $stmt->bindParam(":raca_animal",$animal->raca_animal);
            $stmt->bindParam(":observacoes",$animal->observacoes);
            $stmt->bindParam(":id_animal", $animal->id_animal);

            if($stmt->execute()){
            return "Atualização de animal realizado com sucesso";
            }
    }
    catch(PDOException $error){
        return "falha ao atualizar o animal. Erro:{$error->getMessage()}";
    }
    finally{
        unset($con);
        unset($stmt);
    }
}











/*********************************** CADASTRO DE FICHA MÉDICA/CONSULTAS *************************/
function CadastroFichaMedica($ficha) #ok
{
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

function listarFichas($busca){
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT 
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


function listarVeterinarios(){
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT 
        id_vet,
        nome_vet
        FROM veterinario");


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






















#############################
#ainda não testada
function servicosPrestados($servico)
{
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
function removeServicos($remove) 
{
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

function listaAnimaisID($busca){
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT 
        id,
        Nome,
        Sexo,
        Data_Nascimento,
        id_raca
        FROM tudo_animal 
        WHERE id = :termobusca");

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


function listaAnimais($busca){
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT 
        id,
        Nome,
        Sexo,
        Data_Nascimento,
        Raca,
        especie,
        id_especie,
        Dono
        FROM tudo_animal 
        WHERE nome LIKE :termobusca 
        OR Dono LIKE :termobusca
        OR id = :termobusca ORDER BY id");


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




function listaRacas($busca){
    try{
        $con = getConnection();

        $stmt = $con->prepare("SELECT id_raca, nome_raca
        FROM raca WHERE id_especie = :termobusca");

        
        $stmt->bindParam(":termobusca",$busca);
        

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