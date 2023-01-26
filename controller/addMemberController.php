<?php
include_once "../config/dbconnect.php";

if (isset($_POST['upload'])) {
    $member_uid = $_POST['member_uid'];
    $member_type = $_POST['member_type'];
    $member_name = $_POST['member_name'];
    $librarian_id = $_POST['librarian_id'];

    $insert = mysqli_query($conn, "INSERT INTO member_register
         (member_type, member_name, librarian_id) 
         VALUES ( '$member_type','$member_name',$librarian_id)");

    if (!$insert) {
        echo mysqli_error($conn);
        header("Location: ../index.php?member=error");
    } else {
        echo "Member added successfully.";
        header("Location: ../index.php?member=success");
    }


}

?>