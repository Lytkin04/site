
CREATE DATABASE IF NOT EXISTS fc_bratck;
USE fc_bratck;

DROP TABLE IF EXISTS users;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'fan') NOT NULL DEFAULT 'fan'
);

INSERT INTO users (email, phone, password, role) VALUES
('admin1@site.ru', '+79001112233', '$2y$10$GzoxZsW5T3/8RwTCaqqh0Oai5jNSwqgI7EN9tK1drRJvE6Fj.BD2C', 'admin'),
('admin2@site.ru', '+79004445566', '$2y$10$URk43xAoVXb.3OBt4mxBlui3/8Nm/34aD5rg4Pqny9mZ6Kj9sUuWq', 'admin'),
('fan1@site.ru', '+79007778899', '$2y$10$y0jKfuwzG2fDg9V9ISQO/OyPeLfGStf0JNsSPrFVswX8VPKyQ0dZm', 'fan'),
('fan2@site.ru', '+79009990000', '$2y$10$H0nP14BZYyeSRM3PSgQnuOaOUbnRMcb7qOyH3NqE1WpEDjG4F7cRS', 'fan');
