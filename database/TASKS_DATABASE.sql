-- Tasks for Today Management System database setup.

CREATE DATABASE IF NOT EXISTS tasks_database;
USE tasks_database;

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
    ('Review laboratory instructions', 'completed', DATE_SUB(CURRENT_DATE, INTERVAL 2 DAY), DATE_SUB(NOW(), INTERVAL 2 DAY)),
    ('Prepare project folder', 'completed', DATE_SUB(CURRENT_DATE, INTERVAL 2 DAY), DATE_SUB(NOW(), INTERVAL 2 DAY)),
    ('Create database tables', 'completed', DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY), DATE_SUB(NOW(), INTERVAL 1 DAY)),
    ('Insert sample records', 'pending', DATE_SUB(CURRENT_DATE, INTERVAL 1 DAY), DATE_SUB(NOW(), INTERVAL 1 DAY)),
    ('Review today''s task list', 'pending', CURRENT_DATE, NOW()),
    ('Test the welcome page', 'pending', CURRENT_DATE, NOW()),
    ('Check the profile page', 'pending', CURRENT_DATE, NOW()),
    ('Submit the laboratory activity', 'pending', DATE_ADD(CURRENT_DATE, INTERVAL 1 DAY), NOW());

INSERT INTO users (username, full_name, email, created_at) VALUES
    ('demo_user', 'Demo Student', 'demo.student@example.com', NOW());
