<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Science</title>
</head>
<body>

</head>
<body>
    <h1>~Science Category~</h1>
    <form method="post" action="ScienceAnswer.php">
        <div class="question">
        <h3>1: What is the chemical symbol for oxygen?</h3>
        <input type="radio" name="q1" value="a">a. O<br>
        <input type="radio" name="q1" value="b">b. Ox<br>
        <input type="radio" name="q1" value="c">c. Om<br>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
        <h3>2: Which of the following is a renewable source of energy?</h3>
        <input type="radio" name="q2" value="a">a. Coal<br>
        <input type="radio" name="q2" value="b">b. Natural Gas<br>
        <input type="radio" name="q2" value="c">c. Solar Power<br>

        <h3>3: What is the process by which plants make their food using sunlight?</h3>
        <input type="radio" name="q3" value="a">a. Resperation<br>
        <input type="radio" name="q3" value="b">b. Photosynthesis<br>
        <input type="radio" name="q3" value="c">c. Fermentation<br>

        <h3>4: What is the largest planet in out solar system?</h3>
        <input type="radio" name="q4" value="a">a. Earth<br>
        <input type="radio" name="q4" value="b">b. Mars<br>
        <input type="radio" name="q4" value="c">c. Jupiter<br>

        <h3>5: What is the chemical symbol for water?</h3>
        <input type="radio" name="q5" value="a">a. W<br>
        <input type="radio" name="q5" value="b">b. H2O<br>
        <input type="radio" name="q5" value="c">c. H<br>

        <h3>6: Which of these is a greenhouse gas?</h3>
        <input type="radio" name="q6" value="a">a. Oxygen<br>
        <input type="radio" name="q6" value="b">b. Nitrogen<br>
        <input type="radio" name="q6" value="c">c. Carbon Dioxide<br>

        <h3>7: What force pulls object towards the center of the Earth?</h3>
        <input type="radio" name="q7" value="a">a. Magnetism<br>
        <input type="radio" name="q7" value="b">b. Friction<br>
        <input type="radio" name="q7" value="c">c. Gravity<br>

        <h3>8: Which planet is known as the "Red Planet"?</h3>
        <input type="radio" name="q8" value="a">a. Venus<br>
        <input type="radio" name="q8" value="b">b. Jupiter<br>
        <input type="radio" name="q8" value="c">c. Mars<br>
        
        <h3>9: What is the unit of measurement for electrical resistance ?</h3>
        <input type="radio" name="q9" value="a">a. Volts<br>
        <input type="radio" name="q9" value="b">b. Amps<br>
        <input type="radio" name="q9" value="c">c. Ohms<br>
    
        <h3>10: Which part of the human body is responsible for pumping blood?</h3>
        <input type="radio" name="q10" value="a">a. Brains<br>
        <input type="radio" name="q10" value="b">b. Lungs<br>
        <input type="radio" name="q10" value="c">c. Hearts<br>

        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>
        <br>
        <br>
<?php
   if ($_POST["REQUEST_METHOD"] == "POST") {
    echo "<meta http-equiv='refresh' content='0; url=ScienceAnswer.php'>";
}