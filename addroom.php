<?php
include 'db.php';

$room = $_POST['newRoomNumber'];

$sql = "INSERT INTO rooms (room_number) VALUES ('$room')";
$conn->query($sql);

header("Location: index.html");
exit;
?>
