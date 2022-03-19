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
 dono.Nome Nome_Dono 
FROM ficha_medica 
JOIN animal ON ficha_medica.id_animal = animal.id_animal 
JOIN dono ON animal.id_dono = dono.id_dono
JOIN veterinario ON ficha_medica.vet_id = veterinario.id_vet;
