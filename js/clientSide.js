function loadOnce() {
    // load everything once
    var numberOfRequests = 5;
    $("#cart-items").load('../php/fetchMyRequests.php', {
        fetchNumberOfRequests: numberOfRequests
    });

    $("#library").load('../php/fetchBooks.php', {
        fetchNumberOfBooks: 5
    });

    $("#mybooks").load('../php/showMyBooks.php', {
        fetchNumberOfMyBooks: 5
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

});