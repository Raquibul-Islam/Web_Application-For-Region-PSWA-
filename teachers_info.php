<?php
// Include the database connection file
include('connection.php');

// Fetch teacher information from the database
$sql = "SELECT name, faculty, designation, department_name, email, phone, upazela, image FROM teacher_info";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teachers Info</title>
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
            padding: 16px;
            border-radius: 4px;
            margin-bottom: 10px;
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
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .add-info-button:hover {
            background-color: #0056b3;
        }

        .sliding-text-container {
            width: 100%;
            overflow: hidden;
            position: relative;
            height: 40px;
            background-color: #f1f1f1;
            border-radius: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .sliding-text {
            font-size: 16px;
            color: brown;
            position: absolute;
            animation: slideText 15s linear infinite;
            white-space: nowrap;
        }

        @keyframes slideText {
            0% {
                transform: translateX(100%);
            }
            100% {
                transform: translateX(-100%);
            }
        }

        .teacher-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
        }

        .teacher-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 35px;
            width: 25%;
            box-shadow: 2px 2px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
            background-color: white;
        }

        .teacher-card img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 8px;
        }

        .teacher-card h3 {
            font-size: 18px;
            margin: 10px 0;
        }

        .teacher-card p {
            font-size: 14px;
            color: #555;
        }

        @media (max-width: 768px) {
            .teacher-card {
                width: 48%;
            }
        }

        @media (max-width: 480px) {
            .teacher-card {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Teachers Info</h1>
        <a href="teachers_info_form.php" class="add-info-button">Add Teacher Info</a>
        
        <!-- Sliding text container -->
        <div class="sliding-text-container">
            <p class="sliding-text">If you are a teacher, please add your information by clicking the "Add Teacher Info" button</p>
        </div>

        <div class="teacher-container">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='teacher-card'>";
                    echo "<img src='" . $row['image'] . "' alt='Teacher Photo'>";
                    echo "<h3>" . $row['name'] . "</h3>";
                    echo "<p> " . $row['designation'] . "</p>";
                    echo "<p> " . $row['department_name'] . "</p>";
                    echo "<p>Phone: " . $row['phone'] . "</p>";
                    echo "<p>Upazela: " . $row['upazela'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "<p>No teachers found.</p>";
            }
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
