<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="./library/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="img">
            <img src="image/svg/side.svg" alt="">
        </div>
        <div class="login-container">
            <form action="./library/php/user.php" method="post">
                <img src="image/svg/avatar.svg" alt="" class="avatar">
                <h2>Welcome</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-signature"></i>
                    </div>
                    <div>
                        <h5>First Name</h5>
                        <input name="first_name" type="text" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-signature"></i>
                    </div>
                    <div>
                        <h5>Last Name</h5>
                        <input name="last_name" type="text" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h5>Email</h5>
                        <input name="email" type="email" class="input" required>
                    </div>
                </div>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-birthday-cake"></i>
                    </div>
                    <div>
                        <h5>Birth Date</h5>
                        <input name="birth-date" id="date-picker" type="date" class="input" required>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div>
                        <h5>Username</h5>
                        <input name="username" type="text" class="input" required>
                    </div>
                </div>
                <div class="input-div two">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div>
                        <h5>Password</h5>
                        <input name="password" type="password" class="input" required>
                    </div>
                </div>
                <a href="../login">Already Have Account?</a>
                <input type="submit" class="btn" value="Signup" window.location.href = "http://www.w3schools.com";>
            </form>
        </div>
    </div>

    <script src="library/js/function.js"></script>
</body>
</html>