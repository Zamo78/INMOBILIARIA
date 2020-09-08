-- creación de la base de datos
create database inmobiliaria;
use inmobiliaria;
-- creación de la tabla de registros
create table usuarios(
    -- creación de las columnas
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre_usuario VARCHAR (50) NOT NULL,
    celular INT (10) NOT NULL,
    email VARCHAR (100) NOT NULL,
    passwd VARCHAR (150) NOT NULL,
    tipo_usuario VARCHAR (50) NOT NULL
)Engine InnoDB default charset=latin1;