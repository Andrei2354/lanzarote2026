CREATE TABLE modulos (
    id              INT AUTO_INCREMENT PRIMARY KEY,
    nombre          VARCHAR(100) NOT NULL,              
    siglas          VARCHAR(10) NOT NULL,              
    color           VARCHAR(7) NOT NULL UNIQUE,        
    curso_asignado  INT NOT NULL,                       
    FOREIGN KEY (curso_asignado) REFERENCES cursos(id),

    usuario_alta      VARCHAR(255),
    ip_alta           CHAR(15),
    fecha_sis_alta    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario_modi      VARCHAR(255),
    ip_modi           CHAR(15),
    fecha_modi        TIMESTAMP
);

-- nombre          VARCHAR(100) NOT NULL,               Ej: "Desarrollo Entorno Servidor"
-- siglas          VARCHAR(10) NOT NULL,                Ej: "DWES" (Requisito explícito)
-- color           VARCHAR(7) NOT NULL UNIQUE,          Ej: "#FF5733" (Requisito: Color único)
-- curso_asignado  INT NOT NULL,                        FK opcional si un módulo pertenece estrictamente a un curso
-- FOREIGN KEY (curso_asignado) REFERENCES cursos(id)   Relación con la tabla cursos