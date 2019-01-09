<?php
$conn  = mysqli_connect("localhost", "root", "", "phpunity");
$guida = mysqli_real_escape_string($conn, $_GET['guid']);
$query = "SELECT * FROM player_table_pos WHERE id=" . $guida;
;
$result = $conn->query($query);
$row    = $result->fetch_assoc();
echo getx() . ', ' . gety() . ', ' . getz();
function getx()
{
    global $conn;
	global $guida;
    $query = "SELECT x FROM player_table_pos WHERE id=" . $guida;
    ;
    $result = $conn->query($query);
    $row    = $result->fetch_assoc();
    return $row['x'];
}
function gety()
{
    global $conn;
	global $guida;
    $query = "SELECT y FROM player_table_pos WHERE id=" . $guida;
    ;
    $result = $conn->query($query);
    $row    = $result->fetch_assoc();
    return $row['y'];
}

function getz()
{
    global $conn;
	global $guida;
    $query = "SELECT z FROM player_table_pos WHERE id=" . $guida;
    ;
    $result = $conn->query($query);
    $row    = $result->fetch_assoc();
    return $row['z'];
}




if (isset($_GET['forward'])) {
    ob_clean();
	global $guida;
    $sql = "UPDATE player_table_pos SET z=z+0.2 WHERE id=" . $guida;
    $conn->query($sql);
    $newz = getz() + "0.2";
    echo getx() . ', ' . gety() . ', ' . $newz;
}
if (isset($_GET['backward'])) {
    ob_clean();
	global $guida;
    $sql = "UPDATE player_table_pos SET z=z-0.2 WHERE id=" . $guida;
    $conn->query($sql);
    $newz = getz() - "0.2";
    echo getx() . ', ' . gety() . ', ' . $newz;
}

if (isset($_GET['left'])) {
    ob_clean();
	global $guida;
    $sql = "UPDATE player_table_pos SET x=x+0.2 WHERE id=" . $guida;
    $conn->query($sql);
    $newx = getx() + "0.2";
    echo $newx . ', ' . gety() . ', ' . getz();
}
if (isset($_GET['right'])) {
    ob_clean();
	global $guida;
    $sql = "UPDATE player_table_pos SET x=x-0.2 WHERE id=" . $guida;
    $conn->query($sql);
    $newx = getx() - "0.2";
    echo $newx . ', ' . gety() . ', ' . getz();
}


?>

