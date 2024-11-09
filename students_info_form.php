<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0; /* Reset margin for body */
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh; /* Full height for vertical alignment */
        }

        .container {
            width: 100%;
            max-width: 1050px; /* Maximum width for the form container */
            padding: 20px;
            background-color: white; /* Background for the form */
            border-radius: 8px; /* Rounded corners */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }

        h2 {
            text-align: center;
            color: white; /* Header text color */
            margin-bottom: 20px;
            font-size: 28px;
            background-color: #004080; /* Header background color */
            padding: 30px; /* Increased padding for the header */
            border-radius: 5px; /* Rounded corners for the header */
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        textarea,
        select,
        input[type="file"] {
            width: 100%; /* Ensures uniform width for all inputs */
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box; /* Ensures padding doesn't break layout */
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #28a745; /* Submit button background color */
            color: white; /* Button text color */
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #218838; /* Darker shade on hover */
        }

        textarea {
            resize: vertical; /* Allow vertical resizing only */
            min-height: 80px; /* Minimum height for textarea */
        }

        /* Mobile responsive styles */
        @media (max-width: 600px) {
            body {
                padding: 10px; /* Reduced padding for body */
            }

            .container {
                padding: 15px; /* Less padding for mobile */
            }

            h2 {
                font-size: 24px; /* Adjust header size for mobile */
                padding: 20px; /* Less padding for header */
            }

            input[type="submit"] {
                padding: 15px; /* More padding for buttons on mobile */
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Student Information Form</h2>

        <!-- Student Information Form -->
        <form action="post_students_info.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="faculty">Faculty:</label>
            <input type="text" id="faculty" name="faculty" required>

            <label for="session">Session:</label>
            <input type="text" id="session" name="session" required>

            <label for="upazela">Upazela:</label>
            <input type="text" id="upazela" name="upazela" required>

            <label for="sex">Gender:</label>
            <input type="radio" id="male" name="sex" value="male" required> Male
            <input type="radio" id="female" name="sex" value="female" required> Female

            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date" required>

            <label for="marital_status">Marital Status:</label>
            <select id="marital_status" name="marital_status" required>
                <option value="single">Single</option>
                <option value="married">Married</option>
            </select>

            <label for="nid">National ID:</label>
            <input type="text" id="nid" name="nid" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>

            <label for="fileToUpload">Upload Image:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
