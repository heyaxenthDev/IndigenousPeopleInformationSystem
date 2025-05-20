<?php
include '../database/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $last_name = $_POST['last_name'] ?? '';
    $first_name = $_POST['first_name'] ?? '';
    $middle_name = $_POST['middle_name'] ?? '';
    $suffix = $_POST['suffix'] ?? '';
    $gender = $_POST['gender'] ?? '';
    $age = $_POST['age'] ?? '';
    $status = $_POST['status'] ?? '';
    $barangay = $_POST['barangay'] ?? '';
    $contact_no = $_POST['contact_no'] ?? '';

    $stmt = $conn->prepare("INSERT INTO registered_ip (last_name, first_name, middle_name, suffix, gender, age, status, barangay, contact_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssiss", $last_name, $first_name, $middle_name, $suffix, $gender, $age, $status, $barangay, $contact_no);

    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'IP Registered successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Database error: ' . $stmt->error]);
    }
    $stmt->close();
    $conn->close();
    exit;
}
?>