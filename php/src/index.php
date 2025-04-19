<?php
$host = 'mysql'; // MySQL service name defined in docker-compose
$db = 'testdb'; // Database name
$user = 'testuser'; // MySQL user
$pass = 'testpass'; // MySQL password

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully" . "<br>";

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error in query: " . $conn->error;
} elseif ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>