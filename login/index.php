<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="./library/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="image/svg/side.svg" alt="">
        </div>
        <div class="login-container">
            <form action="auth.php" method="post">
                <img src="image/svg/avatar.svg" alt="" class="avatar">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input type="text" name="username" class="input">
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input type="password" name="password" class="input">
                    </div>
                </div>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
            
            <span id="signup">or<a href="../signup"> Create an account?</a></span>
        </div>
        
    </div>
   
    <script src="library/js/function.js"></script>
</body>
</html>