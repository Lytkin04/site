CREATE DATABASE IF NOT EXISTS sibiryak;
USE sibiryak;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('fan', 'admin') NOT NULL
);

INSERT INTO users (email, password, role) VALUES
('admin@sibiryak.ru', 'admin123', 'admin'),
('fan1@sibiryak.ru', 'fan123', 'fan');
