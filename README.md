# Kilter Endurance
## Overview
Kilter Endurance is a web-based platform designed to showcase trainers, manage their portfolios, and provide users with fitness-related services. The website features a user-friendly interface, trainer management, and an engaging visitor experience.

## Features
- Trainer Dashboard: Manage and view trainer details.
- Trainer Portfolio: Display detailed trainer information.
- User and Admin Authentication: Separate login options for users and admins.
- Update and Delete Trainers: Admins can modify trainer details.
- Yoga Trainer Submission Form: Collect details of yoga trainers.
- Responsive Design: Works seamlessly across devices.

 # Installation Guide
 ## 1. Download & Install XAMPP
 1. Go to the official XAMPP website:\
    Download [XAMPP](https://www.apachefriends.org/download.html)
 2. Download the version compatible with your operating system.
 3. Install XAMPP and start the **Apache** and **MySQL** services from the XAMPP Control Panel.
    
## 2. Download Kilter Endurance Source Code
**Option 1: Clone using Git**
1. Open **Terminal** (Mac/Linux) or **Command Prompt** (Windows).
2. Run the following command:
```sh
 git clone https://github.com/rininaskar/kilter-endurance.git
```
3. Navigate into the project folder:
```sh
 cd kilter-endurance
```
**Option 2: Download ZIP**
1. Visit the GitHub repository: [GitHub Repo](https://github.com/rininaskar/kilter-endurance)
2. Click **Code → Download ZIP**
3. Extract the ZIP file

## 3. Move the Project to XAMPP's htdocs Folder
1. Locate your XAMPP installation directory (default: `C:\xampp\` on Windows or `/opt/lampp/` on Linux/Mac).
2. Go to the **htdocs** folder:\
    **Windows:** `C:\xampp\htdocs\` \
    **Mac/Linux:** `/opt/lampp/htdocs/`
3. Copy and paste the **kilter-endurance** folder inside `htdocs`.

## 4. Import the Database (If Required)
If you want to include a database, follow these steps:
1. Open the **XAMPP Control Panel** and start **MySQL**.
2. Open your browser and go to:
```
  http://localhost/phpmyadmin/
```
3. Click **New** → Enter a database name (e.g., `kilter_db`) → Click Create.
4. Click **Import**, choose the database file (`.sql` file from the project), and click Go.

## 5. Run the Project
1. Open your browser and enter:
```
  http://localhost/kilter-endurance/index.html
```
2. The **Kilter Endurance** homepage should load successfully.

## 6. Troubleshooting
1. If the project requires **PHP**, ensure you have it installed and configured in XAMPP.
2. If you get a **database connection error**, check the database credentials in `db_conn.php`.
3. If you make changes, restart **Apache** and **MySQ**L in the **XAMPP** Control Panel.

# Contributing
Feel free to contribute to the project by forking the repository and submitting pull requests.

# License
This project is licensed under the MIT License.
