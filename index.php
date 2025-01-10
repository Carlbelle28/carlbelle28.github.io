<?php
session_start();
$isLoggedIn = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$username = $isLoggedIn ? $_SESSION['username'] : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel With Us</title>
    <style>
        /* General Styles */
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            color: #333;
            line-height: 1.6;
        }

        header {
            background: url('https://www.state.gov/wp-content/uploads/2019/04/Japan-2107x1406.jpg') no-repeat center center/cover;
            height: 400px;
            text-align: center;
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        header h1 {
            font-size: 4em;
            margin: 0;
            text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);
        }

        header p {
            font-size: 1.5em;
            margin-top: 10px;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
        }

        nav {
            background: #333;
            color: white;
            padding: 10px 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            font-size: 1.2em;
            transition: color 0.3s;
        }

        nav a:hover {
            color: #f4a261;
        }

        .dropdown {
            position: relative;
            display: inline-block;
            margin-left: 20px;
        }

        .dropdown button {
            background: #333;
            color: white;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 1.2em;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 10px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f4a261;
            color: white;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        section {
            padding: 40px 20px;
            text-align: center;
        }

        section h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        .cta {
            background: #f4a261;
            padding: 20px;
            color: white;
            font-size: 1.5em;
            border-radius: 5px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
            transition: background 0.3s;
        }

        .cta:hover {
            background: #e76f51;
        }

        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .feature {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .feature:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .feature img {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 10px 0;
            margin-top: 40px;
        }

        footer p {
            margin: 0;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <h1>Travel With Us</h1>
        <p>Your Adventure Begins Here</p>
    </header>

    <nav>
        <a href="about.html">About Us</a>
        <a href="destinations.php">Destinations</a>
        <?php if ($isLoggedIn): ?>
            <div class="dropdown">
                <button>Welcome, <?= htmlspecialchars($username) ?> ▼</button>
                <div class="dropdown-content">
                    <a href="change_password.php">Change Password</a>
                    <a href="logout.php">Logout</a>
                </div>
            </div>
        <?php else: ?>
            <a href="login.php">Login</a>
        <?php endif; ?>
    </nav>

    <section>
        <h2>Welcome to Travel With Us</h2>
        <p>Discover breathtaking destinations, plan your trips, and make unforgettable memories. Let us guide you to the journey of a lifetime!</p>
        <a href="destinations.php" class="cta">Explore Destinations</a>

        <div class="features">
            <div class="feature">
                <img src="https://miro.medium.com/v2/resize:fit:1400/0*0MPbB72PsMapqOGa.jpeg" alt="Destination 1">
                <h3>Explore Exotic Locations</h3>
                <p>Discover hidden gems and iconic landmarks from all over the world.</p>
            </div>
            <div class="feature">
                <img src="https://farandawayadventures.com/wp-content/uploads/2024/12/dbbcd71bthumbnail.jpeg" alt="Destination 2">
                <h3>Plan Your Journey</h3>
                <p>Use our tools to create a customized travel itinerary tailored to your needs.</p>
            </div>
            <div class="feature">
                <img src="https://www.junglexperiences.com/wp-content/uploads/2024/05/las-malvinas.png" alt="Destination 3">
                <h3>Travel Tips & Guides</h3>
                <p>Get expert advice and insider tips to make your trips stress-free and enjoyable.</p>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Travel With Us. All rights reserved.</p>
    </footer>
</body>
</html>
