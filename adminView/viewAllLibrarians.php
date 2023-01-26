<div>
  <h3>Librarian</h3>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Librarian Number</th>
        <th class="text-center">Librarian ID</th>
        <th class="text-center">Librarian Name</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * from librarian";
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
        <?= $row["librarian_id"] ?>
      </td>
      <td>
        <?= $row["librarian_name"] ?>
      </td>
      <td><button class="btn btn-danger" style="height:40px"
          onclick="librarianDelete('<?= $row['librarian_id'] ?>')">Delete</button></td>
    </tr>
    <?php
        $count = $count + 1;

      }
    }
    ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Librarian
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Librarian</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addLibrarianController.php" method="POST">
            <div class="form-group">
              <label for="name">Librarian Name:</label>
              <input type="text" class="form-control" id="librarian_name" name="librarian_name" required>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="librarian_add" name="librarian_add"
                style="height:40px">Add Item</button>
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