CREATE DATABASE IF NOT EXISTS sneakerdb;

USE sneakerdb;

CREATE TABLE IF NOT EXISTS brands (
    brand_id INT AUTO_INCREMENT PRIMARY KEY,
    brand_name VARCHAR(50)
);

INSERT INTO brands (brand_name) VALUES
('Nike'),
('Adidas'),
('Jordan'),
('New Balance');
