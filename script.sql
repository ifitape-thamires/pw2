CREATE TABLE turma (
    id_turma INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    PRIMARY KEY (id_turma)
);

CREATE TABLE aluno (
    id_aluno INT NOT NULL AUTO_INCREMENT,
    id_turma INT NOT NULL,
    nome VARCHAR(100) NOT NULL,
    prontuario VARCHAR(100) NOT NULL,
    sexo CHAR NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    PRIMARY KEY (id_aluno),
    FOREIGN KEY (id_turma) REFERENCES turma (id_turma)
);