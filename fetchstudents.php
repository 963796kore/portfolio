<?php
include 'db.php';
$result = $conn->query("SELECT * FROM students");

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td>{$row['room']}</td>
            <td>
              <a href='delete_student.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
            </td>
          </tr>";
}
?>
