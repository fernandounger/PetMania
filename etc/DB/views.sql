

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



# ----- VIEW CLIENTES CADASTRADOS ----- #
CREATE VIEW Pacientes_Cadastrados AS
SELECT dono.Nome Dono, animal.nome Animal, animal.raca FROM animal
JOIN dono ON animal.id_dono = dono.id_dono;

# ----- VIEW CLIENTES AGENDADOS ----- #
CREATE VIEW Pacientes_Agendados AS
SELECT dono.Nome Dono, animal.nome Animal, animal.raca Raça FROM ficha_medica 
JOIN animal ON ficha_medica.id_animal = animal.id_animal 
JOIN dono ON animal.id_dono = dono.id_dono;
