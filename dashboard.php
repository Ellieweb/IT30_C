<?php
session_start();


if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Dashboard - LibFlow</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        body {
            background-color: #fdf2f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .dashboard-card {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(186, 73, 107, 0.15);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        h1 {
            color: #832746;
            margin-bottom: 15px;
            font-size: 28px;
        }
        p {
            color: #666;
            margin-bottom: 25px;
            font-size: 16px;
        }
        .logout-btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #ba496b;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.2s;
        }
        .logout-btn:hover {
            background-color: #832746;
        }
    </style>
</head>
<body>

    <div class="dashboard-card">
        <h1>Welcome <?= htmlspecialchars($_SESSION['username']) ?>!</h1>
        <p>You have Successfully Login to your dashboard.</p>
        <a href="logout.php" class="logout-btn">Log Out</a>
    </div>

</body>
</html>