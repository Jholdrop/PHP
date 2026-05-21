CREATE TABLE professores (
    id SERIAL PRIMARY KEY,
    nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
    data_nascimento DATE NOT NULL,
    turma VARCHAR(20) NOT NULL,
    ativo BOOLEAN DEFAULT TRUE
);

INSERT INTO professores (
    id, nome, sobrenome, data_nascimento, turma, ativo
) VALUES
    (1, 'João', 'Silva', '1980-05-15', 'Turma A', TRUE),
    (2, 'Maria', 'Santos', '1975-10-20', 'Turma B', TRUE),
    (3, 'Carlos', 'Oliveira', '1982-03-10', 'Turma C', FALSE);
SELECT * FROM professores;
UPDATE professores
SET sobrenome = 'laner'
WHERE ID = 2;