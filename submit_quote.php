<?php
// Step 1: Connect to MySQL
$conn = new mysqli("localhost", "root", "", "jmtc_db");

// Step 2: Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// Step 3: Get data from POST request
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service_type = $_POST['service_type'];
$project_details = $_POST['project_details'];

// Step 4: Prepare query
$sql = "INSERT INTO quote_requests (full_name, email, phone, service_type, project_details) 
        VALUES (?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $full_name, $email, $phone, $service_type, $project_details);

// Step 5: Execute
if ($stmt->execute()) {
    echo "<script>alert('✅ Quote submitted successfully!'); window.location.href='quote.php';</script>";
} else {
    echo "❌ Error: " . $stmt->error;
}

// Step 6: Close
$stmt->close();
$conn->close();
?>
