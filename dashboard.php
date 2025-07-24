
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Mental Health Diagnostic</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="dashboard.css" />
</head>
<body class="bg-gradient-to-r from-blue-100 to-purple-100 font-sans">
<audio autoplay loop>
  <source src="audio.mp3" type="audio/mpeg">
  </audio>

  <!-- Header -->
  <header class="bg-white shadow-md p-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-blue-700">Moody</h1>
    <nav class="space-x-8 text-gray-600 font-medium">
      <a href="#">Home</a>
      <a href="assesment.php">Assessments</a>
      <a href="result.php">Reports</a>
    </nav>
  </header>

  <!-- Main Layout -->
  <main class="p-8">
    <!-- Diagnostic Images -->
    <section>
        <h2 class="text-2xl font-bold mb-2">Mental Health Diagnostic</h2>
        <div class="grid grid-cols-5 gap-10">
            <div class="bg-[#A0BADB] shadow p-4 rounded-lg flex items-center gap-4">
                <div class=" depression">
                        <a href="depression.php"><img src="depression.jpg" height="200" width="400"></a>
                        <span>Depression</span>
                </div>
                </div>
                <div class="bg-[#D7CCF5] shadow p-4 rounded-lg flex items-center gap-4">
                <div class="anxiety">
                        <a href="anxiety.php"><img src="anxiety1.jpg" height="200" width="300"></a>
                        <span>Anxiety</span>
                </div>
                </div>
                <div class="bg-[#F2D0D6] shadow p-4 rounded-lg flex items-center gap-4">
                        <div class="bipolar">
                       <a href="bipolar.php"><img src="bipolar.jpg" height="800" width="400"></a>
                        <span>bipolar disorder</span>
                </div> 
                </div>
                <div class="bg-[#C7F19D] shadow p-4 rounded-lg flex items-center gap-4">
                        <div class="PTSD">
                        <a href="PTSD.php"><img src="PTSD.jpg" height="800" width="400"></a>
                        <span>Post Traumatic Stress Disorder</span>
                </div> 
                </div>
                  <div class="bg-[#E8D08A] shadow p-4 rounded-lg flex items-center gap-4">
                        <div class="Eating Disorder">
                        <a href="eating.php"><img src="eating.jpg" height="800" width="400"></a>
                        <span>Eating Disorder</span>
                </div> 
                </div>

        </div>
    </section>
      
      
      <!-- Recommendations -->
      <section>
        <h3 class="text-xl font-semibold mb-4">Recommendations</h3>
        <div class="grid grid-cols-1 gap-4">
          <div class="bg-white shadow p-4 rounded-lg flex items-center gap-4">
            <div class="bg-blue-100 p-3 rounded-full text-blue-600">👥</div>
            <span>Engage in social activities</span>
          </div>
          <div class="bg-white shadow p-4 rounded-lg flex items-center gap-4">
            <div class="bg-purple-100 p-3 rounded-full text-purple-600">🧠</div>
            <span>Challenge negative thinking</span>
          </div>
          <div class="bg-white shadow p-4 rounded-lg flex items-center gap-4">
            <div class="bg-green-100 p-3 rounded-full text-green-600">📋</div>
            <span>Consider professional therapy</span>
          </div>
        </div>
      </section>
    </div>
  </main>
</body>
</html>