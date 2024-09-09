<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"> <!--for our icons-->
    <title>Register & Login</title>
</head>
<body>
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <div class="fas fa-user" id="icon"></div> <!--Icon-->
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
            </div>
            <div class="input-group">
                <div class="fas fa-user" id="icon"></div>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            </div>
            <div class="input-group">
                <div class="fas fa-envelope" id="icon"></div>
                <input type="email" name="email" id="email" placeholder="E-Mail" required>
            </div>
            <div class="input-group">
                <div class="fas fa-lock" id="icon"></div>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signup">
        </form>
        <p class="or">
            -----------or-----------
        </p>
        <div class="icons">
            <div class="fab fa-google" id="gmailFacebookIcons"></div>
            <div class="fab fa-facebook"id="gmailFacebookIcons"></div>
        </div>
        <div class="links">
            <p>Already have Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>
    <div class="container" id="signin">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <div class="fas fa-envelope" id="icon"></div>
                <input type="email" name="email" id="email" placeholder="E-Mail" required>
            </div>
            <div class="input-group">
                <div class="fas fa-lock" id="icon"></div>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="recover">
                <a href="#">Recover Password</a>
            </div>
            <input type="submit" class="btn" value="Sign In" name="signin">
        </form>
        <p class="or">
            -----------or-----------
        </p>
        <div class="icons">
            <div class="fab fa-google" id="gmailFacebookIcons"></div>
            <div class="fab fa-facebook" id="gmailFacebookIcons"></div>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>