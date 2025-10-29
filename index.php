
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP + HTML Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        form {
            margin-bottom: 20px;
        }
        input[type=text], input[type=email] {
            padding: 8px;
            width: 250px;
        }
        input[type=submit] {
            padding: 8px 16px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h1>Welcome to My PHP + HTML Page</h1>

<form method="POST">
    <label>Your Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Your Email:</label><br>
    <input type="email" name="email" required><br><br>

    <input type="submit" value="Submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);

    echo "<h2>Form Submitted!</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
}
?>

</body>
</html>
