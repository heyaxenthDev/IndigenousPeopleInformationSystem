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
                        <h4 class="card-title">List of Job Applications</h4>
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
                                    <th>Suffix</th>
                                    <th>Gender</th>
                                    <th>Age</th>
                                    <th>Status</th>
                                    <th>Barangay</th>
                                    <th>Contact No.</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $query = "SELECT * FROM job_applications";
                                $result = mysqli_query($conn, $query);
                                while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['first_name']; ?></td>
                                    <td><?php echo $row['last_name']; ?></td>
                                    <td><?php echo $row['middle_name']; ?></td>
                                    <td><?php echo $row['suffix']; ?></td>
                                    <td><?php echo $row['gender']; ?></td>
                                    <td><?php echo $row['age']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                    <td><?php echo $row['barangay']; ?></td>
                                    <td><?php echo $row['contact_no']; ?></td>
                                    <td>
                                        <button class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                                        <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
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
include 'utils/jobModal.php';
?>

<?php 
include '../admin/includes/footer.php';
?>