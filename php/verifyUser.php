<?php
include 'connection.php';

$query = "SELECT * FROM users WHERE isAdmin = 0;";
$users = pg_query($conn, $query);

while ($user = pg_fetch_assoc($users)) {
    $user_name =  $user['name'];
    $user_password =  $user['password'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name-client"];
        $password = $_POST["password-client"];
    }

    if ($name == $user_name && $password == $user_password) {
        header("Location: ../pages/client.php");
        break;
    }
}

header("Location: ../index.html");
