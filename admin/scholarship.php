<?php 
    include 'authentication.php';
    checkLogin(); // Call the function to check if the user is logged in
    include '../database/conn.php';
    include 'includes/header.php';
    include 'includes/sidebar.php';
    include 'alert.php';

?>


<div class="conatiner-fluid content-inner mt-n5 py-0">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title">List of Scholarship Submissions</h4>
                    </div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>First Name </th>
                                    <th>Last Name</th>
                                    <th>Middle Name</th>
                                    <th>Gender</th>
                                    <th>Barangay</th>
                                    <th>Email</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = "SELECT * FROM scholarship";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['middle_name']; ?></td>
                                    <td><?php echo $row['sex']; ?></td>
                                    <td><?php echo $row['barangay']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td>
                                        <button data-view-id="<?=$row['id']; ?>"
                                            class="btn btn-sm btn-success view-btn"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i></button>
                                    </td>
                                </tr>
                                <?php 
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include 'utils/scholarModal.php';
?>
<script src="js/scholar.js"></script>

<?php 
include '../admin/includes/footer.php';
?>