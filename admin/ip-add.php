<?php
session_start();
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
    $email = $_POST['email'] ?? '';

    // Insert into registered_ip
    $stmt = $conn->prepare("INSERT INTO registered_ip (last_name, first_name, middle_name, suffix, gender, age, status, barangay, contact_no, email) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssisss", $last_name, $first_name, $middle_name, $suffix, $gender, $age, $status, $barangay, $contact_no, $email);

    if ($stmt->execute()) {
        // Get last inserted ID
        $ip_id = $stmt->insert_id;

        // Auto-generate password

        // Convert last name to lowercase and replace spaces with underscores
        $clean_lastname = strtolower(str_replace(' ', '_', $last_name));
        $default_password = $clean_lastname . '123';
        $hashed_password = password_hash($default_password, PASSWORD_DEFAULT);
        $role = 'user';


        // Insert into users table
        $user_stmt = $conn->prepare("INSERT INTO users (ip_id, email, password, role) VALUES (?, ?, ?, ?)");
        $user_stmt->bind_param("isss", $ip_id, $email, $hashed_password, $role);

        if ($user_stmt->execute()) {

            $_SESSION['status'] = "Success";
            $_SESSION['status_text'] = "IP Registered and user account created successfully!";
            $_SESSION['status_code'] = "success";
            $_SESSION['status_btn'] = "Back";
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit;
        } else {
            $_SESSION['status'] = "Error";
            $_SESSION['status_text'] = "User creation failed: " . $user_stmt->error;
            $_SESSION['status_code'] = "error";
            $_SESSION['status_btn'] = "Back";
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit;
        }
        $user_stmt->close();
    } else {
        $_SESSION['status'] = "Error";
        $_SESSION['status_text'] = "Database error: " . $stmt->error;
        $_SESSION['status_code'] = "error";
        $_SESSION['status_btn'] = "Back";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }

    $stmt->close();
    $conn->close();
    exit;
}
?>