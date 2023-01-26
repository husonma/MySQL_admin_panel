<?php
include_once "../config/dbconnect.php";

if (isset($_POST['add_bookbarrow'])) {
    $book_id = $_POST['book_id'];
    $member_uid = $_POST['member_uid'];
    $barrow_bdate = $_POST['barrow_bdate'];
    $barrow_rdate = $_POST['barrow_rdate'];

    $insert = mysqli_query($conn, "INSERT INTO book_barrow
            (book_id, member_uid, barrow_bdate,barrow_rdate) 
                VALUES ($book_id,$member_uid, '$barrow_bdate' , '$barrow_rdate')");

    if (!$insert) {
        echo mysqli_error($conn);
        header("Location: ../index.php?bookbarrow=error");
    } else {
        echo "Books added successfully.";
        header("Location: ../index.php?bookbarrow=success");
    }

}

?>