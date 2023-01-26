<?php
include_once "../config/dbconnect.php";

if (isset($_POST['add_author'])) {

    $author_name = $_POST['author_name'];
    $author_age = $_POST['author_age'];


    $insert = mysqli_query($conn, "INSERT INTO author
         (author_name,author_age) 
         VALUES ( '$author_name',$author_age)");

    if (!$insert) {
        echo mysqli_error($conn);
        header("Location: ../index.php?author=error");
    } else {
        echo "author added successfully.";
        header("Location: ../index.php?author=success");
    }

}

?>