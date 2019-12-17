<?php
$servername = "localhost";
$username = "u473154477_ritesht";
$password = "pw4mysqlYo1259";
$dbname = "u473154477_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("error");
}

$message=$conn -> real_escape_string($_REQUEST["message"]);

$sql = "INSERT INTO messages (name, email, message) VALUES ('" . $conn -> real_escape_string($_REQUEST["name"]) . "', '" . $conn -> real_escape_string($_REQUEST["email"]) . "', '" . (empty($message) ? "NULL" : $message) ."')";

echo $conn->query($sql) ? "success" : "error";
$conn->close();
?>