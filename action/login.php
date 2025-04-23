<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Font Awesome (dernière version CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="bg-img">
        <div class="content">
            <header>Login Form</header>
            <form action="traitement_login.php">
                <div class="field">
                    <span class="fa fa-user"></span>
                    <input type="text" placeholder="Email or Phone">
                </div>
                <div class="field space">
                    <span class="fa fa-lock"></span>
                    <input type="password" placeholder="Pasword">
                </div>
                <div class="pass">
                    <a href="#">forgot Password</a>
                </div>
                <div class="field">
                    <input type="submit" value="LOGIN">
                </div>
                <div class="login">Or login with</div>
                <div class="link">
                    <div class="facebook">
                        <i class="fab fa-facebook-f"></i>
                    </div>
                    <div class="instagram">
                    <i class="fab fa-instagram"></i>
                    </div>
                </div>
                <div class="signup">Don't have account?
                    <a href="#">signup Now</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>