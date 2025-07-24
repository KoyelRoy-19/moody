<?php
session_start();
$conn = new mysqli("localhost", "root", "", "login");

$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM users WHERE user_id = $user_id ORDER BY created_at DESC");

//echo "<h2>Your Reports</h2>";
while ($row = $result->fetch_assoc()) {
  //echo "<div style='margin-bottom: 10px;'>";
  //echo "<strong>{$row['category']}</strong>: {$row['level']} ({$row['score']} points) on {$row['created_at']}";
  //echo "</div>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessment Result</title>
      <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 font-sans">
    <div class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-4 text-center">Your Assessment Results</h2>
        <p class="text-lg text-gray-700 mb-4">Here are your assessment results:</p>
        <div class="space-y-4">
            <?php
            // Display the results from the database
            $result = $conn->query("SELECT * FROM users WHERE user_id = $user_id ORDER BY created_at DESC");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='p-4 bg-gray-50 rounded-lg shadow-sm'>";
                echo "<strong>{$row['category']}</strong>: {$row['level']} ({$row['score']} points) on {$row['created_at']}";
                echo "</div>";
            }
            ?>
        </div>
    </div>
</body>
</html>