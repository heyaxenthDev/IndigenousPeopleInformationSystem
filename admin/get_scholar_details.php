<?php
include "../database/conn.php";

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    
    // Query to fetch youth details
    $sql = "SELECT * FROM `scholarship` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        
        // Format the data for JSON response
        $response = array(
            'id' => $data['id'],
            'last_name' => $data['last_name'],
            'first_name' => $data['first_name'],
            'middle_name' => $data['middle_name'],
            'maiden_name' => $data['maiden_name'],
            'date_of_birth' => $data['date_of_birth'],
            'permanent_address' => $data['permanent_address'],
            'zip_code' => $data['zip_code'],
            'place_of_birth' => $data['place_of_birth'],
            'street' => $data['street'],
            'barangay' => $data['barangay'],
            'municipality' => $data['municipality'],
            'province' => $data['province'],
            'school_name' => $data['school_name'],
            'school_number' => $data['school_number'],
            'school_address' => $data['school_address'],
            'sex' => $data['sex'],
            'citizenship' => $data['citizenship'],
            'module_number' => $data['module_number'],
            'school_type' => $data['school_type'],
            'year_level' => $data['year_level'],
            'course' => $data['course'],
            'tribal_membership' => $data['tribal_membership'],
            'email' => $data['email'],
            'disability' => $data['disability'],
            'father_status' => $data['father_status'],
            'mother_status' => $data['mother_status'],
            'address' => $data['address'],
            'total_gross_income' => $data['total_gross_income'],
            'siblings' => $data['siblings'],
            'occupation' => $data['occupation'],
            'other_assistance' => $data['other_assistance'],
            'assistance_specify' => $data['assistance_specify'],
            'signature' => $data['signature'],
            'date_accomplished' => $data['date_accomplished'],
            'created_at' => $data['created_at']
        );
        
        // Send JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // No data found
        header('HTTP/1.1 404 Not Found');
        echo json_encode(array('error' => 'Scholar record not found'));
    }
} else {
    // No ID provided
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(array('error' => 'No ID provided'));
}

$stmt->close();
$conn->close();
?>