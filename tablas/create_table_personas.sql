CREATE TABLE personas (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(100) NOT NULL,
    apellidos   VARCHAR(100) NOT NULL,
    email       VARCHAR(150) UNIQUE,
    tipo        CHAR(1) NOT NULL,
    creado_en   TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    usuario_alta      VARCHAR(255),
    ip_alta           CHAR(15),
    fecha_sis_alta    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,

    usuario_modi      VARCHAR(255),
    ip_modi           CHAR(15),
    fecha_modi        TIMESTAMP
);



-- tipo        CHAR(1) NOT NULL      [P]rofesor, [A]lumno