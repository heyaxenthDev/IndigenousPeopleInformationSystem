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
                        <!-- <h4 class="card-title">List of Job Applications</h4> -->
                        <h4 class="card-title">List of Indigenous People Job Applicants</h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>Indigenous Member</th>
                                    <th>Last Name</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Barangay</th>
                                    <th>Date Accomplished</th>
                                    <!-- <th>Status</th> -->
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
                                    <td><?= $row['indigenous_member']; ?></td>
                                    <td><?= $row['lastname']; ?></td>
                                    <td><?= $row['firstname']; ?></td>
                                    <td><?= $row['middlename']; ?></td>
                                    <td><?= $row['barangay']; ?></td>
                                    <td><?= $row['date_accomplished']; ?></td>
                                    <!-- <td><?= $row['status']; ?></td> -->
                                    <td>
                                        <button class="btn btn-sm btn-success view-job-application"
                                            data-view-ja="<?=$row['id']?>"><i class="bi bi-eye"></i></button>
                                        <button class="btn btn-sm btn-danger delete-job-application"
                                            data-delete-ja="<?=$row['id']?>"><i class="bi bi-trash"></i></button>
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
include 'utils/jaViewModal.php';
?>

<script src="js/job_details.js"></script>

<?php 
include '../admin/includes/footer.php';
?>