<?php
session_start(); // Start the session
// For testing, you can assign a fake user ID if not using login yet
$_SESSION['user_id'] = 1;

// Get all question values
$sql1 = $_POST['q1'];
$sql2 = $_POST['q2'];
$sql3 = $_POST['q3'];
$sql4 = $_POST['q4'];
$sql5 = $_POST['q5'];
$sql6 = $_POST['q6'];
$sql7 = $_POST['q7'];
$sql8 = $_POST['q8'];
$sql9 = $_POST['q9'];
$sql10 = $_POST['q10'];

// Total score calculation
$total = $sql1 + $sql2 + $sql3 + $sql4 + $sql5 + $sql6 + $sql7 + $sql8 + $sql9 + $sql10;

// Determine result
if ($total <= 10) {
  $result = "You are not suffering from Depression";
  $level = "None";
} elseif ($total <= 20) {
  $result = "You are at risk of developing Depression";
  $level = "Mild";
} elseif ($total <= 30) {
  $result = "You are likely to have Depression";
  $level = "Moderate";
} else {
  $result = "You are suffering from a severe form of Depression";
  $level = "Severe";
}

// ⬇ Connect to database
$conn = new mysqli("localhost", "root", "", "login");
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// ⬇ Insert into users table
$stmt = $conn->prepare("INSERT INTO users (user_id, category, score, level) VALUES (?, ?, ?, ?)");
$category = "Depression";
$user_id = $_SESSION['user_id'];
$stmt->bind_param("isis", $user_id, $category, $total, $level);
$stmt->execute();
$stmt->close();
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depression Assessment Result</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <head>
</head>

    <body class="bg-gradient-to-r from-blue-100 to-purple-100 font-sans-semibold">
        <center><h1><?php echo $result; ?></h1>
        <p><strong>Your score:</strong> <?php echo $total; ?></p>
        <p><strong>Level:</strong> <?php echo $level; ?></p>
        <p>Thank you for completing the assessment!</p>
    <a href="dashboard.php" class="text-blue-500 hover:underline">Go to Dashboard</a></center>
    </body>
</html>