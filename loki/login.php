<?php
  session_start();
  if(isset($_SESSION['login_status']) && $_SESSION['login_status']==true)
  {
    header('Location:index.php');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .frm {
            background-color: #ddd;
            border: 1px solid #999;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
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
            border: 1px solid #999;
            border-radius: 4px;
        }

        .submit {
            width: 100%;
            padding: 10px;
            margin-top: 15px;
            border: none;
            border-radius: 4px;
            background-color: #666;
            color: #fff;
            cursor: pointer;
        }

        .submit:hover {
            background-color: #333;
        }

        .ermsg {
            padding: 10px;
            color: red;
            text-align: center;
            margin-top: 15px;
        }
    </style>
    <title>Login</title>
</head>

<body>
    <form class="frm" id="LogFrm">
        <h2 class="head">Welcome User</h2>
        <div class="sig">Login</div>
        <div class="cnt">
            <a>User Name</a>
            <input type="text" name="uname" placeholder="User name" class="ip" id="uname">
            <a>Email</a>
            <input type="email" name="eid" placeholder="Email" class="ip" id="eid">
            <a>Password</a>
            <input type="password" name="pwrd" placeholder="Password" class="ip" id="pwrd">
            <a>Want to sign up?</a> <a href="reg.php">Sign up here</a>
            <input type="submit" value="Submit" name="end" class="submit">
        </div>
        <div id="errmsg" class="ermsg"></div>
    </form>
    <script type="text/javascript">
        document.getElementById('LogFrm').addEventListener('submit', function(event) {
            event.preventDefault();
            var username = document.getElementById('uname').value;
            var email = document.getElementById('eid').value;
            var password = document.getElementById('pwrd').value;
            console.log(email);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'verify.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4) {
                    if (xhr.status === 200) {
                        var res = xhr.responseText;
                        var sess = console.log(res);
                        if (res === 'valid') {
                            window.location.href = 'index.php';
                        } else {
                            document.getElementById('errmsg').innerHTML = 'Username or password is not valid.';
                        }
                    } else {
                        document.getElementById('errmsg').innerHTML = 'An error occurred while processing your request.';
                    }
                }
            };

            var data = 'username=' + encodeURIComponent(username) + '&email=' + encodeURIComponent(email) + '&password=' + encodeURIComponent(password);
            xhr.send(data);
        });
    </script>
</body>

</html>
