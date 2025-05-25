document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".view-btn").forEach((button) => {
    button.addEventListener("click", () => {
      const ipId = button.getAttribute("data-view-id");

      fetch(`get_scholar_details.php?id=${ipId}`)
        .then((response) => response.json())
        .then((data) => {
          // console.log(data);
          // Set basic information
          //   document.getElementById("viewId").value = data.id || "";
          document.getElementById("viewLastname").value = data.last_name || "";
          document.getElementById("viewFirstname").value =
            data.first_name || "";
          document.getElementById("viewMiddle_name").value =
            data.middle_name || "";
          document.getElementById("viewMaiden_name").value =
            data.maiden_name || "";
          document.getElementById("viewAddress").value = data.address || "";
          document.getElementById("viewSex").value = data.sex || "";

          // Format birthdate
          if (data.date_of_birth) {
            const birthdate = new Date(data.date_of_birth);
            const options = {
              year: "numeric",
              month: "long",
              day: "numeric",
              timeZone: "Asia/Manila",
            };
            document.getElementById("viewBirthdate").value =
              birthdate.toLocaleDateString("en-US", options);
          }

          document.getElementById("viewPermanent_address").value =
            data.permanent_address || "";
          document.getElementById("viewZip_code").value = data.zip_code || "";
          document.getElementById("viewPlace_of_birth").value =
            data.place_of_birth || "";
          document.getElementById("viewStreet").value = data.street || "";
          document.getElementById("viewBarangay").value = data.barangay || "";
          document.getElementById("viewMunicipality").value =
            data.municipality || "";
          document.getElementById("viewProvince").value = data.province || "";
          document.getElementById("viewSchool_name").value =
            data.school_name || "";
          document.getElementById("viewSchool_number").value =
            data.school_number || "";
          document.getElementById("viewSchool_address").value =
            data.school_address || "";
          document.getElementById("viewSex").value = data.sex || "";
          document.getElementById("viewCitizenship").value =
            data.citizenship || "";
          document.getElementById("viewModule_number").value =
            data.module_number || "";
          document.getElementById("viewSchool_type").value =
            data.school_type || "";
          document.getElementById("viewYear_level").value =
            data.year_level || "";
          document.getElementById("viewCourse").value = data.course || "";
          document.getElementById("viewTribal_membership").value =
            data.tribal_membership || "";
          document.getElementById("viewEmail").value = data.email || "";
          document.getElementById("viewDisability").value =
            data.disability || "";
          document.getElementById("viewFather_status").value =
            data.father_status || "";
          document.getElementById("viewMother_status").value =
            data.mother_status || "";
          document.getElementById("viewAddress").value = data.address || "";
          document.getElementById("viewTotal_gross_income").value =
            data.total_gross_income || "";
          document.getElementById("viewSiblings").value = data.siblings || "";
          document.getElementById("viewOccupation").value =
            data.occupation || "";

          data.other_assistance === "Yes"
            ? (document.getElementById("viewAssistanceYes").checked = true)
            : (document.getElementById("viewAssistanceNo").checked = true);

          console.log(data.other_assistance);

          document.getElementById("viewAssistance_specify").value =
            data.assistance_specify || "";

          document.getElementById("viewSignature").value = data.signature || "";
          document.getElementById("viewDate_accomplished").value =
            data.date_accomplished || "";

          // Show the modal using getOrCreateInstance for accessibility
          const viewModal = document.getElementById("scholarModal");
          const modalInstance = bootstrap.Modal.getOrCreateInstance(viewModal);
          modalInstance.show();
        })
        .catch((error) => console.error("Error fetching details:", error));
    });
  });
});
