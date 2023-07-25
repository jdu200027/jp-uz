<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="dizain.css">
</head>
<body>
     <div class="container">
        <div class="title">SIGN UP</div>
        <form action="send.php" method="post">
            <div class="user-details">
                
                <div class="input-box">
                    <span class="details">Full Name</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>

                <div class="input-box">
                    <span class="details">Username</span>
                    <input type="text" id="user_name" placeholder="Enter your Username" name="user_name" required>
                </div>

                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Enter your email" name="user_email" required>
                </div>

                <div class="input-box">
                    <span class="details">Phone Number</span>
                    <input type="number" name="user_number" placeholder="Enter your number" required>
                </div>

                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="password" id="pass" placeholder="Enter your Password" name="user_pass" required>
                </div>

                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="password" placeholder="Confirm your  Password" name="user_pass_2" id="pass_2" required>
                </div>
            </div>
            <div class="error-class">
                <?php
                    if(isset($_GET['message'])){
                        $error_message = $_GET['message'];
                        print $error_message;
                    }
                ?>
            </div>
            <div class="gender-details">
                <input type="radio" name="gender" id="dot-1">
                <input type="radio" name="gender" id="dot-2">
                <input type="radio" name="gender" id="dot-3">
                <span class="gender-title">Gender</span>
                <div class="category">
                    <label for="dot-1">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="dot-2">
                        <span class="dot two"></span>
                        <span class="gender">Female</span>
                    </label>
                    <label for="dot-3">
                        <span class="dot three"></span>
                        <span class="gender">Prefer not to say</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" id="submit" value="Register">
            </div>
            
            <div class="login-div">
                <a href="../login/index.php"><i>Sign in</i></a>
            </div>
        </form>
     </div>

     <script src="register.js"></script>
</body>
</html>