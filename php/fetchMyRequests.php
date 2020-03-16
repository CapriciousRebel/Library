<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php include 'connection.php';

$query = "SELECT * FROM requests ORDER BY id DESC;";
$requests = pg_query($conn, $query);
$firstrow = pg_fetch_assoc($requests);


if ($firstrow > 0) {
    $id = 1;
    $bookname = $firstrow['bookname'];
    $quantity = $firstrow['quantity'];

    echo '  <table>
                <th> No.</th>
                <th> Book </th>
                <th> Quantity </th>
                <th> Status </th>
                <tr>
                    <td>' . $id . '</td>
                    <td>' . $bookname . '</td>
                    <td>' . $quantity . '</td>
                    <td>Pending</td>
                </tr>';
    while ($row = pg_fetch_assoc($requests)) {
        $id++;

        $bookname = $row['bookname'];
        $quantity = $row['quantity'];
        echo        '<tr>
                        <td>' . $id . '</td>
                        <td>' . $bookname . '</td>
                        <td>' . $quantity . '</td>
                        <td>Pending</td>
                    </tr>';
    }
    echo            '</table>';
} else {
    echo "There are no new Requests!";
}
?>