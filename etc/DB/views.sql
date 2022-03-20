/***********VIEWS DA PARTE DO ATENDENTE**************************/


/*-----View com tudo do Cliente------*/
CREATE VIEW tudo_dono AS

SELECT
dono.id_dono,
dono.cpf,
dono.Nome,
dono.email,
dono.endereco,
dono.telefone,

endereco.id_end,
endereco.cidade,
endereco.bairro,
endereco.logradouro,
endereco.numero,
endereco.CEP,

animal.id_animal,
animal.nome nome_animal

FROM dono 
LEFT JOIN endereco
ON dono.endereco = endereco.id_end
RIGHT JOIN animal
ON dono.id_dono = animal.id_dono;

# ----- VIEW FICHAS MEDICAS (ATENDENTE) ----- #
CREATE VIEW fichas_Medicas AS	

SELECT ficha_medica.id_ficha,
 ficha_medica.data_visita,
 animal.nome Nome_Animal,
 animal.id_animal,
 ficha_medica.motivo_visita,
 veterinario.nome_vet Veterinario, 
 dono.Nome Nome_Dono,
 servico.servico
FROM ficha_medica 
JOIN animal ON ficha_medica.id_animal = animal.id_animal 
JOIN dono ON animal.id_dono = dono.id_dono
JOIN veterinario ON ficha_medica.vet_id = veterinario.id_vet
JOIN ficham_servicos ON ficha_medica.id_ficha = ficham_servicos.id_ficha_medica
JOIN servico ON ficham_servicos.id_servico = servico.id;


--------- VIEW FICHAS listagem de animais -----------

CREATE VIEW tudo_animal AS
SELECT animal.id_animal id,
 animal.nome Nome,
 animal.sexo Sexo,
 animal.data_nasc Data_Nascimento,
 animal.observacoes,
 raca.id_raca,
 raca.nome_raca Raca,
 especie.nome_especie especie,
 dono.Nome Dono,
 dono.id_dono
FROM animal
JOIN raca ON animal.raca = raca.id_raca
JOIN especie ON raca.id_especie = especie.id_especie
JOIN dono ON animal.id_dono = dono.id_dono;



/**************************************FIM VIEWS DA PARTE DO ATENDENTE*************************************************************/


-- precisa ser testarda
/*------ VIEW FICHA MÈDICA VETERINário*/

CREATE VIEW tudo_ficha AS

SELECT 
ficha_medica.id_ficha				id_ficha,
ficha_medica.data_visita			data_visita,
ficha_medica.vet_id					id_veterinario,
ficha_medica.motivo_visita			motivo_visita,
ficha_medica.diagnostico			diagnostico,
ficha_medica.tratamento				tratamento,
ficha_medica.prescricao				prescricao,
ficha_medica.observacoes			observacoes_ficha,

animal.id_animal					id_animal,
animal.id_dono						id_dono,
animal.nome							nome_aniaml,
animal.sexo							sexo,
animal.data_nasc					data_nascimento,
animal.observacoes					observacoes_animal,

raca.nome_raca						raca,
especie.nome_especie				especie,

dono.Nome							nome_dono,

veterinario.nome_vet 				Veterinario,

servico.servico						Servico


FROM ficha_medica 
LEFT JOIN animal ON ficha_medica.id_animal = animal.id_animal 
LEFT JOIN dono ON animal.id_dono = dono.id_dono
LEFT JOIN veterinario ON ficha_medica.vet_id = veterinario.id_vet
LEFT JOIN fichaM_Servicos ON ficha_medica.id_ficha = fichaM_Servicos.id_ficha_medica
LEFT JOIN servico ON fichaM_Servicos.id_servico = servico.id
LEFT JOIN raca ON animal.raca = raca.id_raca
LEFT JOIN especie ON raca.id_especie = especie.id_especie
