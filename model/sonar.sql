USE sonar;
SELECT * FROM usuarios;
create table if not exists usuarios(
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
email VARCHAR(100) NOT NULL UNIQUE,
senha VARCHAR(255) NOT NULL,
tipo_conta ENUM('Cliente', 'Empresa') NOT NULL,
data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
