<div>
    <h2>Author-Book</h2>
    <table class="table ">
        <thead>
            <tr>
                <th class="text-center">Number of Books</th>
                <th class="text-center">Book ID</th>
                <th class="text-center">Author ID</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <?php
        include_once "../config/dbconnect.php";
        $sql = "SELECT * from author_writes";
        $result = $conn->query($sql);
        $count = 1;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
        ?>
        <tr>
            <td>
                <?= $count ?>
            </td>
            <td>
                <?= $row["book_id"] ?>
            </td>
            <td>
                <?= $row["author_id"] ?>
            </td>
            <td><button class="btn btn-danger" style="height:40px"
                    onclick="authorBookDelete('<?= $row['book_id'] ?>')">Delete</button></td>
        </tr>
        <?php
                $count = $count + 1;
            }
        }
        ?>
    </table>

    <!-- Trigger the modal with a button -->
    <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
        Add Author-Book
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">New Author-Book</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form enctype='multipart/form-data' action="./controller/addAuthorBookController.php" method="POST">
                        <div class="form-group">
                            <label>Book name:</label>
                            <select name="book_id">
                                <option disabled selected>Select book</option>
                                <?php

                                $sql = "SELECT * from book";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['book_id'] . "'>" . $row['book_name'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Author name:</label>
                            <select name="author_id">
                                <option disabled selected>Select author</option>
                                <?php

                                $sql = "SELECT * from author";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<option value='" . $row['author_id'] . "'>" . $row['author_name'] . "</option>";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" value=submit class="btn btn-secondary" id="add_authorbook"
                                name="add_authorbook" style="height:40px">Add
                                Item</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"
                        style="height:40px">Close</button>
                </div>
            </div>

        </div>
    </div>


</div>