<?php
    session_start();
    if (!isset($_SESSION['login_status'])) {
        header('Location: login.php');
    }

    $host = "localhost";
    $username = "root";
    $password = "";
    $db_name = "order_bicycle";

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
    <title>Order Details</title>
    <style>
body {
    font-family: Arial, sans-serif;
    font-size: 16px;
    color: #333;
    background-color: #ccc; /* Set the background color to grey */
    margin: 0;
    padding: 0;
}

header {
    background-color: #555; /* Darker grey for the header */
    color: #fff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

h2 {
    text-align: center;
    color: #555; /* Dark grey for the heading */
}

nav ul {
    display: flex;
    list-style: none;
    justify-content: center;
    align-items: center;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    transition: all 0.2s ease-in-out;
}

nav ul li a:hover {
    color: #ccc; /* Light grey on hover */
    background-color: #555;
    border-radius: 5px;
}

.logo img {
    width: 150px;
    height: auto;
}

table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #555; /* Dark grey for table header */
    color: #fff;
}

tr:nth-child(even) {
    background-color: #ccc; /* Light grey for even rows */
}

tr:hover {
    background-color: #ddd; /* Lighter grey on hover */
}

footer {
    background-color: #555; /* Darker grey for the footer */
    color: #fff;
    text-align: center;
    padding: 10px;
    border-top: 1px solid #333;
    position: absolute;
    bottom: 0;
    width: 100%;
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
                <li><a href="veiw.php">View Orders</a></li>
            </ul>
        </nav>
    </header>

    <h2>Order Details</h2>

    <?php
    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr><th>Name</th><th>Email</th><th>sportsbicycle</th><th>normalbicycle</th><th>modifybicycle</th><th>ebicycle</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['sportsbiycle'] . "</td>";
            echo "<td>" . $row['normalbicyle'] . "</td>";
            echo "<td>" . $row['modifybicyle'] . "</td>";
            echo "<td>" . $row['ebicycle'] . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "0 results";
    }

    mysqli_close($conn);
    ?>

    <footer>
        <p>2023 Rights Reserved, Terms and Conditions</p>
    </footer>
</body>
</html>
