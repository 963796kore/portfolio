<?php
include 'db.php';

$name = $_POST['studentName'];
$age = $_POST['studentAge'];
$room = $_POST['roomNumber'];

$sql = "INSERT INTO students (name, age, room) VALUES ('$name', '$age', '$room')";
$conn->query($sql);

header("Location: index.html");
exit;
?>
