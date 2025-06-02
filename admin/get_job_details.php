<?php
include "../database/conn.php";

if (isset($_GET['id'])) {
    $id = $conn->real_escape_string($_GET['id']);
    
    // Query to fetch youth details
    $sql = "SELECT * FROM `job_applications` WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        
        // Format the data for JSON response
        $response = array(
            'id' => $data['id'],
            'lastname' => $data['lastname'],
            'firstname' => $data['firstname'],
            'middlename' => $data['middlename'],
            'maiden_name' => $data['maiden_name'],
            'dob' => $data['dob'],
            'perm_address' => $data['perm_address'],
            'zipCode' => $data['zipCode'],
            'pob' => $data['pob'],
            'street' => $data['street'],
            'barangay' => $data['barangay'],
            'municipality' => $data['municipality'],
            'province' => $data['province'],
            'indigenous_member' => $data['indigenous_member'],
            'indigenous_specify' => $data['indigenous_specify'],
            'pwd' => $data['pwd'],
            'pwd_specify' => $data['pwd_specify'],
            'solo_parent' => $data['solo_parent'],
            'solo_specify' => $data['solo_specify'],
            'ref_name_1' => $data['ref_name_1'],
            'ref_address_1' => $data['ref_address_1'],
            'ref_tel_1' => $data['ref_tel_1'],
            'ref_name_2' => $data['ref_name_2'],
            'ref_address_2' => $data['ref_address_2'],
            'ref_tel_2' => $data['ref_tel_2'],
            'ref_name_3' => $data['ref_name_3'],
            'ref_address_3' => $data['ref_address_3'],
            'ref_tel_3' => $data['ref_tel_3'],
            'id_picture' => $data['id_picture'],
            'gov_id' => $data['gov_id'],
            'gov_id_no' => $data['gov_id_no'],
            'gov_id_date_place' => $data['gov_id_date_place'],
            'signature' => $data['signature'],
            'date_accomplished' => $data['date_accomplished'],
            'right_thumbmark' => $data['right_thumbmark'],
            'affiant_date' => $data['affiant_date'],
            'administering_oath' => $data['administering_oath'],
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