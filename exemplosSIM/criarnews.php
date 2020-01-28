<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE noticias (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
titulo VARCHAR(30) NOT NULL,
descricao VARCHAR(30) NOT NULL,
texto VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table noticias created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>