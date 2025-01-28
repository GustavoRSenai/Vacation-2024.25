CREATE DATABASE Login;

USE Login;

CREATE TABLE usuários (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    Senha VARCHAR(50) NOT NULL
);

INSERT INTO usuários (nome, senha) VALUES ('Gustavo', MD5('123'));