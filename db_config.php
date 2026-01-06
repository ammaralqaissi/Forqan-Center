<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_PORT', '3307');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'forqancentre');

// Function to get database connection
function getDBConnection() {
    $conn = mysqli_connect(DB_HOST . ':' . DB_PORT, DB_USER, DB_PASS, DB_NAME);
    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
    // Set charset to UTF-8 for proper Arabic text handling
    mysqli_set_charset($conn, "utf8mb4");
    
    return $conn;
}

// Function to safely escape strings (for backward compatibility)
function escapeString($conn, $string) {
    return mysqli_real_escape_string($conn, $string);
}
?>
