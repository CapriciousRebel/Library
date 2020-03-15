<?php
include '../php/connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="intro">
        <h1>Welcome , Admin!</h1>
    </div>
    <div class="main">

        <div class="card">
            <h4 class="highlight">Checkout Requests</h4>
            <div id="checkoutRequests">

            </div>
            <button class="highlight" id="showMoreAdmin">Show More</button>
            <script src="../js/fetchRequests.js"></script>

        </div>
    </div>
</body>

</html>