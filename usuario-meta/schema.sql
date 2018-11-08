--criacao do bd
create database bdmeta
--criacao tabela
create table meta(
    id int,
    cpfuser varchar(14) NOT NULL,
    nome varchar(100) NOT NULL,
    descricao varchar(1000) NOT NULL,
    prioridade int NOT NULL,
    CONSTRAINT metapk PRIMARY KEY (id),
    CONSTRAINT prioridadeCheck CHECK (prioridade between 1 and 5)
    CONSTRAINT "metaFK" FOREIGN KEY(cpfuser)
    REFERENCES usuario ("cpf")
        ON DELETE SET NULL
        ON UPDATE CASCADE
)


CREATE TABLE usuario (
    "nome" varchar(100) NOT NULL,
    "cpf" varchar(14) NOT NULL,
    "codigo" int NOT NULL,
    CONSTRAINT "usuarioPK" PRIMARY KEY ("codigo")
);
