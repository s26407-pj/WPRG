<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <label>Podaj pierwszą liczbę: </label></br>
        <input name="a" type="text" /></br>

        <label>Podaj drugą liczbę: </label></br>
        <input name="b" type="text" /></br>
        
        <input type="submit" value="Oblicz" />
        </br>
    </form>

    <p>
    <?php

        if(isset($_POST['a'], $_POST['b'])) {

            $number1 = $_POST['a'];
            $number2 = $_POST['b'];

            if($number2==0) {
                echo "Druga liczba musi być różna od 0.";
            } else {
                echo "Podane liczby to: " . $number1 . " i " . $number2 . "</br>";
                echo "Wynik dodawania tych liczb to: " . $number1+$number2 . "</br>";
                echo "Wynik odejmowania tych liczb to: " . $number1-$number2 . "</br>";
                echo "Wynik mnożenia tych liczb to: " . $number1*$number2 . "</br>";
                echo "Wynik dzielenia modulo tych liczb to: " . $number1%$number2 . "</br>";
            }
        }

    ?>
    </p>


</body>
</html>