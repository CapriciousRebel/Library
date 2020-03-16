$(document).ready(function() {

    $(".decisionForm").each(function() {
        $(this).children(".approveRequest").click(function() {

            var bookname = $(this).siblings(".bookname").val();
            var quantity = $(this).siblings(".quantity").val();
            var username = $(this).siblings(".username").val();


            $.ajax({
                url: "../php/approveRequest.php",
                type: "POST",
                data: {
                    bookname: bookname,
                    quantity: quantity,
                    username: username
                },
                cache: false

            });
            $("#checkoutRequests").load('../php/fetchRequests.php');
        });

        $(this).children(".rejectRequest").click(function() {

            var bookname = $(this).siblings(".bookname").val();
            var quantity = $(this).siblings(".quantity").val();
            var username = $(this).siblings(".username").val();


            $.ajax({
                url: "../php/rejectRequest.php",
                type: "POST",
                data: {
                    bookname: bookname,
                    quantity: quantity,
                    username: username
                },
                cache: false
            });

            $("#checkoutRequests").load('../php/fetchRequests.php');
        });

    });
});