# Advanced Document Management System

This repository contains a basic single-page web application (SPA) built with PHP and MySQL. It can serve as a starting point for a simple document or note management system. The app is designed to run on XAMPP and should comfortably handle at least 100 concurrent users when deployed on hardware with adequate resources.

## Features

- Single-page interface using vanilla JavaScript
- REST-like API endpoints written in PHP
- MySQL database for storing notes

## Setup

1. **Install XAMPP** (which includes Apache and MySQL) from [xampp.org](https://www.apachefriends.org/).
2. Clone this repository into XAMPP's `htdocs` directory:
   ```bash
   git clone <repo-url> adv_doc_mgt_sys
   ```
3. Create the database and table:
   ```sql
   CREATE DATABASE notes_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
   USE notes_db;
   CREATE TABLE notes (
       id INT AUTO_INCREMENT PRIMARY KEY,
       content TEXT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```
4. Configure database credentials via environment variables in XAMPP's `php.ini` or using a `.env` loader:
   - `DB_HOST`
   - `DB_USER`
   - `DB_PASS`
   - `DB_NAME` (set to `notes_db`)
5. Start Apache and MySQL from the XAMPP control panel.
6. Access the app at `http://localhost/adv_doc_mgt_sys/public/`.

## Performance Considerations

- The API uses persistent PDO connections to reduce connection overhead.
- Serve static assets with caching headers to improve load times.
- Consider enabling OPcache in PHP for improved performance.
- When expecting high concurrency, ensure MySQL and Apache have sufficient connection limits and memory.

## Directory Structure

```
public/      # Front-end files (HTML, CSS, JS)
api/         # PHP API endpoints
```

## License

This project is released under the MIT License.
