<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php include 'connection.php';

$fetchNumberOfRequests = $_POST['fetchNumberOfRequests'];
$query = "SELECT * FROM requests LIMIT $fetchNumberOfRequests;";
$requests = pg_query($conn, $query);

if (pg_fetch_assoc($requests) > 0) {
    echo '          <table>
                    <t>
                    <th> No.</th>
                    <th> User Name </th>
                    <th> Book </th>
                    <th> Quantity </th>
                    </t>';

    $id = 0;
    while ($row = pg_fetch_assoc($requests)) {
        $id++;

        $username = $row['username'];
        $bookname = $row['bookname'];
        $quantity = $row['quantity'];
        echo        '<tr>
                        <td>' . $id . '</td>
                        <td>' . $username. '</td>
                        <td>' . $bookname . '</td>
                        <td>' . $quantity . '</td>
                    </tr>';
    }
    echo            '</table>';
} else {
    echo "There are no new Requests!";
}
?>