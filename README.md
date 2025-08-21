# 🚀 Web Final Project - Freelance Services Platform

A comprehensive PHP-based web application for freelance services marketplace.

## 🎯 Features
- ✅ **User registration and authentication system**
- ✅ **Service listing and browsing**
- ✅ **Search and filter functionality**
- ✅ **User profiles and portfolios**
- ✅ **Responsive design for mobile and desktop**
- ✅ **Interactive UI with JavaScript enhancements**
- ✅ **Database integration with MySQL**
- ✅ **Error handling and validation**
- ✅ **Security best practices**

## 🛠️ Technology Stack
- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, JavaScript
- **Database**: MySQL
- **Web Server**: XAMPP (Apache + MySQL + PHP)
- **Styling**: Custom CSS with responsive design
- **Security**: Input validation & SQL injection prevention

## 📁 Project Structure
```
Web_Final_Project/
├── config/
│   └── database.php     # Database configuration
├── components/
│   ├── header.php       # Reusable header
│   └── footer.php       # Reusable footer
├── database/
│   └── schema.sql       # Database schema
├── Home_Page/
│   ├── *.php            # PHP pages
│   ├── *.css            # Stylesheets
│   ├── *.js             # JavaScript
│   ├── Images/          # Assets
│   └── AboutImages/     # About page images
├── error.php            # Error handling page
├── README.md            # Documentation
└── .gitignore          # Git ignore rules
```

## 🚀 Quick Start with XAMPP

### Prerequisites
- **XAMPP** - Download from https://www.apachefriends.org/
- Modern web browser

### Installation Steps
1. **Install XAMPP**
   ```bash
   # Download and install XAMPP with Apache + MySQL + PHP
   ```

2. **Setup Database**
   ```bash
   # Start XAMPP Control Panel
   # Start Apache and MySQL services
   # Import database/schema.sql via phpMyAdmin
   ```

3. **Setup Project**
   ```bash
   # Copy project to: C:\xampp\htdocs\Web_Final_Project\
   ```

4. **Access Application**
   ```
   http://localhost/Web_Final_Project/Home_Page/Home_page.php
   ```

### Database Setup
1. Open phpMyAdmin: http://localhost/phpmyadmin
2. Create database: `freelance_platform`
3. Import: `database/schema.sql`



## 🛠️ Quick Setup Commands
```bash
# Clone repository
git clone https://github.com/yourusername/web-final-project.git

# Install dependencies
cd web-final-project
# Copy to XAMPP htdocs
cp -r . C:\xampp\htdocs\Web_Final_Project

# Start XAMPP services
# Start Apache and MySQL via XAMPP Control Panel

# Access via browser
http://localhost/Web_Final_Project/Home_Page/Home_page.php
```

