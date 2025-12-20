CREATE DATABASE novacraft;

CREATE TABLE users (
    id INT auto_increment PRIMARY KEY,
    firstname VARCHAR(20) NOT NULL,
    lastname VARCHAR(20) NOT NULL,
    username VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(100) NOT NULL,
    created DATETIME NOT NULL DEFAULT current_timestamp
);

CREATE TABLE contacts (
    id INT auto_increment PRIMARY KEY,
    name VARCHAR(20) NOT NULL,
    email VARCHAR(50) NOT NULL,
    message TEXT NOT NULL,
    created DATETIME NOT NULL DEFAULT current_timestamp
);