<?php
include "../database/conn.php";

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    
    // Query to fetch youth details
    $sql = "SELECT * FROM `registered_ip` WHERE id = ?";
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
            'suffix' => $data['suffix'],
            'gender' => $data['gender'],
            'age' => $data['age'],
            'status' => $data['status'],
            'barangay' => $data['barangay'],
            'contact_no' => $data['contact_no'],
            'email' => $data['email'],
            'created_at' => $data['created_at']
        );
        
        // Send JSON response
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        // No data found
        header('HTTP/1.1 404 Not Found');
        echo json_encode(array('error' => 'IP record not found'));
    }
} else {
    // No ID provided
    header('HTTP/1.1 400 Bad Request');
    echo json_encode(array('error' => 'No ID provided'));
}

$stmt->close();
$conn->close();
?>