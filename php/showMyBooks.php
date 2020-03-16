<?php include 'connection.php';

$fetchNumberOfBooks = $_POST['fetchNumberOfMyBooks'];
$query = "SELECT * FROM records LIMIT $fetchNumberOfBooks;";
$mybooks = pg_query($conn, $query);


if ($mybooks) {
    echo '  <table>
            <th> No. </th>
            <th> Name </th>
            <th> Quantity </th>';

    $id = 0;
    while ($row = pg_fetch_assoc($mybooks)) {
        $id++;
        $book = $row['bookname'];
        $quantity = $row['quantity'];

        echo       '<tr>
                    <td>' . $id . '</td>
                    <td>' . $book . '</td>
                    <td>' . $quantity . '</td>
                    </tr>';
    }
    echo            '</table>';
} else {
    echo "You have no books!";
}
