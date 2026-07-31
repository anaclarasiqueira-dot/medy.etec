
-- Ingrid, Ana Clara e Yasmin 3ds
CREATE DATABASE bd;

USE bd;

CREATE TABLE usuario (
    cod_usuario INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    senha VARCHAR(10) NOT NULL,
    tipo_sanguineo VARCHAR(4),
    altura_m DECIMAL (4,2),
    peso_kg DECIMAL (5,2),
    alergias TEXT
);


CREATE TABLE medicamento (
    cod_medicamento INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    dosagem INT NOT NULL,
    qtd_disponivel INT NOT NULL,
    categoria VARCHAR(100) NOT NULL,
    validade date
);

CREATE TABLE estoque(
cod_estoque INT AUTO_INCREMENT PRIMARY KEY,
cod_usuario INT UNIQUE,
FOREIGN KEY (cod_usuario)
    REFERENCES usuario(cod_usuario)
);

CREATE TABLE item_estoque(
   cod_item INT AUTO_INCREMENT PRIMARY KEY,
    cod_estoque INT NOT NULL ,
    cod_medicamento INT NOT NULL,
    qtd INT NOT NULL,
    validade DATE,

    FOREIGN KEY (cod_estoque)
        REFERENCES estoque(cod_estoque),

    FOREIGN KEY (cod_medicamento)
        REFERENCES medicamento(cod_medicamento)
);


