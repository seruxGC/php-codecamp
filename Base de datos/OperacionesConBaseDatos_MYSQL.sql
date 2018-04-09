-- CREAR BASE DE DATOS

CREATE DATABASE databasename;

-- BORRAR BASE DE DATOS

DROP DATABASE databasename;

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