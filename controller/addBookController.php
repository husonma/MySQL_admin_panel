<?php
include_once "../config/dbconnect.php";

if (isset($_POST['add_book'])) {
    $book_id = $_POST['book_id'];
    $book_name = $_POST['book_name'];
    $genre = $_POST['genre'];

    $insert = mysqli_query($conn, "INSERT INTO book
            (book_name,genre) 
                VALUES ('$book_name','$genre')");

    if (!$insert) {
        echo mysqli_error($conn);
        header("Location: ../index.php?book=error");
    } else {
        echo "Books added successfully.";
        header("Location: ../index.php?book=success");
    }

}

?>