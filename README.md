# CRUD - Laravel - Blade - Bootstrap

## Description

    This project is a secure Laravel application that offers CRUD (Create, Read, Update, Delete) functionalities for managing Student data. It demonstrates the fundamentals     of session management, database interaction, and form handling in Laravel.

## Features

- CRUD Operations:
    Enables management of user data (Create, Read, Update, Delete) using a MySQL database.
- Session Management: Ensures users remain logged in across different pages until they log out.
- Prepared Statements: Utilizes prepared statements for secure database queries, preventing SQL injection attacks.
- Bootstrap Integration: Delivers a clean and responsive user interface using Bootstrap 5.

## Installation

- Clone the Repository:

```bash
git clone [https://github.com/younisyousaf/laravel-bootstrap-crud.git](https://github.com/younisyousaf/laravel-bootstrap-crud.git);
```

## Setup the Environment

- Install a local server like XAMPP
- Start Apache and MySQL services.
- Create Database:

- Open phpMyAdmin and create a database named "users" with the table"students".
- Import the provided SQL file (if available) or manually create a table named "students" with the following structure:

```sql
CREATE TABLE students (
  firstname VARCHAR(50),
  lastname VARCHAR(50),
  email VARCHAR(50) NOT NULL,
);
```

## Configure the Project

Configure the.env file for database connectivity:
Update these files' database credentials (host, username, password) according to your local server configuration.
Access the Application:

Open your web browser and navigate to <http://localhost/laravel-bootstrap-crud>.
Usage
CRUD Operations: Access the dashboard to manage user data.

## Requirements

- PHP 7.0 or higher
- MySQL database
- Apache Server (XAMPP, WAMP, etc.)
- Bootstrap (included via CDN)
