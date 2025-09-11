CREATE DATABASE IF NOT EXISTS sonar;

USE sonar;


-- Remove as tabelas na ordem correta (filhas primeiro)


-- Criação da tabela empresa
CREATE TABLE IF NOT EXISTS empresa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_empresa VARCHAR(150) NOT NULL,
    cnpj_empresa VARCHAR(18) UNIQUE NOT NULL,
    razao_empresa VARCHAR(80),
    descricao_empresa TEXT,
    area_empresa VARCHAR(80) NOT NULL,
    endereco_empresa VARCHAR(255),
    telefone_empresa VARCHAR(30),
    email_empresa VARCHAR(50),
    senha_empresa VARCHAR(100),
    site_empresa VARCHAR(100)
    
);

-- Tabela usuarios
CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    tipo_conta ENUM('Cliente', 'Empresa') NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    token_reset VARCHAR(255),  
    token_expira DATETIME      
);

-- Tabela areas de vagas
CREATE TABLE IF NOT EXISTS areas_vagas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_area VARCHAR(100) NOT NULL
); 

-- Tabela requisitos
CREATE TABLE IF NOT EXISTS requisitos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    descricao_requisito VARCHAR(255)
);

-- Tabela vagas
CREATE TABLE IF NOT EXISTS vagas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo_vaga VARCHAR(80) NOT NULL,
    descricao_vaga VARCHAR(255) NOT NULL,
    experiencia_vaga VARCHAR(100),
    diferencial_vaga VARCHAR(255),

    id_empresa INT,
    id_area INT,

    FOREIGN KEY (id_empresa) REFERENCES empresa(id),
    FOREIGN KEY (id_area) REFERENCES areas_vagas(id),

    topico ENUM('Administração', 'Tecnologia', 'Engenharia', 'Enfermagem') NOT NULL
);

-- Tabela vagas_requisitos
CREATE TABLE IF NOT EXISTS vagas_requisitos (
    id_vaga INT,
    id_requisito INT, 

    PRIMARY KEY (id_vaga, id_requisito),
    FOREIGN KEY (id_vaga) REFERENCES vagas(id),
    FOREIGN KEY (id_requisito) REFERENCES requisitos(id)
);
