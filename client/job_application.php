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
                <h5 class="mb-0">Personal Data Sheet (RA 8371, RA 7277, RA 8972)</h5>
            </div>
            <div class="card-body">
                <form action="ja_submit.php" method="POST" enctype="multipart/form-data">
                    <p><strong>Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons
                            (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following
                            items:</strong></p>
                    <div class="row mb-3">
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
                                    <input type="text" class="form-control" name="permanent_address"
                                        id="permanent_address" placeholder="Permanent Address" required>
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

                        <div class="row g-2 mb-3">
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" name="street" id="street"
                                        placeholder="Street">
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
                        <div class="col-md-4">
                            <label class="form-label">Are you a member of any indigenous group?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="indigenous_member" id="indigenousYes"
                                    value="Yes">
                                <label class="form-check-label" for="indigenousYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="indigenous_member" id="indigenousNo"
                                    value="No">
                                <label class="form-check-label" for="indigenousNo">No</label>
                            </div>
                            <input type="text" class="form-control mt-2" name="indigenous_specify"
                                placeholder="If yes please specify">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Are you a person with disability?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pwd" id="pwdYes" value="Yes">
                                <label class="form-check-label" for="pwdYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="pwd" id="pwdNo" value="No">
                                <label class="form-check-label" for="pwdNo">No</label>
                            </div>
                            <input type="text" class="form-control mt-2" name="pwd_specify"
                                placeholder="If yes please specify">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Are you a solo parent?</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="solo_parent" id="soloYes"
                                    value="Yes">
                                <label class="form-check-label" for="soloYes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="solo_parent" id="soloNo" value="No">
                                <label class="form-check-label" for="soloNo">No</label>
                            </div>
                            <input type="text" class="form-control mt-2" name="solo_specify"
                                placeholder="If yes please specify">
                        </div>
                    </div>
                    <h6 class="mt-4 mb-2">REFERENCES (Person not related by consanguinity or affinity to
                        applicant/appointee)
                    </h6>
                    <div class="table-responsive mb-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Address</th>
                                    <th>Tel No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" class="form-control" name="ref_name_1"></td>
                                    <td><input type="text" class="form-control" name="ref_address_1"></td>
                                    <td><input type="text" class="form-control" name="ref_tel_1"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="ref_name_2"></td>
                                    <td><input type="text" class="form-control" name="ref_address_2"></td>
                                    <td><input type="text" class="form-control" name="ref_tel_2"></td>
                                </tr>
                                <tr>
                                    <td><input type="text" class="form-control" name="ref_name_3"></td>
                                    <td><input type="text" class="form-control" name="ref_address_3"></td>
                                    <td><input type="text" class="form-control" name="ref_tel_3"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">ID Picture</label>
                            <input type="file" class="form-control" name="id_picture" accept="image/*">
                        </div>
                    </div>
                    <h6 class="mt-4">PLEASE INDICATE ID Number and Date of Issuance</h6>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Government Issued ID</label>
                            <input type="text" class="form-control" name="gov_id">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">ID/License/Passport No.</label>
                            <input type="text" class="form-control" name="gov_id_no">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Date/Place of Issuance</label>
                            <input type="text" class="form-control" name="gov_id_date_place">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label class="form-label">Signature (Sign inside the box)</label>
                            <input type="text" class="form-control" name="signature">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Date Accomplished</label>
                            <input type="date" class="form-control" name="date_accomplished">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label">Right Thumbmark</label>
                            <input type="text" class="form-control" name="right_thumbmark">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">SUBSCRIBED AND SWORN to before me this, <input type="text"
                                name="affiant_date" class="form-control d-inline w-auto"
                                style="display:inline-block; width:200px;">, affiant exhibiting his/her validly issued
                            government ID as indicated above.</label>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Person Administering Oath</label>
                        <input type="text" class="form-control" name="administering_oath">
                    </div>
                    <div class="mb-3">
                        <small class="text-muted">I declare under oath that I have personally accomplished this Personal
                            Data Sheet which is a true, correct and complete statement pursuant to the provisions of
                            pertinent laws, rules and regulations of the Republic of the Philippines. I authorize the
                            agency head/authorized representative to verify/validate the contents stated herein. I agree
                            that any misrepresentation made in this document and its attachments shall cause the filing
                            of administrative/criminal case/s against me.</small>
                    </div>
                    <div class="row mt-4">
                        <div class="col-12 text-center">
                            <button type="submit" class="btn btn-primary" name="submitJA">Submit Application</button>
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