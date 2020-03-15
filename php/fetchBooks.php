<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php include 'connection.php';

$fetchNumberOfBooks = $_POST['fetchNumberOfBooks'];
$query = "SELECT * FROM books LIMIT $fetchNumberOfBooks;";
$books = pg_query($conn, $query);

if ($books) {
    echo '          <table>
                    <t>
                    <th> No. </th>
                    <th> Name </th>
                    <th> Available </th>
                    </t>';

    $id = 0;


    while ($row = pg_fetch_assoc($books)) {
        $id++;

        $bookname = $row['bookname'];
        $quantity = $row['quantity'];
        echo           '<tr>
                        <td>' . $id . '</td>
                        <td>' . $bookname . '</td>
                        <td>' . $quantity . '</td>
                        <td>
                        <div class = "makeRequestForm" action = "">
                        <input type = "text" name = "bookname" class = "bookname" style = "display:none;" value = "' . $bookname . '">
                        <input type = "number" name = "quantity" class = "quantity" min = "0" max = "' . $quantity . '">
                        <input type = "submit" name = "addToCart" class = "addToCart" value = "Add to Cart">
                        </div>
                        </tr>';
    }
    echo            '</table>';
} else {
    echo "There are no books in the Library!";
}
?>

<script>
    // beautiful use of HTML DOM Ahead :)
    $(document).ready(function() {
        $(".makeRequestForm").each(function() {
            $(this).children(".addToCart").click(function() {
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
            });
        });
    });
</script>