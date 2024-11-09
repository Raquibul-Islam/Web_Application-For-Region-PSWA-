<?php
// Include the database connection file
include('connection.php');

// Fetch student information from the database
$sql = "SELECT name, faculty, session, upazela, image FROM student_info";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Info</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px; /* Set max width */
            margin: 0 auto; /* Center the container */
            padding: 20px;
            background-color: white; /* Background for the main container */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        h1 {
            text-align: center;
            color: white; /* Header text color */
            background-color: #004080; /* Header background color */
            padding: 15px; /* Padding for the header */
            border-radius: 4px; /* Rounded corners for the header */
            margin-bottom: 10px; /* Reduce gap between header and button */
        }

        .add-info-button {
            display: block;
            width: 200px; /* Width of the button */
            margin: 10px auto; /* Center the button */
            padding: 10px; /* Padding for the button */
            text-align: center;
            background-color: #007BFF; /* Button background color */
            color: white; /* Button text color */
            text-decoration: none; /* Remove underline */
            border-radius: 5px; /* Rounded corners */
            font-size: 16px; /* Font size */
            transition: background-color 0.3s; /* Smooth transition */
        }

        .add-info-button:hover {
            background-color: #0056b3; /* Darker shade on hover */
        }

        /* Sliding text container */
        .sliding-text-container {
            width: 100%;
            overflow: hidden; /* Hide overflowing text */
            position: relative;
            height: 400px;
            background-color: #f1f1f1; /* Light gray background for the sliding text area */
            border-radius: 5px; /* Rounded corners */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Sliding text */
        .sliding-text {
            font-size: 16px;
            color: brown;
            
            position: absolute;
            animation: slideText 15s linear infinite;
            white-space: nowrap;
        }

        /* Keyframes for sliding text */
        @keyframes slideText {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .student-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .student-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 37px;
            width: 23%;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: white;
        }

        .student-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

        .student-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .student-card p {
            font-size: 14px;
            color: #555;
        }

        /* Mobile responsive styles */
        @media (max-width: 768px) {
            .student-card {
                width: 48%; /* Two cards per row on small screens */
            }
        }

        @media (max-width: 480px) {
            .student-card {
                width: 100%; /* One card per row on extra small screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>PSWA Blog</h1>
        
        <!-- Sliding text container -->
        <div class="sliding-text-container">
            <p class="sliding-text">This Feature is coming ...</p>
        </div>

        <div class="student-container">
        <?php
            include('footer.php'); // Assuming footer.php includes the footer content
            ?>
        </div>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
