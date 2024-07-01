<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        body {
            background-color: #f0f0f0;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .regf {
            background-color: #e0e0e0;
            color: #333;
        }

        .frm {
            background-color: #f5f5f5;
            border: 2px solid #ccc;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            box-sizing: border-box;
        }

        .head {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        .sig {
            font-size: 20px;
            font-weight: bold;
            text-align: center;
            color: #333;
            margin-bottom: 15px;
        }

        .cnt a {
            display: block;
            font-size: 14px;
            font-weight: bold;
            color: #555;
            margin: 5px 0;
        }

        .ip {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .submit {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 4px;
            background-color: #3498db;
            color: #fff;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #2980b9;
        }

        .ermsg {
            padding: 10px;
            color: red;
            text-align: center;
            margin-top: 15px;
        }
    </style>
    <script defer src="formvalidate.js"></script>
    <title>Sign up</title>
</head>

<body class="regf">
    <form class="frm" id="regform" action="registration.php" method="post">
        <h2 class="head"> Create Your Account</h2>
        <div class="sig">Sign up</div><br>
        <div id="error"></div>
        <div class="cnt">
            <a>First Name</a><br>
            <input type="text" name="fname" placeholder="First name" class="ip" id="fname"><br>
            <a>Last Name</a><br>
            <input type="text" name="lname" placeholder="Last name" class="ip" id="lname"><br>
            <a>User Name</a><br>
            <input type="text" name="uname" placeholder="User name" class="ip" id="Uname"><br>
            <a>Email</a><br>
            <input type="email" name="eid" placeholder="Email" class="ip" id="email"><br>
            <a>Phone no</a><br>
            <input type="number" name="pno" placeholder="Ph.no" class="ip" id="phno"><br>
            <a>Password</a><br>
            <input type="password" name="pwrd" placeholder="Password" class="ip" id="pas"><br>
            <a>Confirm Password</a><br>
            <input type="password" name="confpwrd" placeholder="Password" class="ip" id="cnfpas"><br>
            <input type="submit" value="submit" name="end" class="submit"><br>
        </div>
    </form>
</body>

</html>
