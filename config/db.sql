drop database if exists phpdb;
create database phpdb;
\c phpdb;
CREATE TABLE employes (
    id SERIAL PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    prenom VARCHAR(255) NOT NULL,
    age INT
);