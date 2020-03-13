<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="intro">
        <h1>Welcome , Client!</h1>
    </div>
    <div class="main">
        <div class="card">
            <span class='highlight'>Books in Library</span>
            <div id="library">
                <?php
                $query = "SELECT * FROM books LIMIT 6;";
                $books = pg_query($conn, $query);

                if (pg_fetch_assoc($books) > 0) {

                    echo '<table>
                    <t>
                    <th> No. </th>
                    <th> Name </th>
                    <th> Quantity </th>
                    </t>';

                    $id = 0;
                    while ($row = pg_fetch_assoc($books)) {
                        $id++;
                        echo    '<tr>
                        <td>' . $id . '</td>
                        <td>' . $row['bookname'] . '</td>
                        <td id= "quantity">' . $row['quantity'] . '</td>
                      </tr>
                     ';
                    }

                    echo ' </table>';
                } else {
                    echo "There are no books in the Library!";
                }
                ?>
            </div>
            <button>Show more Books</button>
        </div>

        <div class="card">
            <h4>My Books</h4>
        </div>

    </div>

</body>

</html>