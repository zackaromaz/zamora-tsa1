CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(150) NOT NULL,
    status VARCHAR(20) NOT NULL DEFAULT 'pending',
    task_date DATE NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    created_at DATETIME NOT NULL
);

INSERT INTO tasks (title, status, task_date, created_at) VALUES
('Review today''s priorities', 'completed', CURDATE(), NOW()),
('Prepare assessment presentation', 'in progress', CURDATE(), NOW()),
('Submit project documentation', 'pending', CURDATE(), NOW()),
('Test all application routes', 'pending', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Check database relationships', 'completed', DATE_SUB(CURDATE(), INTERVAL 1 DAY), NOW()),
('Plan next sprint', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Update the project README', 'pending', DATE_ADD(CURDATE(), INTERVAL 1 DAY), NOW()),
('Review feedback with the team', 'pending', DATE_ADD(CURDATE(), INTERVAL 2 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
('zackzamora', 'Zack Zamora', 'zackzamora@example.com', NOW());
