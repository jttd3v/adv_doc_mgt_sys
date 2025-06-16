# Advanced Document Management System

This repository demonstrates a simple login page using PHP and MySQL intended for use with XAMPP on a local machine.

## Prerequisites

- [XAMPP](https://www.apachefriends.org/) installed (includes PHP, MySQL, and Apache).
- Basic knowledge of how to import a SQL file into MySQL (using phpMyAdmin or the `mysql` command).

## Setup Instructions

1. Clone this repository into your XAMPP `htdocs` folder:
   ```bash
   git clone <repo-url> adv_doc_mgt_sys
   ```
2. Start Apache and MySQL from the XAMPP control panel.
3. Create a MySQL database named `docs` and import `database/create_users_table.sql`.
4. Edit `config.php` if your MySQL credentials differ from the defaults.
5. Navigate to `http://localhost/adv_doc_mgt_sys/login.html` in your browser to view the login form.

## File Overview

- `login.html` – The login form.
- `login.php` – Handles login submissions.
- `config.php` – Database connection details.
- `database/create_users_table.sql` – SQL script to create a simple `users` table and seed a user.

## Contributing

This repository is a minimal example. Feel free to fork and extend it. Pull requests are welcome.
