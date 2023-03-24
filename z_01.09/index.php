<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <p>Podaj liczby, które będą wartościami tablic (oddziel liczby spacją): </p>
        <label>Tablica 1: </label>
        <input name="a" type="text" /></br>
        <label>Tablica 2: </label>
        <input name="b" type="text" /></br>
        </br>
        <input type="submit" value="Wyślij" />
        </br>
    </form>

    <p>
    <?php

        if(isset($_POST['a'], $_POST['b'])) {

            $a = explode(" ", $_POST['a']);
            $b = explode(" ", $_POST['b']);

            if(count($a) != count($b)) {
                echo "Nie można zdefiniować iloczynu skalarnego ze zbiorów o różnej wielkości. Podaj równą liczbę elementów w obu zbiorach";
            } else {
                
                $scalar = 0;
                for ($i = 0; $i < count($a); $i++) {
                $scalar += $a[$i] * $b[$i];
                }

                echo "<p>Iloczyn skalarny podanych tablic wynosi: " . $scalar . "</p>";
            }
        
        }

    ?>
    </p>


</body>
</html>