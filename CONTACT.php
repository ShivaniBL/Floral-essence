<!DOCTYPE html>
<html lang="en">
<head>
    <center>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Your Floral Shop</title>
  <style>
    body {
        background-image:url('kon3.jpg');
        background-size:cover;
        background-position:center;
        background-repeat:no-repeat;
        margin:0;
        padding:0;
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    form {
      max-width: 400px;
      margin: auto;
    }
    label {
      display: block;
      margin-bottom: 8px;
    }
    input, textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 16px;
      box-sizing: border-box;
    }
    button {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

  <h1>Contact Us</h1>

  <form action="CONTACT.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="message">Message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button type="submit">Submit</button>
  </form>
</center>

</body>
</html>
<footer>
        <p>Contact us for more information:
        <a href="mailto:floralessence@gmail.com">floralessence@gmail.com</a></p>
        <br>
        <button type="submit"><a href="Home.php">BACK</a></button>
        
    </footer>
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
    $Message= $_POST["Message"];
    header("Location:Home.php");


    $sql = "INSERT INTO contact(Name,Email,Message) VALUES (?, ?,?)";
    $stmt = $conn->prepare($sql);

    if ($stmt)
    {
    
    $stmt->bind_param("sss",$Name,$Email,$Message);

    
    if ($stmt->execute()) {
        echo "Contacted successfully.";
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