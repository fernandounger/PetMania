# ----- VIEW CLIENTES CADASTRADOS ----- #
CREATE VIEW Tabela_Pacientes_Cadastrados AS
SELECT dono.Nome Dono, animal.nome Animal, animal.raca FROM animal
JOIN dono ON animal.id_dono = dono.id_dono;
# ----- VIEW CLIENTES CADASTRADOS ----- #

# ----- VIEW CLIENTES AGENDADOS ----- #
CREATE VIEW Tabela_Pacientes_Agendados AS
SELECT dono.Nome Dono, animal.nome Animal, animal.raca Raça FROM ficha_medica 
JOIN animal ON ficha_medica.id_animal = animal.id_animal 
JOIN dono ON animal.id_dono = dono.id_dono;
# ----- VIEW CLIENTES CADASTRADOS ----- #
