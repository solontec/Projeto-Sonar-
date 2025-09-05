USE sonar;
select * from usuarios;
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
