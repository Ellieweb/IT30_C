<?php
session_start();
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    
    $check_sql = "SELECT id FROM users WHERE username = ? OR email = ?";
    $check_stmt = mysqli_prepare($conn, $check_sql);
    mysqli_stmt_bind_param($check_stmt, "ss", $username, $email);
    mysqli_stmt_execute($check_stmt);
    mysqli_stmt_store_result($check_stmt);

    if (mysqli_stmt_num_rows($check_stmt) > 0) {
        echo "<script>
            alert('This username already existed.');
            window.location.href = 'index.php';
        </script>";
    } else {
        
        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password);

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>
                alert('Registered Successfully! You can now login.');
                window.location.href = 'index.php';
            </script>";
        } else {
            echo "<script>
                alert('Something went Wrong: " . mysqli_error($conn) . "');
                window.location.href = 'index.php';
            </script>";
        }
    }
} else {
    header("Location: index.php");
    exit;
}
?>