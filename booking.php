<?php
if (empty($_POST["name"])) {
    die("Name is required");
}
if (empty($_POST["contact_number"])) {
    die("Contact Number is required");
}
if (empty($_POST["address"])) {
    die("Address is required");
}
if (empty($_POST["email"])) {
    die("Email is required");
}
$mysqli = require __DIR__ . "/db_connect.php";

$sql = "INSERT INTO booking (name, contact_number, address, email)
        VALUES (?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("ssss",
                  $_POST["name"],
                  $_POST["contact_number"],
                  $_POST["address"],
                  $_POST["email"]);

if ($stmt->execute()) {
    header("Location: home.php");
    exit;
}else {
        die($mysqli->error . " " . $mysqli->errno);
    }
?>
