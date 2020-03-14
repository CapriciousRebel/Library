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
        <h1>Welcome , Client!</h1>
    </div>
    <div class="main">
        <div class="card">
            <span class='highlight'>Books in Library</span>
            <div id="library">

            </div>
            <button id="showMore">Show Books</button>
            <script>
                $(document).ready(function() {
                    var numberOfBooks = 0;
                    $("#showMore").click(function() {
                        $('#showMore').html("Show more Books");
                        numberOfBooks = numberOfBooks + 5;
                        $("#library").load('../php/fetchBooks.php', {
                            fetchNumberOfBooks: numberOfBooks
                        });
                    });
                });
            </script>
        </div>

        <div class="card">
            <h4>My Books</h4>
        </div>

    </div>

</body>

</html>