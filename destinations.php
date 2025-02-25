<?php
session_start();

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        header {
            background: #333;
            color: white;
            padding: 20px;
            text-align: center;
        }

        section {
            padding: 20px;
        }

        .destinations {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .destination {
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .destination:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .destination img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .destination h3 {
            margin: 10px;
        }

        .destination a {
            display: block;
            margin: 10px;
            padding: 10px;
            text-align: center;
            background: #f4a261;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .destination a:hover {
            background: #e76f51;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #f4a261;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s;
        }

        .back-button:hover {
            background: #e76f51;
        }
    </style>
</head>
<body>
    <header>
        <h1>Explore Our Destinations</h1>
    </header>

    <section>
        <div class="destinations">
            <!-- Accessible without login -->
            <div class="destination">
                <img src="https://media.timeout.com/images/106181719/750/562/image.jpg" alt="Paris, France">
                <h3>Paris, France</h3>
                <a href="paris.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://static.independent.co.uk/s3fs-public/thumbnails/image/2018/04/10/13/tokyo-main.jpg?width=1200&height=900&fit=crop" alt="Tokyo, Japan">
                <h3>Tokyo, Japan</h3>
                <a href="tokyo.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://d1otjdv2bf0507.cloudfront.net/images/Article_Images/ImageForArticle_3120(2).jpg" alt="New York City, USA">
                <h3>New York City, USA</h3>
                <a href="new-york.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://media.istockphoto.com/id/1145450965/photo/santorini-island-greece.jpg?s=612x612&w=0&k=20&c=AY_kxRrkTjbDLhqpotxgW8CZp4ovEIM1tRdTrvXKcAM=" alt="Greece">
                <h3>Greece</h3>
                <a href="greece.html">Learn More</a>
            </div>

            <!-- Requires login -->
            <?php if ($isLoggedIn): ?>
            <div class="destination">
                <img src="https://i.natgeofe.com/n/04505c35-858b-4e95-a1a7-d72e5418b7fc/steep-karst-cliffs-of-el-nido-in-palawan_16x9.jpg" alt="Philippines">
                <h3>Philippines</h3>
                <a href="philippines.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://cdn1.internationalsos.com/-/jssmedia/images/locations/location-saudi-desktop/al-khobar-water-tower-at-night-dammam-saudi-arabia-1/al-olaya-in-northern-riyadh-saudi-arabia.jpg?h=1080&iar=0&w=1920&rev=d2e99a88371242cdb30be34123fc3324&hash=4346E0D9C9C9BF9804A327F0123E52EC" alt="Saudi Arabia">
                <h3>Saudi Arabia</h3>
                <a href="saudi.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://res.cloudinary.com/enchanting/q_70,f_auto,w_960,h_640,c_fit/enchanting-web/2023/09/Enchanting-Travels-Pariks-memorable-travel-experiences-Quoc-dao-Maldives.jpg" alt="Maldives">
                <h3>Maldives</h3>
                <a href="maldives.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://avgtravels.com/au/wp-content/uploads/sites/4/1-25.jpg" alt="South Korea">
                <h3>South Korea</h3>
                <a href="korea.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://cdn.britannica.com/89/179589-138-3EE27C94/Overview-Great-Wall-of-China.jpg?w=800&h=450&c=crop" alt="China">
                <h3>China</h3>
                <a href="china.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://a.travel-assets.com/findyours-php/viewfinder/images/res70/27000/27764-Moraine-Lake.jpg" alt="Canada">
                <h3>Canada</h3>
                <a href="canada.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://cdn.britannica.com/42/126842-050-0803BC41/Sea-Point-Cape-Town-SAf.jpg" alt="Cape Town, South Africa">
                <h3>Cape Town, South Africa</h3>
                <a href="africa.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://149990825.v2.pressablecdn.com/wp-content/uploads/2023/09/Istanbul1.jpg" alt="Istanbul, Turkey">
                <h3>Istanbul, Turkey</h3>
                <a href="turkey.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://cdn.kimkim.com/files/a/images/883e09af9f01e59a34ad3af6e13203450b8d7095/original-465a6f2de6f9b6a9cea4522162f26de1.jpg" alt="Italy">
                <h3>Italy</h3>
                <a href="italy.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7VvAbFw8Mxc9f79puoChrHY9qi6r-DxN_uA&s" alt="Egypt">
                <h3>Egypt</h3>
                <a href="egypt.html">Learn More</a>
            </div>
            <div class="destination">
                <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YXVzdHJhbGlhfGVufDB8fDB8fHww" alt="Australia">
                <h3>Australia</h3>
                <a href="australia.html">Learn More</a>
            </div>
            <?php else: ?>
            <div class="destination">
                <img src="https://i.natgeofe.com/n/04505c35-858b-4e95-a1a7-d72e5418b7fc/steep-karst-cliffs-of-el-nido-in-palawan_16x9.jpg" alt="Philippines">
                <h3>Philippines</h3>
                <a href="login.php">Login to Access</a>
            </div>
            <div class="destination">
                <img src="https://cdn1.internationalsos.com/-/jssmedia/images/locations/location-saudi-desktop/al-khobar-water-tower-at-night-dammam-saudi-arabia-1/al-olaya-in-northern-riyadh-saudi-arabia.jpg?h=1080&iar=0&w=1920&rev=d2e99a88371242cdb30be34123fc3324&hash=4346E0D9C9C9BF9804A327F0123E52EC" alt="Saudi Arabia">
                <h3>Saudi Arabia</h3>
                <a href="login.php">Login to Access</a>
            </div>
            <div class="destination">
                <img src="https://res.cloudinary.com/enchanting/q_70,f_auto,w_960,h_640,c_fit/enchanting-web/2023/09/Enchanting-Travels-Pariks-memorable-travel-experiences-Quoc-dao-Maldives.jpg" alt="Maldives">
                <h3>Maldives</h3>
                <a href="login.php">Login to Access</a>
            </div>
            <div class="destination">
                <img src="https://avgtravels.com/au/wp-content/uploads/sites/4/1-25.jpg" alt="South Korea">
                <h3>South Korea</h3>
                <a href="login.php">Login to Access</a>
            </div>
            <div class="destination">
                <img src="https://cdn.kimkim.com/files/a/images/883e09af9f01e59a34ad3af6e13203450b8d7095/original-465a6f2de6f9b6a9cea4522162f26de1.jpg" alt="Italy">
                <h3>Italy</h3>
                <a href="login.php">Login to Access</a>
            </div>
            <div class="destination">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7VvAbFw8Mxc9f79puoChrHY9qi6r-DxN_uA&s" alt="Egypt">
                <h3>Egypt</h3>
                <a href="login.php">Login to Access</a>
            </div>
            <div class="destination">
                <img src="https://images.unsplash.com/photo-1523482580672-f109ba8cb9be?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8YXVzdHJhbGlhfGVufDB8fDB8fHww" alt="Australia">
                <h3>Australia</h3>
                <a href="login.php">Login to Access</a>
            </div>
            <?php endif; ?>
        </div>
        <a href="index.php" class="back-button">Back to Home</a>
    </section>
</body>
</html>

