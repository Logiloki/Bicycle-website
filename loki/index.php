<?php
  session_start();
  if(!isset($_SESSION['login_status'])) {
    header ('Location:login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bicycle View</title>
    <style>
        /* Resetting some default styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Arial', sans-serif;
            font-size: 16px;
            color: #333;
            background-color: #D3D3D3; /* Grey background */
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .logo img {
            width: 150px;
            height: auto;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        nav ul li {
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }

        nav ul li a:hover {
            color: #ff4500;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .mybutton {
            background-color: black;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: grey;
            min-width: 160px;
            z-index: 1;
        }

        .dropdown-content a {
            color: white;
            padding: 12px 16px;
            display: block;
            text-decoration: none;
            transition: all 0.2s ease-in-out;
        }

        .dropdown-content a:hover {
            color: white;
            background-color: black;
            border-radius: 5px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .hero {
            background-image: url('hero-background.jpg');
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }

        .hero h1 {
            font-size: 2.5em;
            color:black;
        }
        p{
          color:black;
        }

        .about, .products {
            padding: 50px 0;
        }

        .product-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .product {
            width: 30%;
            margin: 20px;
            background-color:grey;
            padding: 20px;
            border-radius: 5px;
            box-shadow:grey;
            transition: transform 0.3s ease-in-out;
            text-align: center;
        }

        .product:hover {
            transform: scale(1.05);
        }

        .product img {
            width: 100%;
            max-height: 120px; /* Adjusted image height */
            object-fit: cover;
            border-radius: 5px;
        }

        .product h3 {
            margin-top: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logo.jpg" alt="Logo">
            </div>
            <nav>
                <ul>
                    <li class="us_name"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $_SESSION['name']; ?></li>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="order.php">Order</a></li>
                    <li class="dropdown">
                        <a href="#" class="mybutton">Products</a>
                        <div class="dropdown-content">
                            <a href="ebicycle.php">Electric Bicycles</a>
                            <a href="sportsbicycle.php">Sports Bicycles</a>
                            <a href="normalbicycle.php">Normal Bicycles</a>
                            <a href="modifybicycle.php">Modified Bicycles</a>
                        </div>
                    </li>
                    <li><a href="veiw.php">View Orders</a></li>
                    <li class="out"><a href="logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="hero">
        <div class="container">
            <h1>Welcome to Bicycle View</h1>
            <p>Check out our latest collection of beautiful and high-quality bicycles. A SELF-MADE BOND</p>
        </div>
    </div>

    

    <div class="products">
        <div class="container">
            <h2>Featured Products</h2>
            <div class="product-container">
                <div class="product">
                    <img src="ebicycle.jpg" alt="Electric Bicycle">
                    <h3>Electric Bicycle</h3>
                </div>
                <div class="product">
                    <img src="sportsbicycle.jpg" alt="Sports Bicycle">
                    <h3>Sports Bicycle</h3>
                </div>
                <div class="product">
                    <img src="normalbicycle.jpg" alt="Normal Bicycle">
                    <h3>Normal Bicycle</h3>
                </div>
                <div class="product">
                    <img src="modifybicycle.jpg" alt="Modified Bicycle">
                    <h3>Modified Bicycle</h3>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <p>&copy; 2023 Rights Reserved, Terms and Conditions</p>
        </div>
    </footer>
</body>

</html>
