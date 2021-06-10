CREATE DATABASE IF NOT EXISTS db_teste;
USE db_teste;

CREATE TABLE IF NOT EXISTS db_teste.tb_aluno ( /*Tabela de Alunos*/
    idAluno int(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(128) NOT NULL,
    nascimento DATE DEFAULT NULL,
    telefone BIGINT(20) DEFAULT NULL,
    email VARCHAR(128) NOT NULL,
    genero VARCHAR(64) DEFAULT NULL,
    PRIMARY KEY (idAluno)
)DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS db_teste.tb_escola ( /*Tabela de Escolas*/
    idEscola int(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(128) NOT NULL,
    endereco VARCHAR(256) DEFAULT NULL,
    situacao VARCHAR(32) NOT NULL,
    PRIMARY KEY (idEscola)
)DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS db_teste.tb_turma ( /*Tabela de Turmas*/
    idTurma int(11) NOT NULL AUTO_INCREMENT,
    ano YEAR NOT NULL,
    nivel VARCHAR(64) NOT NULL,
    serie VARCHAR(64) NOT NULL,
    turno VARCHAR(32) NOT NULL,
    idEscola int(11) NOT NULL,
    PRIMARY KEY (idTurma),
    FOREIGN KEY (idEscola) REFERENCES db_teste.tb_escola(idEscola)
)DEFAULT CHARSET=utf8;

/*Inserção de Alunos Padrão*/
INSERT INTO db_teste.tb_aluno (nome, nascimento, telefone, email, genero)
VALUES('Thomas Adam da Costa', '1995-07-17', 35999736887, 'adam.thomascosta@gmail.com','Masculino');

INSERT INTO db_teste.tb_aluno (nome, nascimento, telefone, email, genero)
VALUES('José Genérico', '2000-01-01', 35999999999, 'jose@gmail.com','Masculino');

/*Inserção de Escolas Padrão*/
INSERT INTO db_teste.tb_escola (nome,endereco, situacao)
VALUES('Colégio A', 'Rua 1, 01', 'Ativo');

INSERT INTO db_teste.tb_escola (nome,endereco, situacao)
VALUES('Colégio B', 'Rua 2, 02', 'Ativo');

/*Inserção de Turma Padrão*/
INSERT INTO db_teste.tb_turma (ano, nivel, serie, turno, idEscola)
VALUES(2010, 'Ensino Médio', '8','Matutino', 1);

INSERT INTO db_teste.tb_turma (ano, nivel, serie, turno, idEscola)
VALUES(2010, 'Fundamental', '2','Vespertino', 2);

CREATE TABLE IF NOT EXISTS db_teste.tb_AlunoTurma ( /*Tabela de Alunos de Turmas*/
    idAlunoTurma INT(11) NOT NULL AUTO_INCREMENT,
    idAluno int(11) NOT NULL,
    idTurma int(11) NOT NULL,
    PRIMARY KEY (idAlunoTurma),
    FOREIGN KEY (idAluno) REFERENCES db_teste.tb_aluno(idAluno),
    FOREIGN KEY (idTurma) REFERENCES db_teste.tb_turma(idTurma)
)DEFAULT CHARSET=utf8;

/*Inserção de Aluno de Turma Padrão*/
INSERT INTO db_teste.tb_AlunoTurma(idAluno, idTurma)
VALUES(1, 1);
INSERT INTO db_teste.tb_AlunoTurma(idAluno, idTurma)
VALUES(2, 2);