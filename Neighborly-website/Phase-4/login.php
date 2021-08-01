<?php

require($_SERVER['DOCUMENT_ROOT'] . '/_includes/loader.php');

?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>
        Neighbor.ly Login
    </title>

    <link rel="stylesheet" href="_css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300|Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700;900&display=swap" rel="stylesheet"/>
</head>

<body>
    <div class="login-page">
        <img class="hero-bg" src="_images/hero-1.jpg" alt="description"/>
        <div class="header">
            <p class="title">
                <a href="index.php">Neighbor.ly</a>
            </p>
        </div>
        <div class="form">
            <form class="login-form" action="/users/" method="post">
                <input id="username" type="text" name="username" placeholder="username" pattern=".{4,12}" required title="must be 4-12 characters"/>
                <input id="password" type="password" name="password" placeholder="password" pattern=".{8,20}" required title="must be 8-20 characters"/>
                <p class="Error">LOGIN FAILED</p>

                <button type="submit" onclick="validation()">Log in</button>
                <p class="message">not registered? <a href="register.php">sign up</a></p>
            </form>

        </div>
    </div>

    <script>
        function validation() {
            _username = document.getElementById("username").value;
            _password = document.getElementById("password").value;

            var usernameformat = /^(?=[a-zA-Z0-9._]{4,12}$)(?!.*[_.]{2})[^_.].*[^_.]$/;
            var passwordformat = /^.{8,20}/
    
            if(!_username.match(usernameformat)){
                alert("You have entered an invalid username!");
                document.getElementById("username").focus();
            }
            if(!_password.match(passwordformat)){
                alert("You have entered an invalid password!");
                document.getElementById("password").focus();
            }
    
        }
    </script>

</body>

</html>