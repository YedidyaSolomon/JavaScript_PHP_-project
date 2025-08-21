# Web Final Project - Freelance Services Platform

A PHP-based web application for freelance services marketplace.

## Project Overview
This project is a full-stack web application built with PHP, HTML, CSS, and JavaScript that provides a platform for freelancers to offer their services and for clients to find and hire freelancers.

## Features
- User registration and authentication system
- Service listing and browsing
- Search and filter functionality
- User profiles and portfolios
- Responsive design for mobile and desktop
- Interactive UI with JavaScript enhancements

## Technology Stack
- **Backend**: PHP
- **Frontend**: HTML5, CSS3, JavaScript
- **Database**: MySQL
- **Web Server**: XAMPP (Apache + MySQL + PHP)
- **Styling**: Custom CSS with responsive design

## Actual Project Structure
```
Web_Final_Project/
├── Home_Page/
│   ├── Home_page.php        # Main homepage
│   ├── Home_page.css        # Main stylesheet
│   ├── About.php            # About page
│   ├── About.css            # About page styles
│   ├── Signin.php           # Login page
│   ├── Signin.css           # Login styles
│   ├── Signup.php           # Registration page
│   ├── SignUpPage1.php      # Registration form
│   ├── SIgnUpPage1.css      # Registration styles
│   ├── gigInfo.php          # Service details
│   ├── gigInfo.css          # Service details styles
│   ├── listonly.php         # Service listing
│   ├── listonly.css         # Listing styles
│   ├── listonly.js          # Listing JavaScript
│   ├── search.php           # Search functionality
│   ├── popularsearch.php    # Popular searches
│   ├── seller_id.php        # Seller profiles
│   ├── Login.php            # Login handler
│   ├── logout.php           # Logout handler
│   ├── mockup.css           # Mockup styles
│   ├── Images/              # Image assets
│   ├── AboutImages/         # About page images
│   └── Mockups/             # Design mockups
├── config/
│   └── database.php         # Database configuration
├── database/
│   └── schema.sql           # Database schema
├── README.md                # This documentation
└── Untitled.png             # Project image
```

## Getting Started with XAMPP

### Prerequisites
- **XAMPP** (recommended) - Download from https://www.apachefriends.org/
- Modern web browser (Chrome, Firefox, Edge, etc.)

### Installation Steps

1. **Download and Install XAMPP**
   - Go to https://www.apachefriends.org/
   - Download XAMPP for Windows
   - Install with default settings (ensure Apache and MySQL are selected)

2. **Setup Project in XAMPP**
   - Navigate to your XAMPP installation directory (usually `C:\xampp\`)
   - Open the `htdocs` folder
   - Copy the entire `Web_Final_Project` folder into `htdocs`

3. **Start XAMPP Services**
   - Open XAMPP Control Panel
   - Start **Apache** (for web server)
   - Start **MySQL** (for database)

4. **Access the Project**
   - Open your web browser
   - Navigate to: `http://localhost/Web_Final_Project/Home_Page/Home_page.php`

### Database Setup
1. Open phpMyAdmin: http://localhost/phpmyadmin
2. Create database: `freelance_platform`
3. Import: `database/schema.sql`

## Usage
- **Home Page**: Browse available services at `http://localhost/Web_Final_Project/Home_Page/Home_page.php`
- **Sign Up**: Create account via `SignUpPage1.php`
- **Login**: Access via `Signin.php`
- **Search**: Use search functionality to find services

## Contributing
This is a final project submission for educational purposes.

## License
Created for educational purposes as part of a web development course.
