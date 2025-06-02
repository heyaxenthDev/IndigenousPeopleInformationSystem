<!-- View Modal for Job Application Data -->

<div class="modal fade" id="jaViewModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="jaViewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="jaViewModalLabel">Job Application Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row mb-3">
                    <h6 class="mb-3 text-center">PERSONAL INFORMATION</h6>
                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="lastname" id="viewLastname"
                                    placeholder="Last Name" required>
                                <label for="viewLastname">Last Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="firstname" id="viewFirstname"
                                    placeholder="First Name" required>
                                <label for="viewFirstname">First Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="middlename" id="viewMiddlename"
                                    placeholder="Middle Name">
                                <label for="viewMiddlename">Middle Name</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="maiden_name" id="viewMaidenname"
                                    placeholder="Maiden Name">
                                <label for="viewMaidenname">Maiden Name (for married women)</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-2">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="dob" id="viewDob"
                                    placeholder="Date of Birth" required>
                                <label for="viewDob">Date of Birth</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="perm_address" id="viewPermAddress"
                                    placeholder="Permanent Address" required>
                                <label for="viewPermAddress">Permanent Address</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="zip_code" id="viewZipcode"
                                    placeholder="Zip Code">
                                <label for="viewZipcode">Zip Code</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="pob" id="viewPob"
                                    placeholder="Place of Birth">
                                <label for="viewPob">Place of Birth</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-3">
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="street" id="viewStreet"
                                    placeholder="Street">
                                <label for="viewStreet">Street</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="barangay" id="viewBarangay"
                                    placeholder="Barangay">
                                <label for="viewBarangay">Barangay</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="municipality" id="viewMunicipality"
                                    placeholder="Municipality">
                                <label for="viewMunicipality">Municipality</label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="province" id="viewProvince"
                                    placeholder="Province">
                                <label for="viewProvince">Province</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Are you a member of any indigenous group?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="indigenous_member" id="viewIndigenousYes"
                                value="Yes">
                            <label class="form-check-label" for="viewIndigenousYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="indigenous_member" id="viewIndigenousNo"
                                value="No">
                            <label class="form-check-label" for="viewIndigenousNo">No</label>
                        </div>
                        <input type="text" class="form-control mt-2" name="indigenous_specify"
                            id="viewIndigenousSpecify" placeholder="If yes please specify">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Are you a person with disability?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pwd" id="viewPwdYes" value="Yes">
                            <label class="form-check-label" for="viewPwdYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="pwd" id="viewPwdNo" value="No">
                            <label class="form-check-label" for="viewPwdNo">No</label>
                        </div>
                        <input type="text" class="form-control mt-2" name="pwd_specify" id="viewPwdSpecify"
                            placeholder="If yes please specify">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Are you a solo parent?</label><br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="solo_parent" id="viewSoloParentYes"
                                value="Yes">
                            <label class="form-check-label" for="viewSoloParentYes">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="solo_parent" id="viewSoloParentNo"
                                value="No">
                            <label class="form-check-label" for="viewSoloParentNo">No</label>
                        </div>
                        <input type="text" class="form-control mt-2" name="solo_specify" id="viewSoloParentSpecify"
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
                                <td><input type="text" class="form-control" name="ref_name_1" id="viewRefName1"></td>
                                <td><input type="text" class="form-control" name="ref_address_1" id="viewRefAddress1">
                                </td>
                                <td><input type="text" class="form-control" name="ref_tel_1" id="viewRefTel1"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="ref_name_2" id="viewRefName2"></td>
                                <td><input type="text" class="form-control" name="ref_address_2" id="viewRefAddress2">
                                </td>
                                <td><input type="text" class="form-control" name="ref_tel_2" id="viewRefTel2"></td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" name="ref_name_3" id="viewRefName3"></td>
                                <td><input type="text" class="form-control" name="ref_address_3" id="viewRefAddress3">
                                </td>
                                <td><input type="text" class="form-control" name="ref_tel_3" id="viewRefTel3"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">ID Picture</label>
                        <img id="idPicturePreview" src="" alt="ID Preview" class="img-fluid mt-2"
                            style="max-height: 200px;">
                    </div>
                </div>

                <h6 class="mt-4">PLEASE INDICATE ID Number and Date of Issuance</h6>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Government Issued ID</label>
                        <input type="text" class="form-control" name="gov_id" id="viewGovId">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">ID/License/Passport No.</label>
                        <input type="text" class="form-control" name="gov_id_no" id="viewGovIdNo">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Date/Place of Issuance</label>
                        <input type="text" class="form-control" name="gov_id_date_place" id="viewGovIdDatePlace">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label class="form-label">Signature (Sign inside the box)</label>
                        <input type="text" class="form-control" name="signature" id="viewSignature">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Date Accomplished</label>
                        <input type="text" class="form-control" name="date_accomplished" id="viewDateAccomplished">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Right Thumbmark</label>
                        <input type="text" class="form-control" name="right_thumbmark" id="viewRightThumbmark">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">SUBSCRIBED AND SWORN to before me this, <input type="text"
                            name="affiant_date" id="viewAffiantDate" class="form-control d-inline w-auto"
                            style="display:inline-block; width:200px;">, affiant exhibiting his/her validly issued
                        government ID as indicated above.</label>
                </div>
                <div class="mb-3">
                    <label class="form-label">Person Administering Oath</label>
                    <input type="text" class="form-control" name="administering_oath" id="viewAdministeringOath">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
            </div>
        </div>
    </div>
</div>