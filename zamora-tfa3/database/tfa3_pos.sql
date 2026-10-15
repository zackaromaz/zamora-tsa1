-- TFA3 POS database schema and seed data
CREATE TABLE IF NOT EXISTS customers (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    avatar VARCHAR(255) NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO customers (full_name, email, phone, created_at) VALUES
('Zack Zamora', 'zackzamora@example.com', '09123456789', NOW()),
('Roanne Acevedo', 'roanne@example.com', '09234567890', NOW()),
('Gian Lorbico', 'gian@example.com', '09345678901', NOW());

INSERT INTO users (username, full_name, email, avatar, created_at) VALUES
('zackzamora', 'Zack Zamora', 'zackzamora@example.com', NULL, NOW()),
('adminuser', 'Admin User', 'admin@example.com', NULL, NOW());
