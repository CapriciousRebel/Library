<?php

include 'connection.php';

extract($_POST);

if(isset($_POST)){

    $name = $_POST['bookname'];
    $quantity = $_POST['quantity'];

    $query = "INSERT INTO requests(bookname,username,quantity) VALUES('$name', 'rebel', $quantity);";
    $result = pg_query($conn, $query);

}