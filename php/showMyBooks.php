<?php include 'connection.php';

$fetchNumberOfBooks = $_POST['fetchNumberOfMyBooks'];
$query = "SELECT * FROM history LIMIT $fetchNumberOfBooks;";
$mybooks = pg_query($conn, $query);

if (pg_fetch_assoc($mybooks) > 0) {
    echo '          <table>
        <t>
        <th> No. </th>
        <th> Book Name </th>
        <th> Quantity </th>
        </t>';

    $id = 0;
    while ($row = pg_fetch_assoc($mybooks)) {
        $id++;
        $book = $row['book'];
        $quantity = $row['quantity'];

        echo       '<tr>
                    <td>' . $id . '</td>
                    <td>' . $book . '</td>
                    <td' . $quantity . '</td>
                    </tr>';
    }
    echo            '</table>';
} else {
    echo "You have no books!";
}
