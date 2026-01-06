# مركز الفرقان القرآني - Forqan Quran Center

A comprehensive web-based management system for Forqan Quran Center, featuring student management, teacher scheduling, news publishing, and activity management.

## Features

- **User Management**: Admin, Teacher, Student, and Publisher roles
- **News Management**: Publish and manage center news
- **Activity Management**: Schedule and manage center activities
- **Student Dashboard**: View schedules, assignments, and activities
- **Teacher Dashboard**: Manage classes, students, and assignments
- **Publisher Dashboard**: Manage news and activities

## Recent Improvements (2026)

### Security Enhancements
- ✅ Implemented prepared statements to prevent SQL injection attacks
- ✅ Added XSS protection with `htmlspecialchars()`
- ✅ Centralized database configuration in `db_config.php`
- ✅ Added input sanitization and validation

### Bug Fixes
- ✅ Fixed typo in code that referenced database column incorrectly
- ✅ Fixed duplicate field display in activity listings
- ✅ Fixed CSS typo ('carsor' → 'cursor')
- ✅ Removed duplicate/incomplete code blocks
- ✅ Added UTF-8 charset support for proper Arabic text handling

**Note**: The database column 'tilte' is a typo in the database schema itself, but we maintain it for backward compatibility. Future database migration should rename it to 'title'.

### Code Quality
- ✅ Improved code structure and organization
- ✅ Added proper error handling
- ✅ Cleaned up redundant code

## Installation

1. **Database Setup**
   - Create a MySQL database named `forqancentre`
   - Import the database schema (if available)
   - Configure database settings in `db_config.php`

2. **Configuration**
   - Edit `db_config.php` to match your database settings:
     ```php
     define('DB_HOST', 'localhost');
     define('DB_PORT', '3307');
     define('DB_USER', 'root');
     define('DB_PASS', '');
     define('DB_NAME', 'forqancentre');
     ```

3. **Web Server**
   - Place files in your web server document root
   - Ensure PHP 7.4+ and MySQL 5.7+ are installed
   - Navigate to the website URL

## Usage

### Login
- Access the login page at `sign_in.php`
- Enter your credentials
- You'll be redirected based on your role:
  - Admin → `admin/admin1.php`
  - Teacher → `teacher.php`
  - Student → `student/student.php`
  - Publisher → `publisher/publisher.php`

### Home Page
- The main page (`index.php`) displays:
  - Latest news
  - Upcoming activities
  - Center information
  - Contact details

## Requirements

- PHP 7.4 or higher
- MySQL 5.7 or higher
- Web server (Apache/Nginx)
- Modern web browser with JavaScript enabled

## Security Notes

⚠️ **Important**: 
- Change default database credentials in production
- **CRITICAL**: Implement password hashing - the current system stores passwords in plain text
  - Use PHP's `password_hash()` for storing passwords
  - Use `password_verify()` for checking passwords
- Use strong passwords for all user accounts
- Keep PHP and MySQL updated
- Enable HTTPS for production deployment
- Regular backups are recommended
- Validate and sanitize all user inputs
- Implement rate limiting for login attempts

## Known Issues & Future Improvements

1. **Password Security**: Passwords are currently stored in plain text. Implement bcrypt/argon2 hashing ASAP.
2. **Database Schema**: Column 'tilte' should be renamed to 'title' in the activity table (requires database migration).
3. **Input Validation**: Add comprehensive server-side validation for all forms.
4. **Session Security**: Implement session timeout and regeneration.
5. **File Upload**: If file uploads are added, implement proper validation and sanitization.

## Arabic Language Support

The system fully supports Arabic language with:
- UTF-8 encoding throughout the application
- Right-to-left (RTL) text display
- Arabic fonts (Cairo, Rakkas)

## Contributing

For issues, improvements, or contributions, please contact the development team.

## License

© 2024-2026 Forqan Quran Center. All rights reserved.
