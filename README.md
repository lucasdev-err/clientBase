# ClientBase

A simple client management system built with pure PHP and MySQL.
Developed to practice and apply web security best practices in a real-world CRUD structure.

## Features
- List, create, edit and delete clients
- CSRF protection on all POST requests
- Input validation and sanitization
- Secure PDO prepared statements
- Flash message feedback system
- Organized folder structure separating config, helpers and public files

## Tech Stack
- PHP 8+
- MySQL
- PDO
- HTML/CSS

## Security Practices Applied
- CSRF tokens on every form
- `htmlspecialchars()` on all outputs
- `filter_var()` for input validation
- Integer casting on IDs before queries
- Credentials isolated in config file
- DELETE actions via POST only

## How to Run
1. Clone the repository
2. Import the SQL file into your database
3. Copy `config/config.example.php` to `config/config.php` and fill in your credentials
4. Start your local server (XAMPP, Laragon, etc.)
5. Access `localhost/clientbase/public`