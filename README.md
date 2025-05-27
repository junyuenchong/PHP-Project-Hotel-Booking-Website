# PHP Project: Hotel Booking Website

# Hotel Booking Website

A basic Hotel Booking Website built using PHP, HTML, CSS, and MySQL.

## Features

- User registration and login
- Browse available hotels/rooms
- Book rooms online
- Admin panel to manage bookings, rooms, and users

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- JavaScript (optional)

## Installation
1. Set up XAMPP (or any local PHP server):
- Start Apache and MySQL from the XAMPP control panel.
- Place the project folder inside the `htdocs` directory (e.g., `C:\xampp\htdocs\hotel`).

3. Create a MySQL database (e.g., `hotel_booking`) via phpMyAdmin or MySQL CLI.

4. Configure database connection:
- Open `DBconnect.php`.
- Update the database credentials (`host`, `username`, `password`, `database name`) to match your local setup.

5. Run `DBconnect.php` once in the browser to establish the connection and create necessary tables (if your script handles setup).

6. Import the database if you have a SQL dump file (`database.sql`), or let `DBconnect.php` create tables automatically.

7. Access the project:
-  `http://localhost/hotel/userlogin.html`
