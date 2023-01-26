<div>
  <h2>Books</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Book ID</th>
        <th class="text-center">Book Name</th>
        <th class="text-center">Genre</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * from book";
    $result = $conn->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
      <td>
        <?= $row["book_id"] ?>
      </td>
      <td>
        <?= $row["book_name"] ?>
      </td>
      <td>
        <?= $row["genre"] ?>
      </td>
      <td><button class="btn btn-danger" style="height:40px"
          onclick="bookDelete('<?= $row['book_id'] ?>')">Delete</button></td>
    </tr>
    <?php
        $count = $count + 1;
      }
    }
    ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Book
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Book</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addBookController.php" method="POST">
            <div class="form-group">
              <label for="name">Book Name:</label>
              <input type="text" class="form-control" id="book_name" name="book_name" required>
            </div>
            <div class="form-group">
              <label for="qty">Genre:</label>
              <input type="text" class="form-control" id="genre" name="genre" required>
            </div>
            <div class="form-group">
              <button type="submit" value="submit" class="btn btn-secondary" id="add_book" name="add_book"
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