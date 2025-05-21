<?php
session_start();
include '../database/conn.php';

// Helper for file upload
function upload_id_picture($file) {
    $target_dir = "../uploads/id_pictures/";
    if (!is_dir($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $filename = uniqid() . "_" . basename($file["name"]);
    $target_file = $target_dir . $filename;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowed = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($imageFileType, $allowed)) return null;
    if (move_uploaded_file($file["tmp_name"], $target_file)) {
        return $filename;
    }
    return null;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect POST data
    $indigenous_member = $_POST['indigenous_member'] ?? '';
    $indigenous_specify = $_POST['indigenous_specify'] ?? '';
    $pwd = $_POST['pwd'] ?? '';
    $pwd_specify = $_POST['pwd_specify'] ?? '';
    $solo_parent = $_POST['solo_parent'] ?? '';
    $solo_specify = $_POST['solo_specify'] ?? '';
    $ref_name_1 = $_POST['ref_name_1'] ?? '';
    $ref_address_1 = $_POST['ref_address_1'] ?? '';
    $ref_tel_1 = $_POST['ref_tel_1'] ?? '';
    $ref_name_2 = $_POST['ref_name_2'] ?? '';
    $ref_address_2 = $_POST['ref_address_2'] ?? '';
    $ref_tel_2 = $_POST['ref_tel_2'] ?? '';
    $ref_name_3 = $_POST['ref_name_3'] ?? '';
    $ref_address_3 = $_POST['ref_address_3'] ?? '';
    $ref_tel_3 = $_POST['ref_tel_3'] ?? '';
    $gov_id = $_POST['gov_id'] ?? '';
    $gov_id_no = $_POST['gov_id_no'] ?? '';
    $gov_id_date_place = $_POST['gov_id_date_place'] ?? '';
    $signature = $_POST['signature'] ?? '';
    $date_accomplished = $_POST['date_accomplished'] ?? null;
    $right_thumbmark = $_POST['right_thumbmark'] ?? '';
    $affiant_date = $_POST['affiant_date'] ?? '';
    $administering_oath = $_POST['administering_oath'] ?? '';

    // Handle file upload
    $id_picture = '';
    if (isset($_FILES['id_picture']) && $_FILES['id_picture']['error'] == 0) {
        $id_picture = upload_id_picture($_FILES['id_picture']);
        if (!$id_picture) {
            die('Invalid ID picture file type.');
        }
    }

    // Prepare and execute insert
    $stmt = $conn->prepare(
        "INSERT INTO job_application (
            indigenous_member, indigenous_specify, pwd, pwd_specify, solo_parent, solo_specify,
            ref_name_1, ref_address_1, ref_tel_1, ref_name_2, ref_address_2, ref_tel_2,
            ref_name_3, ref_address_3, ref_tel_3, id_picture, gov_id, gov_id_no, gov_id_date_place,
            signature, date_accomplished, right_thumbmark, affiant_date, administering_oath
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)"
    );
    $stmt->bind_param(
        "ssssssssssssssssssssssss",
        $indigenous_member, $indigenous_specify, $pwd, $pwd_specify, $solo_parent, $solo_specify,
        $ref_name_1, $ref_address_1, $ref_tel_1,
        $ref_name_2, $ref_address_2, $ref_tel_2,
        $ref_name_3, $ref_address_3, $ref_tel_3,
        $id_picture, $gov_id, $gov_id_no, $gov_id_date_place,
        $signature, $date_accomplished, $right_thumbmark, $affiant_date, $administering_oath
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
        $_SESSION['status_text'] = "Error submitting application";
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