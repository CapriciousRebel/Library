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
            <button id="showMore">Show Library Books</button>
        </div>

        <div class="card">
            <h4 class="highlight">My Books</h4>
            <div id="mybooks">

            </div>
            <button id="showMybooks">Show My Books</button>
        </div>
        <div class="card">
            <form id="makeRequestForm" name="makeRequestForm" method="POST">
                <input type="number" id="quantity" name="quantity" min="0" max="10">
                <input type="text" id="bookname" name="bookname">
                <input type="button" id="makeRequestButton" name="makeRequestButton" value="Request">
            </form>
        </div>

        <script>
            $(document).ready(function() {

                // Fetch library books
                var LibNoOfBooks = 0;

                $("#showMore").click(function() {
                    $('#showMore').html("Show more Books");
                    LibNoOfBooks = LibNoOfBooks + 5;
                    $("#library").load('../php/fetchBooks.php', {
                        fetchNumberOfBooks: LibNoOfBooks
                    });
                });

                // Fetch My books
                var MyNoOfBooks = 0;
                $("#showMybooks").click(function() {
                    $('#showMybooks').html("Show more Books");
                    MyNoOfBooks = MyNoOfBooks + 5;
                    $("#mybooks").load('../php/showMyBooks.php', {
                        fetchNumberOfMyBooks: MyNoOfBooks
                    });
                });

                // Make book request
                $("#makeRequestButton").on('click', function() {
                    var bookname = $("#bookname").val();
                    var quantity = $("#quantity").val();
                    $.ajax({
                        url: "../php/makeRequest.php",
                        type: "POST",
                        data: {
                            bookname: bookname,
                            quantity: quantity,
                        },
                    });
                });
            });
        </script>
    </div>
</body>

</html>