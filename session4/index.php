<?php
// PROCEDURAL METHOD 
// connect to DB -------------- root : default username in mySQL // shop : the DB name 
$con = mysqli_connect('localhost', 'root', '', 'shop');
if ($con) {
    if (mysqli_query($con, "INSERT INTO colors (name) values ('test')")) {
        echo 'test added sucssefully';
    }
    // if the connection is working 
    mysqli_close($con);
} else {
    die("connection failed: " . mysqli_connect_error());
}
//--------------------------------------------------------
// OOP METHOD 
// create an object : 
$con = new mysqli('localhost', 'root', '', 'shop');
if ($con->connect_errno) {
    die("connection failed: " . $con->connect_errno);
}
$q = $con->query("SELECT * FROM categories");
// fetch : to view the records
while ($row = $q->fetch_assoc()) {
    var_export($row);
}

$con->close();