

CREATE TABLE dono(
id_dono		INT				unique		auto_increment,
cpf			BIGINT 			unique,
Nome		VARCHAR(150)	NOT NULL,
email		VARCHAR(50),
PRIMARY KEY(id_dono,cpf)
);

	CREATE TABLE endereco_dono(
    id_end		INT			unique		auto_increment		PRIMARY KEY,
    id_dono		INT,
    cidade		VARCHAR(150),
    bairro		VARCHAR(150),
    logradouro	VARCHAR(150),
    numero		INT,
    CEP			INT,
    FOREIGN KEY(id_dono) REFERENCES dono(id_dono)
    );
    
    CREATE TABLE telefone_dono(
    id_tel		INT			unique		auto_increment		PRIMARY KEY,
    id_dono		INT,
    telefone	VARCHAR(20),
    FOREIGN KEY(id_dono) REFERENCES dono(id_dono)
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
	id_animal		INT			unique		auto_increment		PRIMARY KEY,
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
cpf			BIGINT				NOT NULL,
CRMV		BIGINT				NOT NULL,
email		VARCHAR(150)
);


	CREATE TABLE endereco_vet(
		id_end		INT			unique		auto_increment		PRIMARY KEY,
		id_vet		INT			NOT NULL,
		cidade		VARCHAR(150)	NOT NULL,
		bairro		VARCHAR(150)	NOT NULL,
		logradouro	VARCHAR(150)	NOT NULL,
		numero		INT				NOT NULL,
		CEP			INT				NOT NULL,
		FOREIGN KEY(id_vet) REFERENCES veterinario(id)
    );
    
    CREATE TABLE telefone(
		id_tel		INT			unique		auto_increment		PRIMARY KEY,
		id_vet		INT,
		telefone	VARCHAR(20)				NOT NULL,
		FOREIGN KEY(id_vet) REFERENCES veterinario(id)
		
    );
	


/*Criação Tabela ficha médica*/

CREATE TABLE ficha_medica(
	id_ficha		INT		auto_increment PRIMARY KEY,
    id_animal		INT		NOT NULL,
    data_visita		DATE	DEFAULT CURRENT_TIMESTAMP,
    vet_id			INT		NOT NULL,
    motivo_visita	VARCHAR(300)	DEFAULT	'rotina',
    diagnostico		VARCHAR(300)	DEFAULT NULL,
    tratamento		VARCHAR(300),
    prescricao		VARCHAR(300)	DEFAULT NULL,
    observacoes		VARCHAR(300)	DEFAULT NULL,
    FOREIGN KEY(id_animal) 	REFERENCES animal(id_animal),
    FOREIGN KEY(vet_id)		REFERENCES veterinario(id)
);

	CREATE TABLE lista_servicos(
		id				INT		auto_increment	PRIMARY KEY,
		servico			VARCHAR(50)
    );
    
    CREATE TABLE fichaM_Servicos(
		id				INT		auto_increment	PRIMARY KEY,
		id_ficha_medica	INT,
		id_servico		INT,
		FOREIGN KEY(id_ficha_medica) REFERENCES ficha_medica(id_ficha),
		FOREIGN KEY(id_servico) REFERENCES lista_servicos(id)
    );
    
    SET SQL_MODE='ALLOW_INVALID_DATES';
    
    
    /*---------------------------*/