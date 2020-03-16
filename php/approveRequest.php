<?php
include 'connection.php';


$username = $_POST['username'];
$bookname = $_POST['bookname'];
$quantity = $_POST['quantity'];

$query1 = "INSERT INTO records(username,bookname,quantity,status) VALUES('$username', '$bookname', '$quantity','checkout');";
$query2 = "DELETE FROM requests WHERE username ='$username' AND bookname = '$bookname' AND quantity = '$quantity';";
$result2 = pg_query($conn, $query2);
$result1 = pg_query($conn, $query1);