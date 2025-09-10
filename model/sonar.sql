USE sonar;
select * from usuarios;

select * from vagas;
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo_conta ENUM('Cliente', 'Empresa') NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    token_reset VARCHAR(255),  -- Novo campo para armazenar o token
    token_expira DATETIME      -- Novo campo para armazenar a data de expiração do token
);


CREATE TABLE IF NOT EXISTS empresa(
id INT AUTO_INCREMENT PRIMARY KEY,
nome_empresa VARCHAR(50) NOT NULL,
descricao_empresa VARCHAR(255) NOT NULL,
cnpj_empresa VARCHAR(70) NOT NULL
); 

CREATE TABLE IF NOT EXISTS areas_vagas(
id INT AUTO_INCREMENT PRIMARY KEY,
nome_area VARCHAR(100) NOT NULL

); 


CREATE TABLE IF NOT EXISTS requisitos(
id INT AUTO_INCREMENT PRIMARY KEY,
descricao_requisito VARCHAR(255)
);



CREATE TABLE IF NOT EXISTS vagas(

id INT AUTO_INCREMENT PRIMARY KEY,
titulo_vaga VARCHAR(80) NOT NULL,
descricao_vaga VARCHAR(255) NOT NULL,
experiencia_vaga VARCHAR(100),
diferencial_vaga VARCHAR(255),



-- aplicando as chaves estrangeiras nessa tabela  -- 

id_empresa INT,
id_area INT,

FOREIGN KEY (id_empresa) REFERENCES empresa	(id),
FOREIGN KEY (id_area) REFERENCES areas_vagas(id)
);

CREATE TABLE IF NOT EXISTS vagas_requisitos(

id_vaga INT,
id_requisito INT, 

PRIMARY KEY (id_vaga, id_requisito),
FOREIGN KEY (id_vaga) REFERENCES vagas(id),
FOREIGN KEY (id_requisito) REFERENCES requisitos(id)

);

ALTER TABLE vagas
ADD COLUMN topico ENUM('Administração', 'Tecnologia', 'Engenharia', 'Enfermagem') NOT NULL;


