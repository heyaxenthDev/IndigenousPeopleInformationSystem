<?php
session_start();
include '../database/conn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize POST data
    $last_name = $_POST['last_name'] ?? '';
    $first_name = $_POST['first_name'] ?? '';
    $middle_name = $_POST['middle_name'] ?? '';
    $maiden_name = $_POST['maiden_name'] ?? '';
    $date_of_birth = $_POST['date_of_birth'] ?? null;
    $permanent_address = $_POST['permanent_address'] ?? '';
    $zip_code = $_POST['zip_code'] ?? '';
    $place_of_birth = $_POST['place_of_birth'] ?? '';
    $street = $_POST['street'] ?? '';
    $barangay = $_POST['barangay'] ?? '';
    $municipality = $_POST['municipality'] ?? '';
    $province = $_POST['province'] ?? '';
    $school_name = $_POST['school_name'] ?? '';
    $school_number = $_POST['school_number'] ?? '';
    $school_address = $_POST['school_address'] ?? '';
    $sex = $_POST['sex'] ?? '';
    $citizenship = $_POST['citizenship'] ?? '';
    $module_number = $_POST['module_number'] ?? '';
    $school_type = $_POST['school_type'] ?? '';
    $year_level = $_POST['year_level'] ?? '';
    $course = $_POST['course'] ?? '';
    $tribal_membership = $_POST['tribal_membership'] ?? '';
    $email = $_POST['email'] ?? '';
    $disability = $_POST['disability'] ?? '';
    $father_status = $_POST['father_status'] ?? '';
    $mother_status = $_POST['mother_status'] ?? '';
    $address = $_POST['address'] ?? '';
    $total_gross_income = $_POST['total_gross_income'] ?? 0;
    $siblings = $_POST['siblings'] ?? 0;
    $occupation = $_POST['occupation'] ?? '';
    $other_assistance = $_POST['other_assistance'] ?? '';
    $assistance_specify = $_POST['assistance_specify'] ?? '';
    $signature = $_POST['signature'] ?? '';
    $date_accomplished = $_POST['date_accomplished'] ?? null;

    $stmt = $conn->prepare(
        "INSERT INTO scholarship (
            last_name, first_name, middle_name, maiden_name, date_of_birth, permanent_address, zip_code, place_of_birth,
            street, barangay, municipality, province, school_name, school_number, school_address, sex, citizenship,
            module_number, school_type, year_level, course, tribal_membership, email, disability, father_status,
            mother_status, address, total_gross_income, siblings, occupation, other_assistance, assistance_specify,
            signature, date_accomplished
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param(
        "ssssssssssssssssssssssssssssssssss",
        $last_name, $first_name, $middle_name, $maiden_name, $date_of_birth, $permanent_address, $zip_code, $place_of_birth,
        $street, $barangay, $municipality, $province, $school_name, $school_number, $school_address, $sex, $citizenship,
        $module_number, $school_type, $year_level, $course, $tribal_membership, $email, $disability, $father_status,
        $mother_status, $address, $total_gross_income, $siblings, $occupation, $other_assistance, $assistance_specify,
        $signature, $date_accomplished
    );
        
    if ($stmt->execute()) {
        $_SESSION['status'] = "Success";
        $_SESSION['status_text'] = "Application submitted successfully";
        $_SESSION['status_code'] = "success";
        $_SESSION['status_btn'] = "Back";
        header("Location: {$_SERVER['HTTP_REFERER']}");

        exit;
    } else {
        $_SESSION['status'] = "Error";
        $_SESSION['status_text'] = "Error creating account";
        $_SESSION['status_code'] = "error";
        $_SESSION['status_btn'] = "Back";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }
    $stmt->close();
    $conn->close();
} else {
    $_SESSION['status'] = "Error";
    $_SESSION['status_text'] = "Invalid request";
    $_SESSION['status_code'] = "error";
    $_SESSION['status_btn'] = "Back";
    header("Location: {$_SERVER['HTTP_REFERER']}");
    exit;
}
?>