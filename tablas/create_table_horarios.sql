CREATE TABLE horarios (
    id                  INT AUTO_INCREMENT PRIMARY KEY,   
    dia                 CHAR(1) NOT NULL,                 
    hora_inicio         TIME NOT NULL,                    
    hora_fin            TIME NOT NULL,                    
    
    id_modulo           INT NOT NULL,                     
    id_profesor         INT NOT NULL,                     
    id_aula             INT NULL,                         
    
    FOREIGN KEY (id_modulo) REFERENCES modulos(id),     
    FOREIGN KEY (id_profesor) REFERENCES personas(id),  
    FOREIGN KEY (id_aula) REFERENCES aulas(id),        

    usuario_alta      VARCHAR(255),
    ip_alta           CHAR(15),
    fecha_sis_alta    TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    usuario_modi      VARCHAR(255),
    ip_modi           CHAR(15),
    fecha_modi        TIMESTAMP
);

-- id                  INT AUTO_INCREMENT PRIMARY KEY,   ID único para cada horario
-- dia                 CHAR(1) NOT NULL,                 [L]unes, [M]artes, [M]iercoles, [J]ueves, [V]iernes
-- hora_inicio         TIME NOT NULL,                    Hora de inicio del horario
-- hora_fin            TIME NOT NULL,                    Hora de fin del horario

-- Relaciones
-- id_modulo           INT NOT NULL,                     ID del módulo (qué se imparte)
-- id_profesor         INT NOT NULL,                     ID del profesor (FK a la tabla PERSONAS)
-- id_aula             INT NULL,                         ID del aula (FK a la tabla AULAS)

-- Restricciones de clave foránea
-- FOREIGN KEY (id_modulo) REFERENCES modulos(id),       Relación con la tabla 'modulos'
-- FOREIGN KEY (id_profesor) REFERENCES personas(id),    Relación con la tabla 'personas'
-- FOREIGN KEY (id_aula) REFERENCES aulas(id)            Relación con la tabla 'aulas'