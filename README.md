# Personal portfolio website

A personal portfolio website with an integrated blog system. Built with PHP, MySQL, HTML, CSS, and JavaScript, and designed to be hosted locally via XAMPP.

## Features

- **Portfolio pages** — homepage, projects showcase, and contact section
- **Blog system** — view all posts, filter posts by month, and read individual entries
- **Authentication** — login system protecting blog post creation
- **Post creation** — write, preview, and publish new blog entries with timestamps
- **Responsive design** — custom CSS with reusable header and footer components

## Tech Stack

- PHP (server-side logic, sessions, prepared statements)
- MySQL / MariaDB (two databases: `User_Credentials` and `Blog_Content`)
- HTML5, CSS3, JavaScript
- XAMPP (Apache + MySQL local development environment)

## Project Structure

```
VEChetrusca-Phase2/
├── index.php          # Homepage
├── projects.php       # Projects showcase
├── contact.php        # Contact page
├── blog.php           # Blog post listings
├── viewBlog.php       # Blog page with filters and previews
├── addEntry.php       # Form for writing a new post (login required)
├── addPost.php        # Handles post submission to the database
├── login.php          # Login page and authentication logic
├── logout.php         # Session termination
├── header.php         # Shared site header
├── footer.php         # Shared site footer
├── css/               # Stylesheets
├── javascript/        # Client-side scripts
└── images/            # Static image assets
```

## Setup Instructions

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) installed (any recent version with MariaDB/MySQL)

### 1. Clone the repository

Clone this repo into XAMPP's `htdocs` folder.

**On macOS:**
```bash
cd /Applications/XAMPP/xamppfiles/htdocs/
git clone https://github.com/vanesa-eliza/Portfolio-v1
```

**On Windows:**
```bash
cd C:\xampp\htdocs\
git clone https://github.com/vanesa-eliza/Portfolio-v1
```

### 2. Start XAMPP

Open the XAMPP control panel and start:
- Apache Web Server
- MySQL Database

### 3. Set up the databases

Open phpMyAdmin at [http://localhost/phpmyadmin](http://localhost/phpmyadmin), go to the **SQL** tab, and run:

```sql
CREATE DATABASE User_Credentials;
USE User_Credentials;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);

CREATE DATABASE Blog_Content;
USE Blog_Content;

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    time DATETIME NOT NULL
);
```

### 4. Create a login account

In the **SQL** tab, run the following (replace with your own email and password):

```sql
USE User_Credentials;
INSERT INTO users (email, password) VALUES ('your@email.com', 'yourpassword');
```

### 5. Run the site

Visit [http://localhost/VEChetrusca-Phase2](http://localhost/VEChetrusca-Phase2) in your browser.

To access the blog admin area, go to `/login.php` and use the credentials you created.

## Database Configuration

The site connects with the default XAMPP MySQL settings:

```php
$servername = "localhost";
$username   = "root";
$password   = "";
```

If your local setup uses different credentials, update them in `login.php` and `addPost.php`.

## Known Limitations

This is an early-phase project and reflects work from a learning context. Notable limitations include:

- **Passwords stored in plain text** — production systems should use `password_hash()` and `password_verify()`
- **No user registration page** — accounts must be added directly via SQL
- **No edit/delete functionality** for existing blog posts
- **Database credentials hardcoded** — environment variables would be more appropriate

These are intentionally preserved as a snapshot of the project's original state.

## Author

**V. E. Chetrusca**

## License

This project is shared for portfolio and educational purposes.
