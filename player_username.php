<?php
$conn  = mysqli_connect("localhost", "root", "", "phpunity");
$guida = mysqli_real_escape_string($conn, $_GET['guid']);
$query = "SELECT * FROM player_table WHERE id=" . $guida;;
$result = $conn->query($query);
$row    = $result->fetch_assoc();
echo $row['username'];
?>