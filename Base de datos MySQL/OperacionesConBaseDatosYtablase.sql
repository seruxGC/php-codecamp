-- CREAR BASE DE DATOS ******************

CREATE DATABASE databasename;

-- BORRAR BASE DE DATOS

DROP DATABASE databasename;

-- VER BASES DE DATOS EN EL SERVIDOR
SHOW databases;

-- SELECCIONAR UNA BASE DE DATOS
USE nombreBaseDatos;



-- TABLAS *********************

-- VER TABLAS DE LA BASE DE DATOS
SHOW TABLES;

-- VER INFORMACION DE LA TABLA
DESCRIBE nombreTabla;

-- CREAR TABLA

CREATE TABLE table_name (
    column1 datatype,
    column2 datatype,
    column3 datatype,
  -- ....
);

CREATE TABLE Persons (
    PersonID int,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255) 
);

-- BORRAR UNA TABLA
DROP TABLE nombreTabla;

-- RENOMBRAR TABLA
RENAME TABLE nombre_tabla TO nombre_nuevo_tabla;

-- AÑADIR , BORRAR O MODIFICAR COLUMNAS EN UNA TABLA EXISTENTE

-- AÑADIR COLUMNA
ALTER TABLE table_name
ADD column_name datatype;

-- BORRAR COLUMNA
ALTER TABLE table_name
DROP COLUMN column_name;

-- MODIFICAR COLUMNA
ALTER TABLE table_name
MODIFY COLUMN column_name datatype;



