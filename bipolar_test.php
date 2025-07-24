<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Mental Health Assessment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-gray-100 p-8 font-sans">
  <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-6">Mental Health Assessment</h2>
    <form action="process2.php" method="post" class="space-y-6">
      
      <!-- Question 1 -->
      <div>
        <p class="font-medium mb-2">1. Periods of Feeling unusually happy or irritable?</p>
        <label><input type="radio" name="q1" value="1" required> Rarely</label><br>
        <label><input type="radio" name="q1" value="2"> Sometimes</label><br>
        <label><input type="radio" name="q1" value="3"> Often</label><br>
        <label><input type="radio" name="q1" value="4"> Always</label>
      </div>

      <!-- Question 2 -->
      <div>
        <p class="font-medium mb-2">2. Racing thoughts or rapid speech?</p>
        <label><input type="radio" name="q2" value="1" required> Rarely</label><br>
        <label><input type="radio" name="q2" value="2"> Sometimes</label><br>
        <label><input type="radio" name="q2" value="3"> Often</label><br>
        <label><input type="radio" name="q2" value="4"> Always</label>
      </div>

      <!-- Question 3 -->
      <div>
        <p class="font-medium mb-2">3. Engaging in risky behaviors during manic episodes?</p>
        <label><input type="radio" name="q3" value="1" required> Rarely</label><br>
        <label><input type="radio" name="q3" value="2"> Sometimes</label><br>
        <label><input type="radio" name="q3" value="3"> Often</label><br>
        <label><input type="radio" name="q3" value="4"> Always</label>
      </div>
       <!-- Question 4 -->
      <div>
        <p class="font-medium mb-2">4. Feeling very energetic with little sleep?</p>
        <label><input type="radio" name="q4" value="1" required> Rarely</label><br>
        <label><input type="radio" name="q4" value="2"> Sometimes</label><br>
        <label><input type="radio" name="q4" value="3"> Often</label><br>
        <label><input type="radio" name="q4" value="4"> Always</label>
      </div>
       <!-- Question 5 -->
      <div>
        <p class="font-medium mb-2">5. Irritability or frustration during mood swings?</p>
        <label><input type="radio" name="q5" value="1" required> Rarely</label><br>
        <label><input type="radio" name="q5" value="2"> Sometimes</label><br>
        <label><input type="radio" name="q5" value="3"> Often</label><br>
        <label><input type="radio" name="q5" value="4"> Always</label>
      </div>
        <!-- Question 6 -->
        <div>
            <p class="font-medium mb-2">6. Loss of interest during low moods?</p>
            <label><input type="radio" name="q6" value="1" required> Rarely</label><br>
            <label><input type="radio" name="q6" value="2"> Sometimes</label><br>
            <label><input type="radio" name="q6" value="3"> Often</label><br>
            <label><input type="radio" name="q6" value="4"> Always</label>
          </div>
        <!-- Question 7 -->
        <div>
            <p class="font-medium mb-2">7. Racing thoughts or difficulty concentrating?</p>
            <label><input type="radio" name="q7" value="1" required> Rarely</label><br>
            <label><input type="radio" name="q7" value="2"> Sometimes</label><br>
            <label><input type="radio" name="q7" value="3"> Often</label><br>
            <label><input type="radio" name="q7" value="4"> Always</label>
          </div>
        <!-- Question 8 -->
        <div>
            <p class="font-medium mb-2">8. Sudden changes in appetite or sleep patterns?</p>
            <label><input type="radio" name="q8" value="1" required> Rarely</label><br>
            <label><input type="radio" name="q8" value="2"> Sometimes</label><br>
            <label><input type="radio" name="q8" value="3"> Often</label><br>
            <label><input type="radio" name="q8" value="4"> Always</label>
          </div>
        <!-- Question 9 -->
        <div>
            <p class="font-medium mb-2">9. Thoughts of self-harm or suicide?</p>
            <label><input type="radio" name="q9" value="1" required> Rarely</label><br>
            <label><input type="radio" name="q9" value="2"> Sometimes</label><br>
            <label><input type="radio" name="q9" value="3"> Often</label><br>
            <label><input type="radio" name="q9" value="4"> Always</label>
          </div>
        <!-- Question 10 -->
        <div>
            <p class="font-medium mb-2">10. Increased goal-directed activities or physical restlessness?</p>
            <label><input type="radio" name="q10" value="1" required> Rarely</label><br>
            <label><input type="radio" name="q10" value="2"> Sometimes</label><br>
            <label><input type="radio" name="q10" value="3"> Often</label><br>
            <label><input type="radio" name="q10" value="4"> Always</label>
          </div>

      <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
    </form>
  </div>
</body>
</html>