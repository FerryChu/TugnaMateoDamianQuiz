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
            background-image: url('bg/bg.gif');
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
            color: black;
            border-radius: 40px;
            background-color: transparent;
            box-shadow: transparent;
        }

        .try-again {
            text-align: center;
            margin-top: 40px;
        }

        .try-again a {
            display: inline-block;
            padding: 14px 26px;
            background: transparent;
            cursor: pointer;
            border-radius: 20px;
            box-shadow: transparent;
            font-size: 50px;
            color: white;
            text-decoration: none;
            cursor: pointer;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
        }
        h {
            color: white;
            font-size: 60px;
            background: transparent;
        }
         .animation{
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        animation: textAnimation 2s infinite alternate;
       }
          @keyframes textAnimation {
        0% {
            transform: scale(1);
       }
          100% {
          transform: scale(1.1);
      }
    }
    </style>
</head>
<body>
<div class="result-container">
    <div class="animation">
        <strong><h> ~Select Category~ </h><br><br></strong>
        
        <div class="try-again">
        <a href="EnglishQuiz.php">English</a>
    </div>
     <div class="try-again">
        <a href="FilipinoQuiz.php">Pilipino</a>
    </div>
    <div class="try-again">
        <a href="ScienceQuiz.php">Science</a>
    </div>
    <div class="try-again">
        <a href="ITEraQuiz.php">Technology</a>
    </div>
</div>
</body>
</html>
