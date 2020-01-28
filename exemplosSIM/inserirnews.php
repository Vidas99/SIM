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


$sql = "INSERT INTO noticias (titulo,descricao ,texto )
VALUES ('por favor funciona', 'a minha primeira noticia', 'tentativa de implementação de uma noticia')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
