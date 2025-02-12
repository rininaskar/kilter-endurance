<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yoga Trainer Portfolio Submission</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            width: 50%;
            margin: 0 auto;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        .go-back-button {
            background-color: #f44336;
        }

        .go-back-button:hover {
            background-color: #e31b0c;
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const urlParams = new URLSearchParams(window.location.search);
            const name = urlParams.get('name');
            const email = urlParams.get('email');
            const phone = urlParams.get('phone');
            const experience = urlParams.get('experience');
            const description = urlParams.get('description');

            if (name) document.getElementById('name').value = name;
            if (email) document.getElementById('email').value = email;
            if (phone) document.getElementById('phone').value = phone;
            if (experience) document.getElementById('experience').value = experience;
            if (description) document.getElementById('description').value = description;
        });

        function goBackToHomepage() {
            window.location.href = 'Adashboard.php'; // Adjust the URL to your homepage
        }
    </script>
</head>
<body>
    <div class="container">
        <h1>Yoga Trainer Portfolio Submission</h1>
        <form action="submit_yoga_details.php" method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="experience">Experience (in years):</label>
            <input type="number" id="experience" name="experience" required>
            <label for="description">Brief Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>
            <label for="profile_image">Profile Image:</label>
            <input type="file" id="profile_image" name="profile" accept="image/*">
            <button type="submit" name="submit">Submit</button>
            <button type="button" class="go-back-button" onclick="goBackToHomepage()">Go Back To Homepage</button>
        </form>
    </div>
</body>
</html>
