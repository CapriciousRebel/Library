<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="../css/clientStyles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="welcome">
            <h1>Welcome , Client!</h1>
        </div>
    </div>

    <div class="main">
        <div class="card">
            <h1>Books in Library</h1>
            <div id="library">

            </div>
            <button class="highlight" id="showMore">Show More books</button>
        </div>

        <div class="card">
            <h1>My Books</h1>
            <div id="mybooks">

            </div>
            <button class="highlight" id="showMybooks">Show More Books</button>
        </div>

        <div class="card">
            <h1>My requests</h1>
            <div id="cart-items">

            </div>
        </div>
        <script src="../js/clientSide.js"></script>
    </div>
</body>

</html>