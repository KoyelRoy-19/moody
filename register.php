<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check for duplicate email
    $checkEmail = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);
    
    if ($result->num_rows > 0) {
        echo "<script>alert('Email already has an account');window.location.href='login.php';</script>";
    } else {
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);

        // Insert user
        $sql = "INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            echo "<script>alert('Account Created!');window.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Error: " . $conn->error . "');</script>";
        }
    }
}
?>