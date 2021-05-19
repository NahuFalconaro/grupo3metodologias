-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2021-05-19 16:55:35.859

-- tables
-- Table: Materiales
CREATE TABLE Materiales (
    id_materiales int  NOT NULL,
    nombre varchar(20)  NOT NULL,
    aceptado boolean  NOT NULL,
    descripcion text  NULL,
    CONSTRAINT Materiales_pk PRIMARY KEY (id_materiales)
);

-- Table: Pedido
CREATE TABLE Pedido (
    id_pedido int  NOT NULL,
    ubicacion varchar(30)  NOT NULL,
    telefono int  NOT NULL,
    foto varchar(100)  NULL,
    clase_vehiculo char(1)  NOT NULL,
    CONSTRAINT Pedido_pk PRIMARY KEY (id_pedido)
);

-- Table: Usuario
CREATE TABLE Usuario (
    id int  NOT NULL,
    usuario varchar(20)  NOT NULL,
    pass varchar(20)  NOT NULL,
    admin boolean  NOT NULL,
    CONSTRAINT Usuario_pk PRIMARY KEY (id)
);

-- End of file.

