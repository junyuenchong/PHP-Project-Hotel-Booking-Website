# PHP Project: Hotel Booking Website

## Overview
This is a PHP-based Hotel Booking Website that allows users to search, view, and book hotel rooms online. The project includes both a **user-facing booking system** and an **admin panel** for managing hotels, rooms, bookings, and users.

---

## Features

### User Side
- Browse available hotels and rooms
- Search hotels by location, date, and availability
- Book hotel rooms with user details
- View booking history and status

### Admin Panel
- Secure admin login
- Manage hotels (add, edit, delete)
- Manage rooms and room types
- View, update, and cancel bookings
- Manage users and view their booking activity
- Dashboard with statistics (total bookings, revenue, etc.)

---

## Technologies Used
- PHP (core backend)
- MySQL (database)
- HTML, CSS, JavaScript (frontend)
- Bootstrap (responsive design)
- Apache (web server)

---

## Installation
1. Clone the repository:

2. Set up XAMPP (or any local PHP server):
- Start Apache and MySQL from the XAMPP control panel.
- Place the project folder inside the `htdocs` directory (e.g., `C:\xampp\htdocs\hotel-booking-php`).

3. Create a MySQL database (e.g., `hotel_booking`) via phpMyAdmin or MySQL CLI.

4. Configure database connection:
- Open `DBconnect.php`.
- Update the database credentials (`host`, `username`, `password`, `database name`) to match your local setup.

5. Run `DBconnect.php` once in the browser to establish the connection and create necessary tables (if your script handles setup).

6. Import the database if you have a SQL dump file (`database.sql`), or let `DBconnect.php` create tables automatically.

7. Access the project:
- User interface: `http://localhost/hotel-booking-php/`
- Admin panel: `http://localhost/hotel-booking-php/admin/`

