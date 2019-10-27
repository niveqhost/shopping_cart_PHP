<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/fonts/fontawesome-free-5.11.2-web/css/all.min.css">
    <style type="text/css">
        body {
            background: url('./view/images/login_bg.jpg') no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>
    <div class="login-box">
        <h1>Login</h1>
        <form action="process.php" method="POST">
            <div class="textbox">
                <i class="far fa-user"></i>
                <input type="text" placeholder="Username" name="username">
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Password" name="password">
            </div>

            <input type="submit" class="btn-login" name="login-submit" value="Sign in">
        </form>
        
    </div>
</body>

</html>
