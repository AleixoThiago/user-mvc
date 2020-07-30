CREATE DATABASE proj;

USE proj;

CREATE TABLE IF NOT EXISTS usuarios (
    id_usuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	nome_usuario TEXT,
	email TEXT,
	senha TEXT,
	nivel ENUM('admin', 'user') DEFAULT 'user',
	flag_status BOOLEAN
);

INSERT INTO usuarios (nome_usuario, email, senha, nivel, flag_status) VALUES (
    'Admin',
    'admin@mail.com',
    '202cb962ac59075b964b07152d234b70',
    'admin',
    1
);