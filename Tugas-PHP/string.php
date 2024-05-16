
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";

        $first_sentence = "Hello PHP!" ;

        echo "panjang string kalimat 1: " . strlen($first_sentence) . "<br>";
        echo "panjang kata kalimat 1: " . str_word_count($first_sentence) . "<br>";

        $second_sentence = "I'm ready for the challenges";

        echo "panjang string kalimat 2: " . strlen($second_sentence) . "<br>";
        echo "panjang kata kalimat 1: " . str_word_count($second_sentence) . "<br>";
        
        echo "<h3> Soal No 2</h3>";

        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        echo "Kata kedua: " . substr($string2, 2, 5) . "<br>" ;
        echo "Kata Ketiga: " . substr($string2, 6, 8) . "<br>";

        echo "<h3> Soal No 3 </h3>";

        $string3 = "PHP is old but sexy!";

        echo "Sebelum : " . $string3 . "<br>";
        echo "sesudah : " . str_replace("sexy!", "awesome", $string3) . "<br>";
        // OUTPUT : "PHP is old but awesome"
        ?>
</body>
</html>