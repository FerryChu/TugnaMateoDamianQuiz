<!DOCTYPE  html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Filipino</title>
</head>
<body>
</head>
<body>
    <h1>~Pilipino Category~</h1>
    <form method="post" action="FilipinoAnswer.php">
        <div class="question">
        <h3>1: Ano ang tawag sa kapanahunan ng pag ulan sa Pilipinas?</h3>
        <input type="radio" name="q1" value="a">a. Tag-araw<br>
        <input type="radio" name="q1" value="b">b. Tag-lamig<br>
        <input type="radio" name="q1" value="c">c. Tag-ulan<br>

        <h3>2: Ano ang tawag sa tradisyonal ng kasuotan ng mga lalaki sa Pilipinas?</h3>
        <input type="radio" name="q2" value="a">a. Baro't Saya<br>
        <input type="radio" name="q2" value="b">b. Terno<br>
        <input type="radio" name="q2" value="c">c. Barong Tagalog<br>

        <h3>3: Aling salitang Filipino ang tumutukoy sa "bahay"?</h3>
        <input type="radio" name="q3" value="a">a. Bahay<br>
        <input type="radio" name="q3" value="b">b. Tahanan<br>
        <input type="radio" name="q3" value="c">c. Casa<br>

        <h3>4: Ano ang tawag sa malaking okasyon o pagtitipon sa pamilya sa Pilipinas?</h3>
        <input type="radio" name="q4" value="a">a. Fiesta<br>
        <input type="radio" name="q4" value="b">b. Binyag<br>
        <input type="radio" name="q4" value="c">c. Paligsahan<br>

        <h3>5: Anong simbolo ng Pilipinas ang makikita sa bandila nito?</h3>
        <input type="radio" name="q5" value="a">a. Kalabaw<br>
        <input type="radio" name="q5" value="b">b. Puno ng niyog<br>
        <input type="radio" name="q5" value="c">c. Bituin at araw<br>

        <h3>6: Sino ang pambansang bayani ng Pilipinas na kilala sa tawag na "Ama ng Katipunan?</h3>
        <input type="radio" name="q6" value="a">a. Andres Bonifacio<br>
        <input type="radio" name="q6" value="b">b. Jose Rizal<br>
        <input type="radio" name="q6" value="c">c. Emilio Aguinaldo<br>

        <h3>7: Ano ang tawag sa pampasaherong sasakyan sa Pilipinas?</h3>
        <input type="radio" name="q7" value="a">a. Barko<br>
        <input type="radio" name="q7" value="b">b. Eroplano <br>
        <input type="radio" name="q7" value="c">c. Jeepney<br>

        <h3>8: Anong uri ng puno ang madalas gamiting pampaligo sa mga ilog o bukal sa Pilipinas?</h3>
        <input type="radio" name="q8" value="a">a. Acacia<br>
        <input type="radio" name="q8" value="b">b. Narra<br>
        <input type="radio" name="q8" value="c">c. Banaba<br>
        
        <h3>9: Ano ang tawag sa tradisyonal na Filipino na handa o handog na pagkain sa kaarawan?</h3>
        <input type="radio" name="q9" value="a">a. Lechon<br>
        <input type="radio" name="q9" value="b">b. Puto<br>
        <input type="radio" name="q9" value="c">c. Adobo<br>
    
        <h3>10: Sino ang sumulat ng "Noli Me Tangere" at El Filibusterismo?</h3>
        <input type="radio" name="q10" value="a">a. Andres Bonifacio<br>
        <input type="radio" name="q10" value="b">b. Lapu-Lapu<br>
        <input type="radio" name="q10" value="c">c. Jose Rizal<br>

        <br>
        <input type="submit" name="submit" value="Submit">
        <br>
        <br>
        <br>
        <br>
<?php
   if ($_POST["REQUEST_METHOD"] == "POST") {

    echo "<meta http-equiv='refresh' content='0; url=FilipinoAnswer.php'>";
}