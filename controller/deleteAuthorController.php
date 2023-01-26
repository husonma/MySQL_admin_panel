<?php

include_once "../config/dbconnect.php";

$a_id = $_POST['record'];
$query = "DELETE FROM author where author_id='$a_id'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Author Deleted";
} else {
    echo "Not able to delete";
}

?>