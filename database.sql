CREATE DATABASE admin_panel;
USE admin_panel;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'user') NOT NULL DEFAULT 'user'
);

INSERT INTO users (username, password, role) VALUES
('admin', MD5('admin123'), 'admin');