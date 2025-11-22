<?php

$conn = new mysqli("localhost", "root", "", "studentdb");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

$un = $_POST['un'];
$pw = $_POST['pw'];

$sql = "SELECT pw FROM user WHERE un = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $un);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $row = $result->fetch_assoc();

    if ($row['pw'] == $pw) {
        header('location: home.php');
        exit;
    }
}

header('location: index.php');
exit;

?>