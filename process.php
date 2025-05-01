<?php
$conn = mysqli_connect("your_host", "your_username", "your_password", "modern_login_page");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Register User
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
    mysqli_query($conn, $sql);
}

// Login User
if (isset($_POST['login'])) {
    $loginEmail = $_POST['loginEmail'];
    $loginPassword = $_POST['loginPassword'];

    $sql = "SELECT * FROM users WHERE email='$loginEmail'";
    $result = mysqli_query($conn, $sql);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($loginPassword, $row['password'])) {
            echo "Login successful!";
        } else {
            echo "Invalid password!";
        }
    } else {
        echo "User not found!";
    }
}

mysqli_close($conn);
?>
