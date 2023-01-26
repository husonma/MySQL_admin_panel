<?php
include_once "../config/dbconnect.php";

if (isset($_POST['add_authorbook'])) {
    $book_id = $_POST['book_id'];
    $author_id = $_POST['author_id'];

    $insert = mysqli_query($conn, "INSERT INTO author_writes
            (book_id,author_id) 
                VALUES ($book_id, $author_id)");

    if (!$insert) {
        echo mysqli_error($conn);
        header("Location: ../index.php?authbook=error");
    } else {
        echo "Auth-Book added successfully.";
        header("Location: ../index.php?authbook=success");
    }

}

?>