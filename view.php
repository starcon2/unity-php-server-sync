<?php
$conn  = mysqli_connect("localhost", "root", "", "phpunity");
function getx($guide)
{
    global $conn;
	global $guida;
    $query = "SELECT x FROM player_table_pos WHERE id=" . $guide;
    ;
    $result = $conn->query($query);
    $row    = $result->fetch_assoc();
    return $row['x'];
}
function gety($guide)
{
    global $conn;
	global $guida;
    $query = "SELECT y FROM player_table_pos WHERE id=" . $guide;
    ;
    $result = $conn->query($query);
    $row    = $result->fetch_assoc();
    return $row['y'];
}

function getz($guide)
{
    global $conn;
	global $guida;
    $query = "SELECT z FROM player_table_pos WHERE id=" . $guide;
    ;
    $result = $conn->query($query);
    $row    = $result->fetch_assoc();
    return $row['z'];
}



?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<center>
<h2>view positions of players(for unityphp, from mysql db)</h2>
<div class="jumbotron">
<?php
echo "<h2>player id(guid) 1</h2>";
echo "<h3>";
echo getx(1) . ', ' . gety(1) . ', ' . getz(1);
echo "</h3>";
echo "<hr>";
echo " <h2>player id(guid) 2</h2>";
echo "<h3>";
echo getx(2) . ', ' . gety(2) . ', ' . getz(2);
echo "</h3>";
echo "<hr>";
?>
</div>
</body>
</html>
