<?php
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];

    $contact = mysqli_connect('localhost', 'root', 'root', 'users_database');

    $stmt = $contact->prepare("SELECT * FROM users_info WHERE user_name = ? AND user_password = ?;");
    $stmt->bind_param("ss", $user_name, $user_pass);
    $stmt->execute();
    
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Login successful
        echo "Login successful!";
        header("location: ../registration/JPSite/index.php?message=". urldecode($user_name));
    } else {
        // Invalid username or password
        $errorMessage = "Invalid username or password";
        header("location:index.php?message=". urlencode($errorMessage));
    }

    $contact->close();
?>