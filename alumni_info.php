<?php
// Include the database connection file
include('connection.php');

// Fetch alumni information from the database
$sql = "SELECT name, faculty, job_title, company_name, job_place, email, phone, address, image FROM alumni_info";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: white;
            background-color: #004080;
            padding: 17px;
            border-radius: 4px;
        }

        .add-info-button {
            display: block;
            width: 200px;
            margin: 10px auto;
            padding: 10px;
            text-align: center;
            background-color: #007BFF;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .alumni-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .alumni-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px; /* Adjusted padding for better layout */
            width: 23%;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: white;
        }

        .alumni-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

        .alumni-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        /* Sliding Text Styles */
        .sliding-text {
            position: relative;
            overflow: hidden;
            white-space: nowrap;
            box-sizing: border-box;
            height: 30px; /* Adjust height based on text */
            background-color: #f1f1f1; 
           
            color: brown;
            font-size: 20px;
            line-height: 30px; /* Align text vertically */
        }

        .sliding-text span {
            display: inline-block;
            padding-left: 100%; /* Initial position off-screen */
            animation: slide 10s linear infinite; /* Adjust duration as needed */
        }

        @keyframes slide {
            0% { transform: translateX(0); }
            100% { transform: translateX(-100%); } /* Slide completely out */
        }

        @media (max-width: 768px) {
            .alumni-card {
                width: 48%;
            }
        }

        @media (max-width: 480px) {
            .alumni-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Alumni Information</h1>
        <a href="alumni_info_form.php" class="add-info-button">Add Your Info</a>

        <!-- Sliding Text Section -->
        <div class="sliding-text">
            <span>Welcome to  join Us </span>
        </div>

        <div class="alumni-container">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='alumni-card'>";
                    echo "<img src='" . $row['image'] . "' alt='Alumni Photo'>";
                    echo "<h3>" . $row['name'] . "</h3>";
                    echo "<p>Faculty: " . $row['faculty'] . "</p>";
                    echo "<p>Job Title: " . $row['job_title'] . "</p>"; // Fixed label
                    echo "<p>Company: " . $row['company_name'] . "</p>";
                    echo "<p>Job Place: " . $row['job_place'] . "</p>";
                    echo "<p>Phone: " . $row['phone'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No alumni found.</p>";
            }
            include('footer.php');
            ?>
        </div>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
