<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Occasions Flowers</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #a6a4a400;
        }

        header {
            background-color: #0e0e0e;
            color: white;
            text-align: center;
            padding: 1em;
        }

        section {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            padding: 2em;
        }

        .occasion-card {
            width: 300px;
            margin: 1em;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .occasion-card:hover {
            transform: scale(1.05);
        }

        .occasion-img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .occasion-info {
            padding: 1em;
        }

        footer {
            background-color: #333;
            color: rgba(223, 28, 197, 0.664);
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <h1>Special Occasions Flowers</h1>
        <p>Beautiful flowers for every moment</p>
    </header>

    <section>
        <div class="occasion-card">
            <img src="https://th.bing.com/th/id/OIP.jpRx-pr1-wwiXdVob_8vVwAAAA?pid=ImgDet&w=400&h=400&rs=1" alt="Birthday Flowers" class="occasion-img">
            <div class="occasion-info" class='logo'>
                <h2>Birthday</h2>
                <p>Express your love with vibrant birthday flowers.</p>
                <a href="Birthday.php">Shop now</a>
            </div>
        </div>

        <div class="occasion-card">
            <img src="https://www.dialabouquet.in/wp-content/uploads/2020/07/25th-Anniversary-Arrangement.jpg" alt="Anniversary Flowers" class="occasion-img">
            <div class="occasion-info">
                <h2>Anniversary</h2>
                <p>Celebrate milestones with elegant anniversary bouquets.</p>
                <a href="Anniversary.php">Shop Now</a>
            </div>
        </div>

        <div class="occasion-card">
            <img src="https://th.bing.com/th/id/OIP.pYokfrMwqDmaSuo5enkzjQHaEf?pid=ImgDet&rs=1" alt="Birthday Flowers" class="occasion-img">
            <div class="occasion-info">
                <h2>Marriage</h2>
                <p>Decorate your love  life with Beautiful flowers.</p>
                <a href="Marriage.php">Shop Now</a>
            </div>
        </div>

        <div class="occasion-card">
            <img src="https://th.bing.com/th/id/R.7a141b4400f40351058d6f032639e378?rik=fmZp0cF78Lk4yg&riu=http%3a%2f%2fwww.flowershopossett.co.uk%2fuploads%2f8%2f8%2f7%2f1%2f8871785%2fs694703652631608815_p20_i1_w1512.jpeg&ehk=j3hzbYd5%2fPqAbVyEYB8uo9uB2%2fCZZ%2fZICnJwpvJ6rtc%3d&risl=&pid=ImgRaw&r=0" alt="Birthday Flowers" class="occasion-img">
            <div class="occasion-info">
                <h2>Just Because Flowers</h2>
                <p>Surprise someone special with a spontaneous gift.</p>
                <a href="JustBecauseFlowers.php">Shop Now</a>
            </div>
        </div>

    </section>

    <footer>
        <p>Contact us for more information:
        <a href="mailto:floralessence@gmail.com">floralessence@gmail.com</a></p>
        <br>
        <button type="submit"><a href="Home.php">BACK</a></button>
        
    </footer>

</body>
</html>