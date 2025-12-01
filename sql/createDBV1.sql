CREATE DATABASE IF NOT EXISTS sneakerdb;

USE sneakerdb;

CREATE TABLE sneakers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    brand VARCHAR(50),
    model VARCHAR(100)
);
