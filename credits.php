<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      * {
        font-family: 'fontastique', sans-serif;
      }
      @font-face {
        font-family: 'fontastique';
        src: url('font/fontastique.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
      }
        body {
            background-image: url('bg/credits.gif');
            background-repeat: repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
            scroll-behavior: smooth;
            backface-visibility: hidden;
            transform: translate3d(0, 0, 0);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .result-container {
            font-size: 40pt;
            text-align: center;
            padding: 20px;
        }

        .try-again,
        .credits {
            text-align: center;
            margin-top: 40px;
        }

        .try-again a,
        .credits p {
            display: inline-block;
            padding: 14px 26px;
            background: transparent;
            border: transparent;
            border-radius: 15px;
            font-size: 50px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
        }
        .back-button {
            position: absolute;
            top: 10px;
            left: 10px;
            font-size: 40px;
            color: white;
            text-decoration: none;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
        }
    </style>
</head>
<body>
<a class="back-button" href="index.php">← Back</a>
<div class="credits">
    <p>Credits to:</p><br>
    <p>Students: Jessica Tugna<br>
    Ferry Mateo<br>Maezhel Damian</p><br>
    <p>Subject: Completion for Midterm Exam</p><br>
    <p>Teacher: Sir. Rumyl James Dela Cruz</p>
    <p>Special Thanks: Ayanokouj1, Dafont.com, and Pinterest</p>
</div>
</body>
</html>
