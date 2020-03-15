<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php include 'connection.php';

$fetchNumberOfRequests = $_POST['fetchNumberOfRequests'];
$query = "SELECT * FROM requests ORDER BY id DESC LIMIT $fetchNumberOfRequests ;";
$requests = pg_query($conn, $query);

if ($requests) {
    echo '          <table>
                    <t>
                    <th> No.</th>
                    <th> Book </th>
                    <th> Quantity </th>
                    </t>';

    $id = 0;
    while ($row = pg_fetch_assoc($requests)) {
        $id++;


        $bookname = $row['bookname'];
        $quantity = $row['quantity'];
        echo        '<tr>
                        <td>' . $id . '</td>
                        <td>' . $bookname . '</td>
                        <td>' . $quantity . '</td>
                    </tr>';
    }
    echo            '</table>';
} else {
    echo "There are no new Requests!";
}
?>