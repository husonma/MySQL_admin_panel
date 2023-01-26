<?php

include_once "../config/dbconnect.php";

$l_id = $_POST['record'];
$query = "DELETE FROM librarian where librarian_id='$l_id'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Librarian Deleted";
} else {
    echo "Not able to delete";
}

?>