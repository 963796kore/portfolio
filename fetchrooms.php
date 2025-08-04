<?php
include 'db.php';
$result = $conn->query("SELECT * FROM rooms");

while ($row = $result->fetch_assoc()) {
    echo "<li class='list-group-item'>
            {$row['room_number']}
            <a href='delete_room.php?id={$row['id']}' class='btn btn-danger btn-xs pull-right'>Delete</a>
          </li>";
}
?>
