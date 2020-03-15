function loadOnce() {
    // load everything once
    var numberOfRequests = 5;
    $("#cart-items").load('../php/fetchCart.php', {
        fetchNumberOfRequests: numberOfRequests
    });

    $("#library").load('../php/fetchBooks.php', {
        fetchNumberOfBooks: 5
    });

    $("#mybooks").load('../php/showMyBooks.php', {
        fetchNumberOfMyBooks: 5
    });

}

function updateCart() {

    var numberOfRequests = 5;
    $("#cart-items").load('../php/fetchCart.php', {
        fetchNumberOfRequests: numberOfRequests
    });
}

$(document).ready(function() {

    loadOnce();

    // Fetch library books
    var LibNoOfBooks = 5;
    $("#showMore").click(function() {
        LibNoOfBooks = LibNoOfBooks + 5;
        $("#library").load('../php/fetchBooks.php', {
            fetchNumberOfBooks: LibNoOfBooks
        });
    });

    // Fetch My books
    var MyNoOfBooks = 5;
    $("#showMybooks").click(function() {
        MyNoOfBooks = MyNoOfBooks + 5;
        $("#mybooks").load('../php/showMyBooks.php', {
            fetchNumberOfMyBooks: MyNoOfBooks
        });
    });

    // Add to cart
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

        updateCart();
    });
});