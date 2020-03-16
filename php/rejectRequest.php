<?php
include 'connection.php';


$username = $_POST['username'];
$bookname = $_POST['bookname'];
$quantity = $_POST['quantity'];

$query = "DELETE FROM requests WHERE username ='$username' AND bookname = '$bookname' AND quantity = '$quantity';";
$result = pg_query($conn, $query);