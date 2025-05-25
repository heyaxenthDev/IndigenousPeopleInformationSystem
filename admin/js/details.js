document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".view-data").forEach((button) => {
    button.addEventListener("click", () => {
      const ipId = button.getAttribute("data-view-id");

      fetch(`get_ip_details.php?id=${ipId}`)
        .then((response) => response.json())
        .then((data) => {
          console.log(data);
          // Set basic information
          //   document.getElementById("viewId").value = data.id || "";
          document.getElementById("viewLastname").value = data.last_name || "";
          document.getElementById("viewFirstname").value =
            data.first_name || "";
          document.getElementById("viewMiddlename").value =
            data.middle_name || "";
          document.getElementById("viewSuffix").value = data.suffix || "";
          document.getElementById("viewGender").value = data.gender || "";
          document.getElementById("viewBarangay").value = data.barangay || "";
          document.getElementById("viewAge").value = data.age || "";
          document.getElementById("viewCivilStatus").value = data.status || "";
          document.getElementById("viewContact").value = data.contact_no || "";
          document.getElementById("viewEmail").value = data.email || "";

          // Show the modal using getOrCreateInstance for accessibility
          const viewModal = document.getElementById("detailsModal");
          const modalInstance = bootstrap.Modal.getOrCreateInstance(viewModal);
          modalInstance.show();
        })
        .catch((error) => console.error("Error fetching details:", error));
    });
  });
});
