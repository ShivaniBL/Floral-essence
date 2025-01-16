<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Home.css">
    <title>FLORAL ESSENCE</title>
</head>
<body>
    <?php include('o8.php'); ?>

    <div class="container">
        <h1>Welcome to our Flower Shop</h1>
        <p>Explore our beautiful collection of flowers and make someone's day special!</p>
        <a href="OCCASION.php" class="btn">Shop Now</a>
    </div>

    <?php include('o9.php'); ?>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Your Floral Shop</title>
    
   
    <style>
       
        body {
            
            font-family: Arial, sans-serif;
        }

        .content {
            max-width: 800px;
            margin: 2em auto;
            padding: 1em;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }




    <div class="content">
        <!-- 
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #1f1e1c;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        section {
            max-width: 800px;
            margin: 2em auto;
            padding: 1em;
            background-color: #e0d7d7;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(14, 13, 13, 0.94);
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    

    <section><font color="black">
        <h2>About Us</h2>
        <p><Welcome to Your Floral Shop, where passion for flowers meets creativity. Our journey began with a simple idea: to spread joy through the beauty of flowers.</p>
        
        <p>At Your Floral Shop, we source the freshest blooms and handcraft stunning arrangements for every occasion. Whether it's a birthday, anniversary, or just to brighten someone's day, we have the perfect bouquet for you.</p>

     

        <p>Our team of experienced florists is dedicated to providing exceptional service, ensuring each arrangement is a work of art. We believe in the language of flowers, and we strive to help you express your emotions through our creations.</p>

        <p>Thank you for choosing Your Floral Shop. Let's celebrate life's moments together, one bloom at a time.</p>
    </font>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    

</body>
</html>

<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    







<!DOCTYPE html>
<html lang="en">
<head>
    <center>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Your Floral Shop</title>
  <style>
    body {
        
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
<font color="black">
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
</font>
</body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<footer>
        <p>Contact us for more information:
        <a href="mailto:floralessence@gmail.com">floralessence@gmail.com</a></p>
        
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



