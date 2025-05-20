<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Indigenous People IS</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="../assets/css/core/libs.min.css" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="../assets/vendor/aos/dist/aos.css" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="../assets/css/hope-ui.min.css?v=2.0.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="../assets/css/custom.min.css?v=2.0.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="../assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="../assets/css/customizer.min.css" />

    <!-- RTL Css -->
    <link rel="stylesheet" href="../assets/css/rtl.min.css" />
    <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<?php 
    // Get session user details
    $id = $_SESSION['user_id'];

    $query = "SELECT * FROM `admin` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $user = substr($row['firstname'], 0, 1) . ". " . $row['lastname'];
            $fullname = $row['firstname'] . " " . $row['lastname'];
            $firstname = $row['firstname'];
            $email = $row['email'];
            // $email_verify_status = $row['email_verify'];
            $lastname = $row['lastname'];
            // $user_picture = $row['picture'];
            $dc = date("M d, Y", strtotime($row['created_at']));

        }
    }

?>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>
    </div>
    <!-- loader END -->