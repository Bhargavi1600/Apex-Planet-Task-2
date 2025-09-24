# Apex Planet Task 2 – Login & Registration System

## Project Overview
This project implements a simple *Login and Registration system. Users can **register* with a username and password and then *login* to access the system. It demonstrates basic *user authentication* using PHP, MySQL, and JavaScript.

## Technologies Used
- *Frontend:* HTML, JavaScript (Fetch API)  
- *Backend:* PHP  
- *Database:* MySQL (via XAMPP)  
- *Server Environment:* XAMPP (Apache + MySQL)

## Features
- User registration with unique username  
- Password hashing for security  
- User login with validation  
- JSON-based communication between frontend and backend

## Database Setup
1. Open *phpMyAdmin* (http://localhost/phpmyadmin).  
2. Create a database called user_system.  
3. Create a table users with the following structure:

```sql
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);