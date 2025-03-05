# Shire Referral Hospital - Appointment System

## Project Overview

The **Shire Referral Hospital Appointment System** is a web-based application designed to manage patient appointments for Shire Referral Hospital. The system allows patients to book, reschedule, or cancel appointments, while administrators can manage doctors, schedules, and view appointment reports.

This project is built using **PHP**, **MySQL**, and **HTML/CSS** with **Bootstrap** for the frontend. It is designed to run on a local server using **XAMPP**.

---

## Prerequisites

Before setting up the project, ensure you have the following installed on your system:

1. **XAMPP**: Download and install XAMPP from [https://www.apachefriends.org/index.html](https://www.apachefriends.org/index.html).
2. **Web Browser**: Any modern web browser like Chrome, Firefox, or Edge.
3. **Text Editor**: Use any text editor or IDE (e.g., Visual Studio Code, Sublime Text, or PHPStorm).

---

## Setup Instructions

Follow these steps to set up and run the **Shire Referral Hospital Appointment System** on your local machine using XAMPP:

### Step 1: Download or Clone the Project

1. Download the project ZIP file or clone the repository using Git:
   ```bash
   git clone https://github.com/tilahungoito/shire-referral-hospital-appointment-system.git
   ```
2. Extract the project files (if downloaded as a ZIP) into a folder.

### Step 2: Move the Project to XAMPP's `htdocs` Directory

1. Locate the XAMPP installation directory (usually `C:\xampp` on Windows or `/opt/lampp` on Linux).
2. Copy the project folder into the `htdocs` directory:
   - For example: `C:\xampp\htdocs\shire-hospital-appointment`.

### Step 3: Start XAMPP and Enable Required Services

1. Open the XAMPP Control Panel.
2. Start the **Apache** and **MySQL** services by clicking the "Start" button next to each.

### Step 4: Create a MySQL Database

1. Open your web browser and go to `http://localhost/phpmyadmin`.
2. Click on "New" to create a new database.
3. Name the database `shire_hospital_db` and click "Create".
4. Import the SQL file included in the project (`database/shire_hospital_db.sql`) to set up the required tables and data:
   - Click on the database name (`shire_hospital_db`).
   - Go to the "Import" tab.
   - Click "Choose File" and select the `shire_hospital_db.sql` file.
   - Click "Go" to import the database.

### Step 5: Configure the Database Connection

1. Open the project folder in your text editor.
2. Navigate to the `includes` or `config` folder and locate the `db.php` file.
3. Update the database connection details if necessary:

   ```php
   <?php
   $host = 'localhost'; // Database host
   $dbname = 'shire_hospital_db'; // Database name
   $username = 'root'; // Database username (default for XAMPP)
   $password = ''; // Database password (default for XAMPP is empty)

   // Create connection
   $conn = new mysqli($host, $username, $password, $dbname);

   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   ?>
   ```

### Step 6: Run the Application

1. Open your web browser and go to `http://localhost/shire-hospital-appointment`.
2. The application should now be running, and you can start using it.

---

## Project Structure

```
shire-hospital-appointment/
├── assets/              # CSS, JS, and images
├── includes/            # PHP includes (e.g., db.php, functions.php)
├── admin/               # Admin panel files
├── patient/             # Patient-facing files
├── database/            # SQL files for database setup
├── index.php            # Homepage
├── login.php            # Login page
├── register.php         # Patient registration page
├── README.md            # Project documentation
```

---

## Features

### Patient Features

- Register and log in to the system.
- Book, reschedule, or cancel appointments.
- View appointment history.

### Admin Features

- Manage doctors and their schedules.
- View and manage all appointments.
- Generate reports.

---

## Troubleshooting

1. **Apache or MySQL not starting in XAMPP**:

   - Ensure no other applications are using ports 80 (Apache) or 3306 (MySQL).
   - Restart XAMPP or your computer.

2. **Database connection issues**:

   - Verify the database name, username, and password in `db.php`.
   - Ensure the database is imported correctly.

3. **Page not loading**:

   - Check if the project folder is correctly placed in the `htdocs` directory.
   - Ensure the URL is correct (e.g., `http://localhost/shire-hospital-appointment`).

---

## Contributing

If you'd like to contribute to this project, feel free to fork the repository and submit a pull request. Please ensure your code follows the project's coding standards.

---

## Contact

For any questions or support, please contact the project maintainer at[ tilahun1goitomg@gmai]()l[.com](mailto:your-email@example.com).

---

Thank you for using the **Shire Referral Hospital Appointment System**!
