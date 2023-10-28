<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ITEra</title>
</head>
<body>
</head>
<body>
    <h1>~Technology Category~</h1>
    <form method="post" action="ITEraAnswer.php">
        <div class="question">
        <h3>1: What "IT" stands for?</h3>
        <input type="radio" name="q1" value="a">a. Information Technology<br>
        <input type="radio" name="q1" value="b">b. International Trade<br>
        <input type="radio" name="q1" value="c">c. Intelligent Testing <br>

        <h3>2: Which of the following is a commonly used computer operating system?</h3>
        <input type="radio" name="q2" value="a">a. MacOS<br>
        <input type="radio" name="q2" value="b">b. Tesla<br>
        <input type="radio" name="q2" value="c">c. PlayStation<br>

        <h3>3: What is a computer virus?</h3>
        <input type="radio" name="q3" value="a">a. A type of software used to browse the web<br>
        <input type="radio" name="q3" value="b">b. A malicious program that can harm your computer<br>
        <input type="radio" name="q3" value="c">c. A type of computer hardware<br>

        <h3>4: Which of the following is NOT a web browser?</h3>
        <input type="radio" name="q4" value="a">a. Google Chrome<br>
        <input type="radio" name="q4" value="b">b. FireFox<br>
        <input type="radio" name="q4" value="c">c. Microsoft Word<br>

        <h3>5: What is the function of a computer's Central Processing Unit?</h3>
        <input type="radio" name="q5" value="a">a. To display images on the screen<br>
        <input type="radio" name="q5" value="b">b. To store files and documents<br>
        <input type="radio" name="q5" value="c">c. To process data and execute instructions<br>

        <h3>6: What is the purpose of an email client?</h3>
        <input type="radio" name="q6" value="a">a. To play video games<br>
        <input type="radio" name="q6" value="b">b. To send and receive emails<br>
        <input type="radio" name="q6" value="c">c. To edit photos<br>

        <h3>7: Which of the following is an example of a cloud storage service?</h3>
        <input type="radio" name="q7" value="a">a. Microsoft Excel<br>
        <input type="radio" name="q7" value="b">b. Dropbox<br>
        <input type="radio" name="q7" value="c">c. Google Search<br>

        <h3>8: what is the term for a program that protects your computer from viruses and malware?</h3>
        <input type="radio" name="q8" value="a">a. Firewall<br>
        <input type="radio" name="q8" value="b">b. Browser<br>
        <input type="radio" name="q8" value="c">c. AntiVirus<br>
        
        <h3>9: Which of the following is a social media platform?</h3>
        <input type="radio" name="q9" value="a">a. Microsoft Word<br>
        <input type="radio" name="q9" value="b">b. Instagram<br>
        <input type="radio" name="q9" value="c">c. Excel<br>
    
        <h3>10: What does URL stand for?</h3>
        <input type="radio" name="q10" value="a">a. Uniform Resource Locator<br>
        <input type="radio" name="q10" value="b">b. Universal Remote Link<br>
        <input type="radio" name="q10" value="c">c. User Requested Link<br>

        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>
        <br>
        <br>
<?php
   if ($_POST["REQUEST_METHOD"] == "POST") {
    echo "<meta http-equiv='refresh' content='0; url=ITEraAnswer.php'>";
}