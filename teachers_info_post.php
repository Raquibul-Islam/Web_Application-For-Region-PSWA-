<?php
// Include the database connection file
include('connection.php');

// Ensure the uploads directory exists
$target_dir = "Photos/";
if (!is_dir($target_dir)) {
    mkdir($target_dir, 0777, true); // Create directory if it does not exist
}

// Set the target file path for the uploaded image
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if the file is an image (optional validation step)
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check === false) {
    echo "File is not an image.";
    exit;
}

// Move the uploaded file to the target directory
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // Prepare the SQL statement to insert data into the teachers_info table
    $stmt = $conn->prepare("INSERT INTO teacher_info 
                            (name, faculty, designation, department_name, email, phone, address, image, gender, birth_date, marital_status, upazela, session) 
                            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssssssssss", $name, $faculty, $designation, $department_name, $email, $phone, $address, $image, $gender, $birth_date, $marital_status, $upazela, $session);

    // Get the POST data from the form
    $name = $_POST["name"];
    $faculty = $_POST["faculty"];
    $designation = $_POST["designation"];
    $department_name = $_POST["department_name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $image = $target_file; // File path of the uploaded image
    $gender = $_POST["gender"];
    $birth_date = $_POST["birth_date"];
    $marital_status = $_POST["marital_status"];
    $upazela = $_POST["upazela"];
    $session = $_POST["session"];

    // Execute the prepared statement
    if ($stmt->execute()) {
        // Redirect with success message
        header("Location: teachers_info.php?message=success");
        exit();
    } else {
        // Show error message on failure
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Sorry, there was an error uploading your file.";
}

// Close the database connection
$conn->close();
?>
