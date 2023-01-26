<?php

include_once "../config/dbconnect.php";

$b_id = $_POST['record'];
$query = "DELETE FROM book_barrow where book_id='$b_id'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Book-Barrow Deleted";
} else {
    echo "Not able to delete";
}

?>