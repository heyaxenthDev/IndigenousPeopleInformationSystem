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
                        <h4 class="card-title">Registered Indigenous Peoples</h4>
                    </div>
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addIPmodal"><i
                            class="bi bi-plus-circle"></i> Add IP Data</button>
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
                                $query = "SELECT * FROM registered_ip";
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

<!-- Register IP Modal -->
<div class="modal fade" id="addIPmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Register IP</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="ip-add.php" method="POST">
                <div class="modal-body">
                    <div id="ipFormAlert"></div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="last_name" id="lastName" placeholder="Last Name"
                            required>
                        <label for="lastName">Last Name</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="first_name" id="firstName"
                            placeholder="First Name" required>
                        <label for="firstName">First Name</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="middle_name" id="middleName"
                            placeholder="Middle Name">
                        <label for="middleName">Middle Name</label>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="suffix" id="suffix" placeholder="Suffix">
                                <label for="suffix">Suffix</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="gender" id="gender" aria-label="Gender">
                                    <option selected disabled value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="gender">Gender</label>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="age" id="age" placeholder="Age">
                                <label for="age">Age</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select class="form-select" name="status" id="status" aria-label="Civil Status">
                                    <option selected disabled value="">Select Civil Status</option>
                                    <option value="Single">Single</option>
                                    <option value="Married">Married</option>
                                    <option value="Widowed">Widowed</option>
                                    <option value="Separated">Separated</option>
                                    <option value="Divorced">Divorced</option>
                                </select>
                                <label for="status">Civil Status</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="barangay" id="barangay" placeholder="Barangay">
                        <label for="barangay">Barangay</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="text" class="form-control" name="contact_no" id="contactNo"
                            placeholder="Contact No.">
                        <label for="contactNo">Contact No.</label>
                    </div>
                    <div class="form-floating mb-2">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                        <label for="email">Email</label>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="addIP" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php 
include '../admin/includes/footer.php';
?>