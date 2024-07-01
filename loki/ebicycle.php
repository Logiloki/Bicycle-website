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
  <title>ebicycle Products</title>
  <style>
body {
  font-family: Arial, sans-serif;
  font-size: 16px;
  color: #333;
  background-color: #D3D3D3; /* Grey background */
  margin: 0;
}

header {
  background-color: #808080; /* Grey header */
  color: #fff;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 20px;
}

.logo img {
  width: 100px;
  height: auto;
}

nav ul {
  display: flex;
  list-style: none;
}

nav ul li {
  margin-left: 20px;
}

nav ul li a {
  color: #fff;
  text-decoration: none;
  transition: all 0.2s ease-in-out;
  padding: 10px;
  border-radius: 5px;
}

nav ul li a:hover {
  background-color: #696969; /* Darker grey on hover */
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #D3D3D3; /* Light grey dropdown background */
  min-width: 160px;
  z-index: 1;
}

.dropdown-content a {
  color: #808080; /* Grey text */
  padding: 12px 16px;
  display: block;
  text-decoration: none;
  transition: all 0.2s ease-in-out;
}

.dropdown-content a:hover {
  color: #fff;
  background-color: #696969; /* Darker grey on hover */
  border-radius: 5px;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.content {
  text-align: center;
  margin: 20px;
}

.content h1 {
  color: #808080; /* Grey text */
}

.products {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
}

.product {
  flex: 0 0 calc(33.33% - 20px);
  margin: 20px;
  background-color: #D3D3D3; /* Light grey product background */
  border: 1px solid #808080; /* Grey border */
  border-radius: 5px;
  padding: 20px;
  transition: all 0.2s ease-in-out;
  text-align: center;
}

.product:hover {
  box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);
}

.product img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  border-radius: 5px;
}

.product h3 {
  margin-bottom: 5px;
}

.product div {
  font-weight: bold;
  color: #808080; /* Grey text */
  margin-bottom: 5px;
}

.product a {
  background-color: #808080; /* Grey button background */
  color: #fff;
  padding: 10px;
  text-decoration: none;
  border-radius: 5px;
}

footer {
  background-color: #808080; /* Grey footer background */
  color: #fff;
  text-align: center;
  padding: 10px;
  border-top: 1px solid #D3D3D3; /* Light grey border */
}

  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="logo.jpg" alt="Logo">
    </div>
    <div><h1>BICYCLE VEIW</h1></div>
    <nav>
      <ul>
        <li class="us_name"><i class="fa fa-user-circle" aria-hidden="true"></i><?php echo $_SESSION['name']; ?></li>
        <li><a href="index.php">Home</a></li>
        <li><a href="order.php">Order</a></li>
        <li class="dropdown">
          <a href="#" class="mybutton">Products</a>
          <div class="dropdown-content">
            <a href="ebicycle.php">ebicycle</a>
            <a href="sportsbicycle.php">sports bicycle</a>
            <a href="normalbicycle.php">normal bicycle</a>
            <a href="modifybicycle.php">modify bicycle</a>
          </div>
        </li>
        <li class="out"><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
  </header>

  <div class="content">
    <h1>ebicycle Products</h1>
    <div class="products">
      <div class="product">
        <img src="ebicycle1.jpg" alt="ebicycle 1">
        <h3>ebicycle 1</h3>
        <div>Rs. 1500</div>
      </div>

      <div class="product">
        <img src="ebicycle2.jpg" alt="ebicycle 2">
        <h3>ebicycle 2</h3>
        <div>Rs. 1600</div>
      </div>

      <div class="product">
        <img src="ebicycle3.jpg" alt="ebicycle 3">
        <h3>ebicycle 3</h3>
        <div>Rs. 1450</div>
      </div>
      
      <div class="product">
        <img src="ebicycle4.jpg" alt="ebicycle 4">
        <h3>ebicycle 4</h3>
        <div>Rs. 1550</div>
      </div>

      <div class="product">
        <img src="ebicycle.jpg" alt="ebicycle 5">
        <h3>ebicycle 5</h3>
        <div>Rs. 1700</div>
      </div>
    </div>
  </div>

  <footer>
    <p>2023 Rights Reserved, Terms and Conditions</p>
  </footer>
</body>
</html>
