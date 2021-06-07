<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1 {
            position: relative;
            left: 250px;
        }

        form {
            position: relative;
            left: 200px;
        }
    </style>
</head>
<body>
<h1>Login</h1><br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <br>
    <h3>Usename:</h3>
    <input type="text" placeholder="Usename" name="username">
    <h3>Password:</h3>
    <input type="text" placeholder="password" name="password">
    <br>
    <br>
    <input type="submit" value="Sign in">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "admin") {
            echo "<h3>Welcome <span style='color:red'>" .$username."</span> to website</h3>";
        } else{
            echo "<h3><span style='color:red'>Login Error</span></h3>";
        }
    }
    ?>
</form>

</body>
</html>
