

<?php
// Database configuration
$dbHost     = "localhost";
$dbUsername = "dropboxd_dropboxd_Skoleomdb";
$dbPassword = "6nOV9@ls(8~X";
$dbName     = "dropboxd_Skoleomdb";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>