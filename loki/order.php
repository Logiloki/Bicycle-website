<?php
    session_start();
    if (!isset($_SESSION['login_status'])) {
        header('Location: login.php');
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "order";

    $conn = mysqli_connect($host, $username, $password, $db_name);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM tab1";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <style>
body {
    font-family: Arial, sans-serif;
    background-color: #ccc; /* Set the background color to grey */
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

header {
    background-color: #555; /* Darker grey for the header */
    color: #fff;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    width: 100%;
}

h1 {
    font-size: 24px;
    margin-top: 10px;
}

nav {
    display: flex;
    justify-content: flex-end;
    align-items: center;
    background-color: #555; /* Darker grey for the navigation bar */
    padding: 10px;
    width: 100%;
}

nav ul {
    list-style: none;
    display: flex;
    align-items: center;
    padding: 0;
    margin: 0;
}

nav ul li {
    margin: 0 15px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
}

nav ul li a:hover {
    color: #ddd; /* Lighter grey on hover */
}

.logo img {
    width: 150px;
    height: auto;
}

.order {
    background-color: #eee; /* Light grey for the order form background */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 30%;
    margin-top: 20px;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin-top: 15px;
    color: #555; /* Dark grey for labels */
}

input,
select {
    padding: 8px;
    margin-top: 8px;
    margin-bottom: 15px;
    border: 1px solid #999; /* Medium grey for input borders */
    border-radius: 4px;
    width: 100%;
    font-size: 14px;
}

button {
    background-color: #555; /* Dark grey for the button */
    color: #fff;
    padding: 12px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
}

button:hover {
    background-color: #333; /* Even darker grey on hover */
}


    </style>

    <script>
        function validateForm() {
            var name = document.getElementById('name').value;
            var email = document.getElementById('email').value;
            var sportsbicycle = document.getElementById('sportsbicycle').value;
            var normalbicycle = document.getElementById('normalbicycle').value;
            var ebicycle = document.getElementById('ebicycle').value;
            var modifybicycle = document.getElementById('modifybicycle').value;

            if (name === "" || email === "" || sportsbicycle === "" || normalbicycle === "" || ebicycle === "" || modifybicycle === "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo.jpg" alt="Logo">
        </div>
        <div><h1>BICYCLE VEIW</h1></div>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="veiw.php">View Orders</a></li>
        </ul>
    </nav>
    
    <div class="order">
        <h2>Order your bicycle</h2>
        <form action="ord.php" method="post" onsubmit="return validateForm()">
            <label for="name">Name:</label>
            <input type="text" id="name" name="user">

            <label for="email">Email:</label>
            <input type="email" id="email" name="eid">

            <label for="sportsbicycle">sportsbicycle</label>
            <select id="sportsbicycle" name="sb">
                <option value="none">none</option>
                <option value="sportsbiycle1">sportsbicycle1</option>
                <option value="sportsbicycle2">sportsbicycle2</option>
                <option value="sportsbicycle3">sportsbicycle3</option>
                <option value="sportsbicycle4">sportsbicycle4</option>
                <option value="sportsbicycle5">sportsbicycle5</option>
            </select>

            <label for="normalbicycle">normalbicycle</label>
            <select id="normalbicycle" name="nb">
                <option value="none">none</option>
                <option value="normalbicycle1">normalbicycle1</option>
                <option value="normalbicycle2">normalbicycle2</option>
                <option value="normalbicycle3">normalbicycle3</option>
                <option value="normalbicycle4">normalbicycle4</option>
                <option value="normalbicycle5">normalbicycle5</option>
            </select>

            <label for="ebicycle">ebicycle</label>
            <select id="ebicycle" name="eb">
                <option value="none">none</option>
                <option value="ebicycle1">ebicycle1</option>
                <option value="ebicycle2">ebicycle2</option>
                <option value="ebicycle3">ebicycle3</option>
                <option value="ebicycle4">ebicycle4</option>
                <option value="ebicycle5">ebicycle5</option>
            </select>

            <label for="modifybicycle">modifybicycle</label>
            <select id="modifybicycle" name="mb">
                <option value="none">none</option>
                <option value="modifybicycle1">modifybicycle1</option>
                <option value="modifybicycle2">modifybicycle2</option>
                <option value="modifybicycle3">modifybicycle3</option>
                <option value="modifybicycle4">modifybicycle4</option>
                <option value="modifybicycle5">modifybicycle5</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
