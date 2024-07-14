-- Active: 1720635178600@@127.0.0.1@3306@pruebas
CREATE DATABASE NombreDB;

USE NombreDB;

/* PRUEBAS */

CREATE DATABASE pruebas;

USE pruebas;

CREATE TABLE cliente(
    id_client INT AUTO_INCREMENT PRIMARY KEY,
    nombre_client VARCHAR(100)
)

SELECT * FROM cliente;
INSERT INTO cliente VALUES('NULL','');
UPDATE cliente SET nombre_client = '' WHERE id_client = '';

DELETE FROM cliente WHERE id_client = '';




TRUNCATE cliente;