<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php include 'connection.php';

$query = "SELECT * FROM requests;";
$requests = pg_query($conn, $query);

if ($requests) {
    echo '          <table>
                    <th> No.</th>
                    <th> User Name </th>
                    <th> Book </th>
                    <th> Quantity </th>';

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