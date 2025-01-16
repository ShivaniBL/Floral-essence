<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flower Essence Registration</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="container">
        <form action="register.php" method="post">
            <h2>Register for Flower Essence</h2>
            <label for="username">Username:</label>
            <input type="text" name="username" required>
            
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="address">Address:</label>
            <input type="text" name="address" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Register</button>
            <br>
            <a href="login.php">login</a>
        </form>
    </div>

</body>
</html>





<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $host = "localhost"; // MySQL server host
    $username = "root"; // MySQL username
    $password = ""; // MySQL password
    $database = "floral"; // Database name

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $Username= $_POST["username"];
    $Email= $_POST["email"];
    $Address= $_POST["address"];
    $Password= $_POST["password"];


    $sql = "INSERT INTO register(Username,Email,Address,Password) VALUES (?, ?,?,?)";
    $stmt = $conn->prepare($sql);

    if ($stmt)
    {
    
    $stmt->bind_param("ssss",$Username,$Email,$Address,$Password);

    
    if ($stmt->execute()) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
}
?>