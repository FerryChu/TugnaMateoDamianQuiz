<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>English</title>
</head>
<body>
    <h1>~English Category~</h1>
    <form method="post" action="EnglishAnswer.php">
        <div class="question">
        <h3>1: What is the synonym for "generous"?</h3>
        
        <input type="radio" name="q1" value="a">a. Kind<br>
        <input type="radio" name="q1" value="b">b. Miserly<br>
        <input type="radio" name="q1" value="c">c. Greedy<br>

        <h3>2: What is the plural form of cactus?</h3>
        <input type="radio" name="q2" value="a">a. Cactuss<br>
        <input type="radio" name="q2" value="b">b. Cacti<br>
        <input type="radio" name="q2" value="c">c. Cactuses<br>

        <h3>3:Identify the type of noun in the sentence: "The cat sat on the windowsill" </h3>
        <input type="radio" name="q3" value="a">a. Proper noun<br>
        <input type="radio" name="q3" value="b">b. Common noun<br>
        <input type="radio" name="q3" value="c">c. Abstract noun<br>

        <h3>4: What is the opposite of "joy"?</h3>
        <input type="radio" name="q4" value="a">a. Happiness<br>
        <input type="radio" name="q4" value="b">b. Sorrow<br>
        <input type="radio" name="q4" value="c">c. Excitement<br>

        <h3>5: Choose the correct sentence:</h3>
        <input type="radio" name="q5" value="a">a. Their going to the park.<br>
        <input type="radio" name="q5" value="b">b. They're going to the park.<br>
        <input type="radio" name="q5" value="c">c. There going to the park.<br>

        <h3>6: Which of the following is an adverb in the sentence: "She sings beautifully."</h3>
        <input type="radio" name="q6" value="a">a. She<br>
        <input type="radio" name="q6" value="b">b. Sings<br>
        <input type="radio" name="q6" value="c">c. Beautifully<br>

        <h3>7: What is the atonym of "brave"?</h3>
        <input type="radio" name="q7" value="a">a. Cowardly<br>
        <input type="radio" name="q7" value="b">b. Fearly<br>
        <input type="radio" name="q7" value="c">c. Timid<br>

        <h3>8: In the sentence "He ran quickly," what is the verb?</h3>
        <input type="radio" name="q8" value="a">a. He<br>
        <input type="radio" name="q8" value="b">b. Ran<br>
        <input type="radio" name="q8" value="c">c. Quickly<br>
        
        <h3>9: What is the plural of "child"?</h3>
        <input type="radio" name="q9" value="a">a. Childs<br>
        <input type="radio" name="q9" value="b">b. Childen<br>
        <input type="radio" name="q9" value="c">c. Children<br>
    
        <h3>10: Identify the simile in the sentence: "Her smile was as bright as the sun"</h3>
        <input type="radio" name="q10" value="a">a. Her smile<br>
        <input type="radio" name="q10" value="b">b. Bright as the sun<br>
        <input type="radio" name="q10" value="c">c. Sun<br>

        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>
        <br>
        <br>
<?php
   if ($_POST["REQUEST_METHOD"] == "POST") {
    echo "<meta http-equiv='refresh' content='0; url=EnglishAnswer.php'>";
}