<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Information Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            max-width: 1050px;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: white;
            margin-bottom: 20px;
            font-size: 28px;
            background-color: #004080;
            padding: 30px;
            border-radius: 5px;
        }

        label {
            display: block;
            margin: 15px 0 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        textarea,
        select,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #28a745;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        @media (max-width: 600px) {
            body {
                padding: 10px;
            }

            .container {
                padding: 15px;
            }

            h2 {
                font-size: 24px;
                padding: 20px;
            }

            input[type="submit"] {
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Alumni Information Form</h2>

        <form action="alumni_info_post.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="faculty">Faculty:</label>
            <input type="text" id="faculty" name="faculty" required>

            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" required>

            <label for="company_name">Company Name:</label>
            <input type="text" id="company_name" name="company_name" required>

            <label for="job_place">Job Place:</label>
            <input type="text" id="job_place" name="job_place" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required> Male
            <input type="radio" id="female" name="gender" value="female" required> Female

            <label for="birth_date">Birth Date:</label>
            <input type="date" id="birth_date" name="birth_date" required>

            <label for="marital_status">Marital Status:</label>
            <select id="marital_status" name="marital_status" required>
                <option value="single">Single</option>
                <option value="married">Married</option>
            </select>

            <label for="upazela">Upazela:</label>
            <input type="text" id="upazela" name="upazela" required>

            <label for="session">Session:</label>
            <input type="text" id="session" name="session" required>

            <label for="fileToUpload">Upload Image:</label>
            <input type="file" name="fileToUpload" id="fileToUpload" required>

            <label for="address">Address:</label>
            <textarea id="address" name="address" required></textarea>

            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
