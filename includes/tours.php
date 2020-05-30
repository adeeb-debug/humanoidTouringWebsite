<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary"><a type="button" class="btn btn-primary" href="add_tour.php">Add Tour</a></h6>
    <div class="card-body">
        <div class="table-responsive">

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> Name </th>
                        <th> Tour Type </th>
                        <th>Minimum Time </th>
                        <th>EDIT </th>
                        <th>DELETE </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //creating a query to fetch user details from database
                    $q = "select * from $table_tour";
                    $results = mysqli_query($db, $q) or die(mysqli_error($db));
                    while ($row = mysqli_fetch_array($results)) { ?>
                        <tr>
                            <td><?php echo "<a href='tour.php?name={$row['name']}'>{$row['name']}</a>"?></td>
                            <td><?php echo $row['type']; ?></td>
                            <td><?php echo $row['min_duration']; ?></td>
                            <td>
                                <form action="update_tour.php" method="post">
                                    <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                </form>
                            </td>
                            <td>
                                <form action="tours.php" method="post">
                                    <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" name="delte_btn" class="btn btn-danger"> DELETE </button>
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
</div>