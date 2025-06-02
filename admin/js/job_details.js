document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".view-job-application").forEach((button) => {
    button.addEventListener("click", () => {
      const ipId = button.getAttribute("data-view-ja");

      fetch(`get_job_details.php?id=${ipId}`)
        .then((response) => response.json())
        .then((data) => {
          // console.log(data);
          // Set basic information
          //   document.getElementById("viewId").value = data.id || "";
          document.getElementById("viewLastname").value = data.lastname || "";
          document.getElementById("viewFirstname").value = data.firstname || "";
          document.getElementById("viewMiddlename").value =
            data.middlename || "";
          document.getElementById("viewMaidenname").value =
            data.maiden_name || "";
          document.getElementById("viewPermAddress").value =
            data.perm_address || "";
          document.getElementById("viewZipcode").value = data.zipCode || "";
          document.getElementById("viewPob").value = data.pob || "";
          document.getElementById("viewStreet").value = data.street || "";
          document.getElementById("viewBarangay").value = data.barangay || "";
          document.getElementById("viewMunicipality").value =
            data.municipality || "";
          document.getElementById("viewProvince").value = data.province || "";

          // Format birthdate
          if (data.dob) {
            const birthdate = new Date(data.dob);
            const options = {
              year: "numeric",
              month: "long",
              day: "numeric",
              timeZone: "Asia/Manila",
            };
            document.getElementById("viewDob").value =
              birthdate.toLocaleDateString("en-US", options);
          }

          data.indigenous_member == "Yes"
            ? (document.getElementById("viewIndigenousYes").checked = true)
            : (document.getElementById("viewIndigenousNo").checked = true);
          document.getElementById("viewIndigenousSpecify").value =
            data.indigenous_specify || "";

          data.pwd == "Yes"
            ? (document.getElementById("viewPwdYes").checked = true)
            : (document.getElementById("viewPwdNo").checked = true);
          document.getElementById("viewPwdSpecify").value =
            data.pwd_specify || "";

          data.solo_parent == "Yes"
            ? (document.getElementById("viewSoloParentYes").checked = true)
            : (document.getElementById("viewSoloParentNo").checked = true);
          document.getElementById("viewSoloParentSpecify").value =
            data.solo_specify || "";

          document.getElementById("viewRefName1").value = data.ref_name_1 || "";
          document.getElementById("viewRefAddress1").value =
            data.ref_address_1 || "";
          document.getElementById("viewRefTel1").value = data.ref_tel_1 || "";

          document.getElementById("viewRefName2").value = data.ref_name_2 || "";
          document.getElementById("viewRefAddress2").value =
            data.ref_address_2 || "";
          document.getElementById("viewRefTel2").value = data.ref_tel_2 || "";

          document.getElementById("viewRefName3").value = data.ref_name_3 || "";
          document.getElementById("viewRefAddress3").value =
            data.ref_address_3 || "";
          document.getElementById("viewRefTel3").value = data.ref_tel_3 || "";

          document.getElementById("idPicturePreview").src =
            ".././uploads/id_pictures/" + data.id_picture ||
            ".././uploads/user.png"; // optional default

          document.getElementById("viewGovId").value = data.gov_id || "";
          document.getElementById("viewGovIdNo").value = data.gov_id_no || "";
          document.getElementById("viewGovIdDatePlace").value =
            data.gov_id_date_place || "";
          document.getElementById("viewSignature").value = data.signature || "";
          // Format birthdate

          if (data.date_accomplished) {
            const birthdate = new Date(data.date_accomplished);
            const options = {
              year: "numeric",
              month: "long",
              day: "numeric",
              timeZone: "Asia/Manila",
            };
            document.getElementById("viewDateAccomplished").value =
              birthdate.toLocaleDateString("en-US", options);
          }

          document.getElementById("viewRightThumbmark").value =
            data.right_thumbmark || "";
          document.getElementById("viewAffiantDate").value =
            data.affiant_date || "";
          document.getElementById("viewAdministeringOath").value =
            data.administering_oath || "";

          // Show the modal using getOrCreateInstance for accessibility
          const viewModal = document.getElementById("jaViewModal");
          const modalInstance = bootstrap.Modal.getOrCreateInstance(viewModal);
          modalInstance.show();
        })
        .catch((error) => console.error("Error fetching details:", error));
    });
  });
});
