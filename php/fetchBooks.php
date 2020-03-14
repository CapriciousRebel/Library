<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php include 'connection.php';

$fetchNumberOfBooks = $_POST['fetchNumberOfBooks'];
$query = "SELECT * FROM books LIMIT $fetchNumberOfBooks;";
$books = pg_query($conn, $query);

if (pg_fetch_assoc($books) > 0) {
    echo '          <table>
                    <t>
                    <th> No. </th>
                    <th> Name </th>
                    <th> Available </th>
                    <th> Request </th>
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
                        <form id = "makeRequestForm" method = "POST">
                        <input type="number" id="quantity" name="quantity" min="0" max="' . $quantity . '">
                        <input type="text" id="bookname" name="bookname" style = "visibility:hidden;" value = "' . $bookname . '">
                        <button type="submit" class = "makeRequest"> Request </button>
                        </form>
                        </td>
                        </tr>';
    }
    echo            '</table>';
} else {
    echo "There are no books in the Library!";
}
?>

<script>
    $(document).ready(function() {
        $('.makeRequest').click(function() {
            $.ajax({
                url: '../php/makeRequest.php',
                method: 'POST',
                data: $("#makeRequestForm").serialize()
            });
        });
    });
</script>