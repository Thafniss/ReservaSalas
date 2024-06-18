CREATE TABLE Salas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    capacidade INT NOT NULL
);

CREATE TABLE Usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    senha VARCHAR(255) NOT NULL UNIQUE
);

CREATE TABLE Reservas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    sala_id INT,
    usuario_id INT,
    data_hora_inicio DATETIME NOT NULL,
    data_hora_fim DATETIME NOT NULL,
    FOREIGN KEY (sala_id) REFERENCES Salas(id),
    FOREIGN KEY (usuario_id) REFERENCES Usuarios(id)
);