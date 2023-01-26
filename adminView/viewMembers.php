<div>
  <h2>All Members</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">Member ID</th>
        <th class="text-center">Member Name </th>
        <th class="text-center">Member Type</th>
        <th class="text-center">Librarian ID</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <?php
    include_once "../config/dbconnect.php";
    $sql = "SELECT * from member_register";
    $result = $conn->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {

    ?>
    <tr>
      <td>
        <?= $row["member_uid"] ?>
      </td>
      <td>
        <?= $row["member_name"] ?>
      </td>
      <td>
        <?= $row["member_type"] ?>
      </td>
      <td>
        <?= $row["librarian_id"] ?>
      </td>
      <td><button class="btn btn-danger" style="height:40px"
          onclick="memberDelete('<?= $row['member_uid'] ?>')">Delete</button></td>
    </tr>
    <?php
        $count = $count + 1;

      }
    }
    ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Member
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Member</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form enctype='multipart/form-data' action="./controller/addMemberController.php" method="POST">
            <div class="form-group">
              <label for="qty">Member Type:</label>
              <input type="text" class="form-control" id="member_type" name="member_type" required>
            </div>
            <div class="form-group">
              <label for="name">Member Name:</label>
              <input type="text" class="form-control" id="member_name" name="member_name" required>
            </div>
            <div class="form-group">
              <label>Librarian ID:</label>
              <select name="librarian_id">
                <option disabled selected>Select librarian</option>
                <?php

                $sql = "SELECT * from librarian";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                  while ($row = $result->fetch_assoc()) {
                    echo "<option value='" . $row['librarian_id'] . "'>" . $row['librarian_name'] . "</option>";
                  }
                }
                ?>
              </select>
            </div>
            <div class="form-group">
              <button type="submit" value="submit" class="btn btn-secondary" id="upload" name="upload"
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