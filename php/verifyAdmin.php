<?php
include 'connection.php';

$query = "SELECT * FROM users WHERE isAdmin = 1;";
$users = pg_query($conn, $query);

while ($user = pg_fetch_assoc($users)) {
    $admin_name =  $user['name'];
    $admin_password =  $user['password'];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name-admin"];
        $password = $_POST["password-admin"];
    }

    if ($name == $admin_name && $password == $admin_password) {
        header("Location: ../pages/admin.php");
        break;
    }
}

header("Location: ../index.html");
