<?php

include_once "../config/dbconnect.php";

$m_id = $_POST['record'];
$query = "DELETE FROM member_register where member_uid='$m_id'";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Member Deleted";
} else {
    echo "Not able to delete";
}

?>