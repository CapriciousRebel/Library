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
        <div class="welcome">
            <h1>Welcome , Client!</h1>
        </div>
        <div class="cart">
            <h1>Cart</h1>
            <div id="cart-items">

            </div>
            <input type="button" id="Checkout" name="Checkout" value="Checkout">

        </div>
    </div>
    <div class="main">
        <div class="card">
            <span class='highlight'>Books in Library</span>
            <div id="library">

            </div>
            <button id="showMore">Show More books</button>
        </div>

        <div class="card">
            <h4 class="highlight">My Books</h4>
            <div id="mybooks">

            </div>
            <button id="showMybooks">Show More Books</button>
        </div>
        <div class="card">
            <form id="makeRequestForm" name="makeRequestForm" method="POST">
                <input type="number" id="quantity" name="quantity" min="0" max="10">
                <input type="text" id="bookname" name="bookname">
                <input type="button" id="makeRequestButton" name="makeRequestButton" value="Request">
            </form>
        </div>
        <script src="../js/clientSide.js"></script>
    </div>
</body>

</html>