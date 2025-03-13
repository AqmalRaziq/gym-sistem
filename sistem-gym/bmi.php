<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitLife Gym - BMI Calculator</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a1a1a, #2d2d2d);
            min-height: 100vh;
            color: white;
            padding-top: 100px;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 30px;
        }

        .nav-menu {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px;
            background: rgba(0,0,0,0.8);
            backdrop-filter: blur(10px);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
        }

        .logo {
            color: #1db954;
            font-size: 1.5em;
            font-weight: 600;
        }

        .nav-menu a {
            color: white;
            text-decoration: none;
            margin: 0 20px;
            transition: all 0.3s ease;
        }

        .nav-menu a:hover {
            color: #1db954;
            transform: translateY(-2px);
        }

        .bmi {
            background: rgba(24, 24, 24, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            width: 400px;
            animation: fadeIn 0.5s ease-out;
        }

        .bmi h1 {
            color: #1db954;
            margin-bottom: 20px;
            text-align: center;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #b3b3b3;
        }

        input {
            width: 100%;
            padding: 12px;
            background: rgba(255, 255, 255, 0.1);
            border: 2px solid transparent;
            border-radius: 8px;
            color: white;
            font-size: 1em;
            transition: all 0.3s ease;
        }

        input:focus {
            outline: none;
            border-color: #1db954;
            background: rgba(255, 255, 255, 0.15);
        }

        button {
            width: 100%;
            padding: 12px;
            background: #1db954;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        button:hover {
            background: #1ed760;
            transform: translateY(-2px);
        }

        .bmi-result {
            background: rgba(29, 185, 84, 0.1);
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            text-align: center;
            display: none;
        }

        .progress-bar {
            width: 100%;
            height: 10px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 5px;
            margin-top: 15px;
            overflow: hidden;
        }

        .progress {
            width: 0%;
            height: 100%;
            background: #1db954;
            transition: width 0.5s ease-in-out;
        }

        .workout-tips {
            background: rgba(24, 24, 24, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
            backdrop-filter: blur(10px);
            width: 300px;
            animation: fadeIn 0.5s ease-out;
        }

        .workout-tips h3 {
            color: #1db954;
            margin-bottom: 20px;
            text-align: center;
        }

        .tip-card {
            margin: 15px 0;
            padding: 15px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .tip-card:hover {
            transform: translateX(10px);
            background: rgba(29, 185, 84, 0.1);
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.02); }
            100% { transform: scale(1); }
        }

        .animate-pulse {
            animation: pulse 2s infinite;
        }
    </style>
</head>
<body>
    <div class="nav-menu">
        <div class="logo">FitLife Gym</div>
        <div>
            <a href="index.php">Home</a>
            <a href="bmi.php">BMI Calculator</a>
            <a href="result.php">Result</a>
            <a href="login.php">Logout</a>
        </div>
    </div>

    <div class="container">
        <div class="bmi">
            <h1>BMI Calculator</h1>
            <form action="result.php" method="post">
                <div class="input-group">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" id="nama" required> 
                </div>
                <div class="input-group">
                    <label for="berat">Weight (kg)</label>
                    <input type="number" name="berat" id="berat" required min="1" max="300" step="0.1">
                </div>
                <div class="input-group">
                    <label for="tinggi">Height (cm)</label>
                    <input type="number" name="tinggi" id="tinggi" required min="1" max="300">
                </div>
                <button type="submit">Calculate BMI</button>
            </form>
        </div>

        <div class="workout-tips">
            <h3>Health Tips</h3>
            <div class="tip-card">💪 Regular exercise improves your BMI</div>
            <div class="tip-card">🥗 Maintain a balanced diet</div>
            <div class="tip-card">💧 Stay hydrated throughout the day</div>
            <div class="tip-card">🛌 Get adequate sleep (7-8 hours)</div>
        </div>
    </div>
</body>
</html>