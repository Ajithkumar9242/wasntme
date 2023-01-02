<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="main-container">
        <div class="left">
            <div class="wrapper">
                <div class="container">
                    <h1>Welcome</h1>
                    
                    <form action="auth.php" method="post">
        <input type="text" id="user" name="username" placeholder="Username" />
        <input type="password" id ="pass" name="password" placeholder="Password" />
        <button type="submit" id="login-button" value="Login">Login</button>
        </form>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="img-wrap">
                <div class="img-cont">
            <img src="" alt="" srcset="" class="image">
        </div>
        </div>
        </div>
    </div>
    <script src="app.js"></script>
</body>
</html>