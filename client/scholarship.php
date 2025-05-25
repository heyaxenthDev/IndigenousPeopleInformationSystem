<?php 
    include 'authentication.php'; 
    checkLogin(); // Call the function to check if the user is logged in
    include '../database/conn.php';
    include 'includes/header.php';
    include 'includes/sidebar.php';
    include 'alert.php';

?>

<!-- UniFAST TDP Application Form Section -->
<div class="row">
    <div class="col-lg-10 offset-lg-1">
        <div class="card">
            <div class="card-header text-white text-center">
                <h5 class="mb-0">CHED Regional Office<br>Unifast TULONG DULONG PROGRAM (UniFAST-TDP) APPLICATION (FORM)
                </h5>
            </div>
            <div class="card-body">
                <form action="unifast-tdp-add.php" method="POST">
                    <h6 class="mb-3 text-center">PERSONAL INFORMATION</h6>
                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="last_name" id="last_name"
                                    placeholder="Last Name" required>
                                <label for="last_name">Last Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="first_name" id="first_name"
                                    placeholder="First Name" required>
                                <label for="first_name">First Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="middle_name" id="middle_name"
                                    placeholder="Middle Name">
                                <label for="middle_name">Middle Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="maiden_name" id="maiden_name"
                                    placeholder="Maiden Name">
                                <label for="maiden_name">Maiden Name (for married women)</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth"
                                    placeholder="Date of Birth" required>
                                <label for="date_of_birth">Date of Birth</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="permanent_address" id="permanent_address"
                                    placeholder="Permanent Address" required>
                                <label for="permanent_address">Permanent Address</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="zip_code" id="zip_code"
                                    placeholder="Zip Code">
                                <label for="zip_code">Zip Code</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="place_of_birth" id="place_of_birth"
                                    placeholder="Place of Birth">
                                <label for="place_of_birth">Place of Birth</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="street" id="street" placeholder="Street">
                                <label for="street">Street</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="barangay" id="barangay"
                                    placeholder="Barangay">
                                <label for="barangay">Barangay</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="municipality" id="municipality"
                                    placeholder="Municipality">
                                <label for="municipality">Municipality</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="province" id="province"
                                    placeholder="Province">
                                <label for="province">Province</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-2">
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="school_name" id="school_name"
                                    placeholder="Name of School Attended">
                                <label for="school_name">Name of School Attended</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="school_number" id="school_number"
                                    placeholder="School #">
                                <label for="school_number">School #</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="school_address" id="school_address"
                                    placeholder="School Address">
                                <label for="school_address">School Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-2">
                        <div class="col-md-2">
                            <div class="form-floating">
                                <select class="form-select" name="sex" id="sex" required>
                                    <option value="" selected disabled></option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="sex">Sex</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating">
                                <select class="form-select" name="citizenship" id="citizenship" required>
                                    <option value="" selected disabled></option>
                                    <option value="Filipino">Filipino</option>
                                    <option value="Other">Other</option>
                                </select>
                                <label for="citizenship">Citizenship</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="module_number" id="module_number"
                                    placeholder="Module Number">
                                <label for="module_number">Module Number</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating">
                                <select class="form-select" name="school_type" id="school_type">
                                    <option value="" selected disabled></option>
                                    <option value="Public">Public</option>
                                    <option value="Private">Private</option>
                                </select>
                                <label for="school_type">School Type</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="year_level" id="year_level"
                                    placeholder="Year Level">
                                <label for="year_level">Year Level</label>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="course" id="course" placeholder="Course">
                                <label for="course">Course</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-2">
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="tribal_membership" id="tribal_membership"
                                    placeholder="Tribal Membership">
                                <label for="tribal_membership">Tribal Membership</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="E-mail Address">
                                <label for="email">E-mail Address</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="disability" id="disability"
                                    placeholder="Type of Disability">
                                <label for="disability">Type of Disability</label>
                            </div>
                        </div>
                    </div>

                    <h6 class="mb-3 mt-4 text-center">FAMILY BACKGROUND</h6>

                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="father_status" id="father_status"
                                    placeholder="Father Status">
                                <label for="father_status">Father: ( ) Living ( ) Deceased</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="mother_status" id="mother_status"
                                    placeholder="Mother Status">
                                <label for="mother_status">Mother: ( ) Living ( ) Deceased</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="address" id="address"
                                    placeholder="Address">
                                <label for="address">Address</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-2">
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="total_gross_income"
                                    id="total_gross_income" placeholder="Total Income">
                                <label for="total_gross_income">Total Parents Gross Income</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="number" class="form-control" name="siblings" id="siblings"
                                    placeholder="Siblings">
                                <label for="siblings">No. of Siblings in the Family</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="occupation" id="occupation"
                                    placeholder="Occupation">
                                <label for="occupation">Occupation</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-2 align-items-center">
                        <div class="col-md-6">
                            <label class="form-label">Are you enjoying other educational financial assistance?</label>
                            <div class="form-check form-check-inline ms-2">
                                <input class="form-check-input" type="radio" name="other_assistance" id="assistanceYes"
                                    value="Yes">
                                <label class="form-check-label" for="assistanceYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="other_assistance" id="assistanceNo"
                                    value="No">
                                <label class="form-check-label" for="assistanceNo">No</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="assistance_specify"
                                    id="assistance_specify" placeholder="Assistance">
                                <label for="assistance_specify">If yes, please specify</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-8">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="signature" id="signature"
                                    placeholder="Signature">
                                <label for="signature">Signature / Printed Name</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-floating">
                                <input type="date" class="form-control" name="date_accomplished" id="date_accomplished"
                                    placeholder="Date Accomplished">
                                <label for="date_accomplished">Date Accomplished</label>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary">Submit Application</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php 
include '../admin/includes/footer.php';
?>