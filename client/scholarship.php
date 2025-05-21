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
                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="middle_name" placeholder="Middle Name">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="maiden_name"
                                placeholder="Maiden Name (for married women)">
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth"
                                required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="permanent_address"
                                placeholder="Permanent Address" required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="zip_code" placeholder="Zip Code">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="place_of_birth" placeholder="Place of Birth">
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="street" placeholder="Street">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="barangay" placeholder="Barangay">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="municipality" placeholder="Municipality">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="province" placeholder="Province">
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="school_name"
                                placeholder="Name of School Attended">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="school_number" placeholder="School #">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="school_address" placeholder="School Address">
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md-2">
                            <select class="form-select" name="sex" required>
                                <option value="">Sex</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" name="citizenship" required>
                                <option value="">Citizenship</option>
                                <option value="Filipino">Filipino</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="module_number" placeholder="Module Number">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select" name="school_type">
                                <option value="">School Type</option>
                                <option value="Public">Public</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="year_level" placeholder="Year Level">
                        </div>
                        <div class="col-md-2">
                            <input type="text" class="form-control" name="course" placeholder="Course">
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="tribal_membership"
                                placeholder="Tribal Membership">
                        </div>
                        <div class="col-md-4">
                            <input type="email" class="form-control" name="email" placeholder="E-mail Address">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="disability" placeholder="Type of Disability">
                        </div>
                    </div>
                    <h6 class="mb-3 mt-4 text-center">FAMILY BACKGROUND</h6>
                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="father_status"
                                placeholder="Father: ( ) Living ( ) Deceased">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" name="mother_status"
                                placeholder="Mother: ( ) Living ( ) Deceased">
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="row g-2 mb-2">
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="total_gross_income"
                                placeholder="Total Parents Gross Income">
                        </div>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="siblings"
                                placeholder="No. of Siblings in the Family">
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="occupation" placeholder="Occupation">
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
                            <input type="text" class="form-control" name="assistance_specify"
                                placeholder="If yes, please specify">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-8">
                            <label for="signature" class="form-label">Signature over Printed Name of Applicant</label>
                            <input type="text" class="form-control" name="signature" id="signature"
                                placeholder="Signature / Printed Name">
                        </div>
                        <div class="col-md-4">
                            <label for="date_accomplished" class="form-label">Date Accomplished</label>
                            <input type="date" class="form-control" name="date_accomplished" id="date_accomplished">
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