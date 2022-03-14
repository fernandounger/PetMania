
 
CREATE TABLE endereco(
    id_end		INT			auto_increment		PRIMARY KEY,
    cidade		VARCHAR(150),
    bairro		VARCHAR(150),
    logradouro	VARCHAR(150),
    numero		INT,
    CEP			INT
    );
    
    CREATE TABLE telefone(
    id_tel		INT			auto_increment		PRIMARY KEY,
    telefone	VARCHAR(20)
    );
    



CREATE TABLE dono(
id_dono		INT				auto_increment,
cpf			BIGINT 			unique,
Nome		VARCHAR(150)	NOT NULL,
email		VARCHAR(50),
endereco	INT,
telefone	INT,
FOREIGN KEY(endereco) REFERENCES endereco(id_end),
FOREIGN KEY(telefone) REFERENCES telefone(id_tel),
PRIMARY KEY(id_dono)
);


    
    /*Criação da tabela dos animais*/
    
CREATE TABLE especie(
	id_especie		INT PRIMARY KEY auto_increment,
    nome_especie	VARCHAR(50)		NOT NULL
);

CREATE TABLE raca(
	id_raca			INT PRIMARY KEY auto_increment,
    id_especie		INT				NOT NULL,
    nome_raca		VARCHAR(50)		NOT NULL,
    FOREIGN KEY(id_especie) REFERENCES especie(id_especie)
);

CREATE TABLE animal(
	id_animal		INT			auto_increment		PRIMARY KEY,
    id_dono			INT			NOT NULL,
	nome			VARCHAR(50)	NOT NULL,
    sexo			CHAR(1)	NOT NULL,
    data_nasc		DATE,
    raca			INT,
    observacoes		VARCHAR(300),
    FOREIGN KEY(id_animal) REFERENCES dono(id_dono),
    FOREIGN KEY (raca) REFERENCES raca(id_raca)
);
    
  #Criação de views do animal
  #
  #
  #

/********************Criação Tabela Veterinário**********************************************/
CREATE TABLE veterinario(
id			INT					auto_increment			PRIMARY KEY,
nome_vet	VARCHAR(150)		NOT NULL,
cpf			BIGINT				NOT NULL				unique,
CRMV		BIGINT				NOT NULL,
email		VARCHAR(150),
endereco	INT,
telefone	INT,
FOREIGN KEY(endereco) REFERENCES endereco(id_end),
FOREIGN KEY(telefone) REFERENCES telefone(id_tel)
);



	


/*Criação Tabela ficha médica*/

CREATE TABLE ficha_medica(
	id_ficha		INT		auto_increment PRIMARY KEY,
    id_animal		INT		NOT NULL,
    data_visita		DATETIME	DEFAULT CURRENT_TIMESTAMP,
    vet_id			INT		NOT NULL,
    motivo_visita	VARCHAR(300)	DEFAULT	'rotina',
    diagnostico		VARCHAR(300)	DEFAULT NULL,
    tratamento		VARCHAR(300),
    prescricao		VARCHAR(300)	DEFAULT NULL,
    observacoes		VARCHAR(300)	DEFAULT NULL,
    FOREIGN KEY(id_animal) 	REFERENCES animal(id_animal),
    FOREIGN KEY(vet_id)		REFERENCES veterinario(id)
);

	CREATE TABLE servico(
		id				INT		auto_increment	PRIMARY KEY,
		servico			VARCHAR(50)
    );
    
    CREATE TABLE fichaM_Servicos(
		id				INT		auto_increment	PRIMARY KEY,
		id_ficha_medica	INT,
		id_servico		INT,
		FOREIGN KEY(id_ficha_medica) REFERENCES ficha_medica(id_ficha),
		FOREIGN KEY(id_servico) REFERENCES servico(id)
    );
    
    /*---------------------------*/
        
   