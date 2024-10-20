CREATE DATABASE mydatabase;

USE mydatabase;

CREATE TABLE users (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    address VARCHAR(100) NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(15) NOT NULL
);
