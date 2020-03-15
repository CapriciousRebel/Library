$(document).ready(function() {
    var numberOfRequests = 0;
    $("#showMoreAdmin").click(function() {
        $('#showMore').html("Show more Checkout Requests");
        numberOfRequests = numberOfRequests + 5;
        $("#checkoutRequests").load('../php/fetchRequests.php', {
            fetchNumberOfRequests: numberOfRequests
        });
    });
});