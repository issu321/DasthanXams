# BCA V Semester — Web Application Development Lab (Simplified)
### Practical Exam Programs Guide

This repository contains all 12 BCA V Semester Web Application Development Lab programs written in simple, clean, beginner-level code suitable for practical exams, viva questions, and laboratory submission.

---

## Environment & Requirements
- **Server:** Apache (via XAMPP)
- **Database:** MySQL (via XAMPP)
- **Root Folder:** `C:\xampp\htdocs\Projects\DasthanXams\`
- **Base Localhost URL:** `http://localhost/Projects/DasthanXams/`

---

## Program Index & Execution Details

### Program 01: Personal Webpage Using HTML5 Elements
- **Folder:** `Program-01`
- **Files:** `index.html`, `profile.jpg`, `audio.mp3`, `video.mp4`
- **Concept:** Pure semantic HTML5 (`<header>`, `<h2>`, `<p>`, `<ul>`, `<table>`, `<img>`, `<audio>`, `<video>`, `<a>`, `<footer>`). Zero external CSS.
- **URL:** [http://localhost/Projects/DasthanXams/Program-01/](http://localhost/Projects/DasthanXams/Program-01/)

### Program 02: Responsive Webpage Using CSS3
- **Folder:** `Program-02`
- **Files:** `index.html`
- **Concept:** Basic CSS3 properties (margins, paddings, basic colors, hover effects, and `@media (max-width:768px)` query for responsive layout).
- **URL:** [http://localhost/Projects/DasthanXams/Program-02/](http://localhost/Projects/DasthanXams/Program-02/)

### Program 03: Responsive Layout Using Bootstrap
- **Folder:** `Program-03`
- **Files:** `index.html`
- **Concept:** Bootstrap 5.3.3 components (responsive navbar, hero section, dismissible alert, 3 service cards, contact form, footer).
- **URL:** [http://localhost/Projects/DasthanXams/Program-03/](http://localhost/Projects/DasthanXams/Program-03/)

### Program 04: JavaScript Variables, Loops & Arrays
- **Folder:** `Program-04`
- **Files:** `index.html`
- **Concept:** Variables, operators, `for` loop, `forEach`, conditionals (`if/else`), and marks calculation logged to the browser console (`F12`).
- **URL:** [http://localhost/Projects/DasthanXams/Program-04/](http://localhost/Projects/DasthanXams/Program-04/)

### Program 05: DOM Manipulation
- **Folder:** `Program-05`
- **Files:** `index.html`, `image.jpg`, `image2.jpg`
- **Concept:** DOM modification using `document.getElementById()`, updating `.innerHTML`, `.style.backgroundColor`, and switching image `.src`.
- **URL:** [http://localhost/Projects/DasthanXams/Program-05/](http://localhost/Projects/DasthanXams/Program-05/)

### Program 06: Form Validation Using JavaScript
- **Folder:** `Program-06`
- **Files:** `index.html`
- **Concept:** Plain HTML form with JavaScript validation for empty fields, email pattern, 10-digit mobile number, and password matching.
- **URL:** [http://localhost/Projects/DasthanXams/Program-06/](http://localhost/Projects/DasthanXams/Program-06/)

### Program 07: Fetch API & JSON
- **Folder:** `Program-07`
- **Files:** `index.html`
- **Concept:** Simple Fetch API request to JSONPlaceholder (`https://jsonplaceholder.typicode.com/users`), displaying user cards and a basic search filter.
- **URL:** [http://localhost/Projects/DasthanXams/Program-07/](http://localhost/Projects/DasthanXams/Program-07/)

### Program 08: XAMPP Setup & Basic PHP
- **Folder:** `Program-08`
- **Files:** `hello.php`
- **Concept:** Basic PHP `echo` statement running through Apache localhost.
- **URL:** [http://localhost/Projects/DasthanXams/Program-08/hello.php](http://localhost/Projects/DasthanXams/Program-08/hello.php)

### Program 09: Sessions, Cookies & Simple Login
- **Folder:** `Program-09`
- **Files:** `login.php`
- **Concept:** Plain HTML login form, PHP `session_start()`, cookie creation (`setcookie()`), and session/cookie destruction upon logout.
- **Credentials:** Username: `student` | Password: `1234`
- **URL:** [http://localhost/Projects/DasthanXams/Program-09/login.php](http://localhost/Projects/DasthanXams/Program-09/login.php)

### Program 10: MySQL CRUD Using PHP
- **Folder:** `Program-10`
- **Files:** `crud.php`, `database.sql`
- **Concept:** PHP MySQLi connection and basic CRUD (Insert, Select, Update, Delete) using simple prepared statements and an HTML table with `border="1"`.
- **Database Setup:**
  ```sql
  CREATE DATABASE IF NOT EXISTS college;
  USE college;
  CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    course VARCHAR(50) NOT NULL
  );
  ```
- **URL:** [http://localhost/Projects/DasthanXams/Program-10/crud.php](http://localhost/Projects/DasthanXams/Program-10/crud.php)

### Program 11: Upload a Web Project to GitHub Using Git
- **Folder:** `Program-11`
- **Files:** `index.html`, `style.css`, `script.js`, `README.md`
- **Concept:** Simple HTML/CSS/JS student homepage, with a concise `README.md` listing the 6 standard Git terminal commands and GitHub Pages publishing steps.
- **URL:** [http://localhost/Projects/DasthanXams/Program-11/](http://localhost/Projects/DasthanXams/Program-11/)

### Program 12: Mini Web Application
- **Folder:** `Program-12`
- **Files:** `index.php`, `db.php`, `style.css`, `script.js`, `database.sql`
- **Concept:** Student registration web application combining Bootstrap 5.3.3, client validation in `script.js`, database connection in `db.php`, and PHP MySQL prepared queries in `index.php`.
- **Database Setup:**
  ```sql
  CREATE DATABASE IF NOT EXISTS student_db;
  USE student_db;
  CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    course VARCHAR(50) NOT NULL
  );
  ```
- **URL:** [http://localhost/Projects/DasthanXams/Program-12/](http://localhost/Projects/DasthanXams/Program-12/)
