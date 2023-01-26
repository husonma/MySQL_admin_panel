<?php

include_once "../config/dbconnect.php";

$b_id = $_POST['record'];
$query = "DELETE FROM author_writes where book_id='$b_id'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Author-Book Deleted";
} else {
    echo "Not able to delete";
}

?>