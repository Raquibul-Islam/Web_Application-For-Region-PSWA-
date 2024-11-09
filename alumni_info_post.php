<?php
// Include the database connection file
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $name = $_POST['name'];
    $faculty = $_POST['faculty'];
    $job_title = $_POST['job_title'];
    $company_name = $_POST['company_name'];
    $job_place = $_POST['job_place'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $birth_date = $_POST['birth_date'];
    $marital_status = $_POST['marital_status'];
    $upazela = $_POST['upazela'];
    $session = $_POST['session'];
    $address = $_POST['address'];
    
    // Handle file upload
    $target_dir = "Photos/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size (5MB limit)
    if ($_FILES["fileToUpload"]["size"] > 5000000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, ['jpg', 'jpeg', 'png', 'gif'])) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        // Attempt to upload the file
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            // Insert into the database
            $sql = "INSERT INTO alumni_info (name, faculty, job_title, company_name, job_place, email, phone, address, image, gender, birth_date, marital_status, upazela, session)
            VALUES ('$name', '$faculty', '$job_title', '$company_name', '$job_place', '$email', '$phone', '$address', '$target_file', '$gender', '$birth_date', '$marital_status', '$upazela', '$session')";

            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully.";
                header("Location: alumni_info.php");
                exit();
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}

// Close the database connection
$conn->close();
?>
