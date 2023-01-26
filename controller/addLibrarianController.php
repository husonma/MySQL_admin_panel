<?php
include_once "../config/dbconnect.php";

if (isset($_POST['librarian_add'])) {
    $librarian_id = $_POST['librarian_id'];
    $librarian_name = $_POST['librarian_name'];

    $insert = mysqli_query($conn, "INSERT INTO librarian
            (librarian_name) 
                VALUES ('$librarian_name')");

    if (!$insert) {
        echo mysqli_error($conn);
        header("Location: ../index.php?librarian=error");
    } else {
        echo "Librarain added successfully.";
        header("Location: ../index.php?librarian=success");
    }

}

?>