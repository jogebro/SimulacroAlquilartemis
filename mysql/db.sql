-- Active: 1685375354290@@127.0.0.1@3306@alquilartemis
CREATE DATABASE Alquilartemis;

USE Alquilartemis;

CREATE TABLE empleados(
    idEmpleados INT primary key auto_increment,
    nombres_Empleados VARCHAR (200) NOT NULL,
    celular_Empleados INT (50) NOT NULL,
    direccion VARCHAR (200) NOT NULL
);

CREATE TABLE clientes(
    idClientes INT primary key auto_increment,
    nombres_Clientes VARCHAR (200) NOT NULL,
    celular_Clientes INT (50) NOT NULL,
    compañia VARCHAR (200) NOT NULL
);

CREATE TABLE productos(
    idProducto INT PRIMARY KEY AUTO_INCREMENT,
    nombres_productos VARCHAR (200) NOT NULL,
    precios_productos INT (50) NOT NULL
);