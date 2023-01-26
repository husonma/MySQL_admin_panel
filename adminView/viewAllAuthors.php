<div>
  <h2>Authors</h2>
  <table class="table">
    <thead>
      <tr>
        <th>Author ID</th>
        <th>Author Name</th>
        <th>Author Age</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * from author";
    $result = $conn->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td>
        <?= $row["author_id"] ?>
      </td>
      <td>
        <?= $row["author_name"] ?>
      </td>
      <td>
        <?= $row["author_age"] ?>
      </td>
      <td><button class="btn btn-danger" style="height:40px"
          onclick="authorDelete('<?= $row['author_id'] ?>')">Delete</button></td>
    </tr>
    <?php
        $count = $count + 1;

      }
    }
    ?>

  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Author
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Author</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addAuthorController.php" method="POST">
            <div class="form-group">
              <label for="name">Author Name:</label>
              <input type="text" class="form-control" id="author_name" name="author_name" required>
            </div>
            <div class="form-group">
              <label for="qty">Author Age:</label>
              <input type="number" class="form-control" id="author_age" name="author_age" required>
            </div>
            <div class="form-group">
              <button type="submit" value="submit" class="btn btn-secondary" id="add_author" name="add_author"
                style="height:40px">Add
                Item</button>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>

    </div>
  </div>


</div>