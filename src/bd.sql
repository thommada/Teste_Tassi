CREATE TABLE IF NOT EXISTS tb_aluno ( /*Tabela de Alunos*/
    idAluno int(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(128) NOT NULL,
    nascimento DATE DEFAULT NULL,
    telefone BIGINT(20) DEFAULT NULL,
    email VARCHAR(128) NOT NULL,
    genero VARCHAR(64) DEFAULT NULL,
    PRIMARY KEY (idAluno)
)DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS tb_escola ( /*Tabela de Escolas*/
    idEscola int(11) NOT NULL AUTO_INCREMENT,
    nome VARCHAR(128) NOT NULL,
    endereco VARCHAR(256) DEFAULT NULL,
    situacao VARCHAR(32) NOT NULL,
    PRIMARY KEY (idEscola)
)DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS tb_turma ( /*Tabela de Turmas*/
    idTurma int(11) NOT NULL AUTO_INCREMENT,
    ano YEAR NOT NULL,
    nivel VARCHAR(64) NOT NULL,
    serie VARCHAR(64) NOT NULL,
    turno VARCHAR(32) NOT NULL,
    idEscola int(11) NOT NULL,
    PRIMARY KEY (idTurma),
    FOREIGN KEY (idEscola) REFERENCES tb_escola(idEscola)
)DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS tb_AlunoTurma ( /*Tabela de Alunos de Turmas*/
    idAlunoTurma INT(11) NOT NULL AUTO_INCREMENT,
    idAluno int(11) NOT NULL,
    idTurma int(11) NOT NULL,
    PRIMARY KEY (idAlunoTurma),
    FOREIGN KEY (idAluno) REFERENCES tb_aluno(idAluno),
    FOREIGN KEY (idTurma) REFERENCES tb_turma(idTurma)
)DEFAULT CHARSET=utf8;
