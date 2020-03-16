function updateCart() {
    var numberOfRequests = 5;
    $("#cart-items").load('../php/fetchMyRequests.php', {
        fetchNumberOfRequests: numberOfRequests
    });
}

// beautiful use of HTML DOM Ahead :)
$(document).ready(function() {
    $(".makeRequestForm").each(function() {
        $(this).children(".addToCart").click(function() {
            // get the data from the document and store it in variables
            var bookname = $(this).siblings(".bookname").val();
            var quantity = $(this).siblings(".quantity").val();

            // Send ajax request to insert into requests
            $.ajax({
                url: "../php/makeRequest.php", // this fucking line was the error, because this code gets added on the pages/client.php, so the url must be ../php/makeRequest.php, not makeRequest.php !!!!!!
                type: "POST",
                data: {
                    bookname: bookname,
                    quantity: quantity
                },
                cache: false
            });

            // update the cart 
            updateCart();
        });
    });


});