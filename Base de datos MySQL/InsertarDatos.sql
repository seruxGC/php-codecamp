-- INTRODUCIR DATOS EN UNA TABLA ***********

/* Si solo se van a insertar datos en algunas de las columnas 
hay que especificar en cuales */
INSERT INTO table_name (column1, column2, column3, ...)
VALUES (value1, value2, value3, ...);

-- Si se van insertar valores en todas no hace falta especificar columnas
INSERT INTO table_name
VALUES (value1, value2, value3, ...);