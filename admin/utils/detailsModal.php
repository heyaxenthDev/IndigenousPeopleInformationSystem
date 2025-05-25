<!-- View Modal for Registered IP Data -->

<div class="modal fade" id="detailsModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="detailsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="detailsModalLabel">Registered Indigenous People Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="last_name" id="viewLastname" placeholder="Last Name"
                        readonly>
                    <label for="viewLastname">Last Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="first_name" id="viewFirstname"
                        placeholder="First Name" readonly>
                    <label for="viewFirstname">First Name</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="middle_name" id="viewMiddlename"
                        placeholder="Middle Name" readonly>
                    <label for="viewMiddelname">Middle Name</label>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="suffix" id="viewSuffix" placeholder="Suffix"
                                readonly>
                            <label for="viewSuffix">Suffix</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="gender" id="viewGender" placeholder="Gender"
                                readonly>
                            <label for="viewGender">Gender</label>
                        </div>
                    </div>
                </div>
                <div class="row g-2 mb-2">
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="age" id="viewAge" placeholder="Age"
                                readonly>
                            <label for="viewAge">Age</label>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="status" id="viewCivilStatus"
                                placeholder="Civil Status" readonly>
                            <label for="viewCivilStatus">Civil Status</label>
                        </div>
                    </div>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="barangay" id="viewBarangay" placeholder="Barangay"
                        readonly>
                    <label for="viewBarangay">Barangay</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="text" class="form-control" name="contact_no" id="viewContact" placeholder="Contact No."
                        readonly>
                    <label for="viewContact">Contact No.</label>
                </div>
                <div class="form-floating mb-2">
                    <input type="email" class="form-control" name="email" id="viewEmail" placeholder="Email" readonly>
                    <label for="viewEmail">Email</label>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>