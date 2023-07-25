<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="dizain.css">
</head>
<body>
   <div class="conter">
    <h1>Login</h1>
    <form action="login.php" method="post">
        <div class="txt_field">
            <label for="user_name"> Username</label>
            <input type="text" id="user_name" name="user_name"  required>
        </div>
        <div class="txt_field">
            <label for="user_password">Password</label>
            <input type="password" id="user_password" name="user_pass" required>
        </div>
        <?php
        if (isset($_GET['message'])) {
            $errorMessage = $_GET['message'];
            echo "<p style='color:red;'>$errorMessage</p>";
        };
        ?>
        <div class="pass">Forget Password?</div>
            <input type="submit" value="Login">
        <div class="signup_link">
            Not a member? <a href="../registration/index.php">Sign up</a>
        </div>
        
    </form>
   </div> 
</body>
</html>