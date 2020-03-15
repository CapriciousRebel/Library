<?php
include 'connection.php';

$bookname = $_POST['bookname'];
$quantity = $_POST['quantity'];

$query = "INSERT INTO requests(bookname,username,quantity) VALUES('$bookname', 'rebel', 3);";
$result = pg_query($conn, $query);

