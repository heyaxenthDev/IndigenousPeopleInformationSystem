<?php 
session_start();
include '../database/conn.php';

if (isset($_POST['signup']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $termsAndConditions = $_POST['termsAndConditions'];

    if ($password != $confirm_password) {
        $_SESSION['status'] = "Error";
        $_SESSION['status_text'] = "Passwords do not match.";
        $_SESSION['status_code'] = "error";
        $_SESSION['status_btn'] = "Back";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }

    if ($termsAndConditions != 'on') {
        $_SESSION['status'] = "Error";
        $_SESSION['status_text'] = "You must agree to the terms and conditions";
        $_SESSION['status_code'] = "error";
        $_SESSION['status_btn'] = "Back";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }

    $hash_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO admin (firstname, lastname, email, phone, password) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssss', $firstname, $lastname, $email, $phone, $hash_password);
    if ($stmt->execute()) {
        $_SESSION['status'] = "Success";
        $_SESSION['status_text'] = "Account created successfully";
        $_SESSION['status_code'] = "success";
        $_SESSION['status_btn'] = "Back";

        header('location: ../auth/sign-in.php');
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

}

if (isset($_POST['signin']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['admin_auth'] = true;
            $_SESSION['status'] = "Success";
            $_SESSION['status_text'] = "Login successful";
            $_SESSION['status_code'] = "success";
            $_SESSION['status_btn'] = "Back";

            header('location: ../admin/dashboard.php');
            exit;
        } else {
            $_SESSION['status'] = "Error";
            $_SESSION['status_text'] = "Invalid password";
            $_SESSION['status_code'] = "error";
            $_SESSION['status_btn'] = "Back";
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit;
        }
    } else {
        $_SESSION['status'] = "Error";
        $_SESSION['status_text'] = "Invalid email";
        $_SESSION['status_code'] = "error";
        $_SESSION['status_btn'] = "Back";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }
    $stmt->close();
    $conn->close();
}

if (isset($_POST['userSignin']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['client_auth'] = true;
            $_SESSION['status'] = "Success";
            $_SESSION['status_text'] = "Login successful";
            $_SESSION['status_code'] = "success";
            $_SESSION['status_btn'] = "Back";

            header('location: ../client/dashboard.php');
            exit;
        } else {
            $_SESSION['status'] = "Error";
            $_SESSION['status_text'] = "Invalid password";
            $_SESSION['status_code'] = "error";
            $_SESSION['status_btn'] = "Back";
            header("Location: {$_SERVER['HTTP_REFERER']}");
            exit;
        }
    } else {
        $_SESSION['status'] = "Error";
        $_SESSION['status_text'] = "Invalid email";
        $_SESSION['status_code'] = "error";
        $_SESSION['status_btn'] = "Back";
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit;
    }
    $stmt->close();
    $conn->close();
}
            
?>