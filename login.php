<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./asset/css/login.css">
    <title> Login </title>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <div class="Sign-form">
                <header>
                    <h3> Welcome </h3>
                </header>
                <div class="content">
                    <form action="loginAct.php" method="POST">
                        <input type="text" name="username" id="username" placeholder="Enter your username" class="form-control">
                        <input type="password" name="password" id="password" placeholder="Enter your password" class="form-control">
                        <button type="submit" value="Sign in" class="btn" >Sign In </button>
                    </form>
                    <a href="#" class="forgot-password"> Forgot Password </a>
                </div>
                <footer>
                    <h4> Or Sign in with </h4>
                    <div class="image">
                        <a href="" class="image-footer">
                            <img src="./asset/Image/google.svg" alt="">
                        </a>
                        <a href="" class="image-footer">
                            <img src="./asset/Image/apple.svg" alt="">
                        </a>
                    </div>
                </footer>
            </div>
        </div>
        <div class="image-sidebar">
            <img src="./asset/Image/Photograph.svg" alt="" >
        </div>
    </div>
</body>
</html>