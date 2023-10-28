<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Quiz</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .result-container {
            font-size: 55pt;
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
    </style>
</head>
<body>
<div class="result-container"><strong>
<?php
if (isset($_POST['submit'])) {
    $score = 0;

$q1_answer = $_POST['q1'];
$q2_answer = $_POST['q2'];
$q3_answer = $_POST['q3'];
$q4_answer = $_POST['q4'];
$q5_answer = $_POST['q5'];
$q6_answer = $_POST['q6'];
$q7_answer = $_POST['q7'];
$q8_answer = $_POST['q8'];
$q9_answer = $_POST['q9'];
$q10_answer = $_POST['q10'];

$score = 0;

if ($q1_answer === 'a') {
    $score++;
}
if ($q2_answer === 'b') {
    $score++;
}
if ($q3_answer === 'b') {
    $score++;
}
if ($q4_answer === 'b') {
    $score++;
}
if ($q5_answer === 'b') {
    $score++;
}
if ($q6_answer === 'c') {
    $score++;
}
if ($q7_answer === 'a') {
    $score++;
}
if ($q8_answer === 'b') {
    $score++;
}
if ($q9_answer === 'c') {
    $score++;
}
if ($q10_answer === 'a') {
    $score++;
}
    echo "Score: $score / 10";
}
?>
</strong>
<br>
<div class="try-again">
    <a href="EnglishQuiz.php">Retry</a><br>
</div>
<div class="try-again">
    <a href="category.php">Change Category</a><br>
</div>
<div class="try-again">
    <a href="credits.php">Credits</a>
</div>
</body>
</html>
