DROP DATABASE IF EXISTS Coloreal;
CREATE DATABASE IF NOT EXISTS Coloreal
CHARACTER SET utf8mb4
COLLATE utf8mb4_spanish_ci;

USE Coloreal;

CREATE TABLE direcciones (
  id int(11) NOT NULL,
  id_usuario int(11) NOT NULL,
  departamento varchar(50) NOT NULL,
  ciudad varchar(50) NOT NULL,
  localidad varchar(50) NOT NULL,
  calle varchar(100) NOT NULL,
  nro_puerta varchar(10) NOT NULL
) 

CREATE TABLE tipos_usuario (
  id int(11) NOT NULL,
  nombre varchar(50) NOT NULL
) 

INSERT INTO tipos_usuario (id, nombre) VALUES
(3, Administrador),
(1, Cliente),
(2, Vendedor);


CREATE TABLE usuarios (
  id int(11) NOT NULL,
  id_tipo int(11) NOT NULL DEFAULT 1,
  nombre varchar(50) NOT NULL,
  apellido varchar(50) NOT NULL,
  usuario varchar(50) NOT NULL,
  contrasena varchar(255) NOT NULL,
  email varchar(100) NOT NULL,
  telefono varchar(20) NOT NULL,
  foto_perfil varchar(255) DEFAULT NULL
) 
