CREATE DATABASE DB_BIBLIOTECA;

USE DB_BIBLIOTECA;

CREATE TABLE TB_USUARIO (
	ID INT PRIMARY KEY AUTO_INCREMENT,
    EMAIL VARCHAR(100) UNIQUE NOT NULL,
    SENHA CHAR(64) NOT NULL, -- CRIPTOGRAFADA
    FOTO BLOB NULL,
    TIPO ENUM('ALU','FUN','ADM') NOT NULL
)ENGINE='MyISAM' DEFAULT CHARSET='utf8';

CREATE TABLE TB_ALUNO (
	MATRICULA VARCHAR(20) PRIMARY KEY,
    NOME VARCHAR(50) NOT NULL,
    DATA_INSCRICAO DATE NOT NULL,
    DATA_CONCLUSAO DATE NULL,
    ENDERECO VARCHAR(200) NOT NULL,
    TELEFONE1 CHAR(11) NOT NULL,
    TELEFONE2 CHAR(11) NULL,
    ID_USUARIO INT NULL,
    FOREIGN KEY (ID_USUARIO) REFERENCES TB_USUARIO (ID)
)ENGINE='MyISAM' DEFAULT CHARSET='utf8';

CREATE TABLE TB_FUNCIONARIO (
	MATRICULA VARCHAR(20) PRIMARY KEY,
    NOME VARCHAR(50) NOT NULL,
    CARGO VARCHAR(50) NULL,
    ID_USUARIO INT NULL,
    FOREIGN KEY (ID_USUARIO) REFERENCES TB_USUARIO (ID)
)ENGINE='MyISAM' DEFAULT CHARSET='utf8';

CREATE TABLE TB_GENERO (
	ID INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(30) NOT NULL
)ENGINE='MyISAM' DEFAULT CHARSET='utf8';

CREATE TABLE TB_AUTOR (
	ID INT PRIMARY KEY AUTO_INCREMENT,
    NOME VARCHAR(50) NOT NULL,
    SOBRENOME VARCHAR(50) NOT NULL
)ENGINE='MyISAM' DEFAULT CHARSET='utf8';

CREATE TABLE TB_LIVRO (
	ISBN CHAR(13) PRIMARY KEY,
    TITULO VARCHAR(200) NOT NULL,
    ID_GENERO INT NOT NULL,
    ANO_PUBLICACAO SMALLINT NOT NULL,
    QTD_PAGINAS SMALLINT NULL,
    SINOPSE TEXT NULL,
    CAPA BLOB NULL,
    FOREIGN KEY (ID_GENERO) REFERENCES TB_GENERO (ID)
)ENGINE='MyISAM' DEFAULT CHARSET='utf8';

CREATE TABLE TB_AUTOR_LIVRO (
	ISBN CHAR(13) NOT NULL,
    ID_AUTOR INT NOT NULL,
    PRIMARY KEY (ISBN,ID_AUTOR),
    FOREIGN KEY (ISBN) REFERENCES TB_LIVRO (ISBN),
    FOREIGN KEY (ID_AUTOR) REFERENCES TB_AUTOR (ID)
)ENGINE='MyISAM' DEFAULT CHARSET='utf8';

CREATE TABLE TB_EMPRESTIMO (
	ID INT PRIMARY KEY AUTO_INCREMENT,
    DATA_EMPRESTIMO DATE NOT NULL,
    DATA_DEVOLUCAO DATE NOT NULL,
    DATA_DEVOLVIDO DATE NOT NULL,
    ID_USUARIO_ALUNO INT NOT NULL,
    ID_USUARIO_FUNCIONARIO INT NOT NULL,
    ISBN CHAR(13) NOT NULL,
    FOREIGN KEY (ISBN) REFERENCES TB_LIVRO (ISBN),
    FOREIGN KEY (ID_USUARIO_ALUNO) REFERENCES TB_USUARIO (ID),
    FOREIGN KEY (ID_USUARIO_FUNCIONARIO) REFERENCES TB_USUARIO (ID)
)ENGINE='MyISAM' DEFAULT CHARSET='utf8';


