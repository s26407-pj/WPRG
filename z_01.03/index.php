<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <label>Podaj liczbę: </label></br>
        <input name="a" type="text" />
        
        <input type="submit" value="Oblicz" />
        </br>
    </form>

    <p>

    <?php

        $number = $_POST['a'];

        if($number) {
            $sqrt = sqrt($number);
            $sqrt = round($sqrt, 2);
            echo "Pierwiastek kwadratowy z liczby " . $number . " wynosi: " . $sqrt; 
        }

        //dopisać isset
        

    ?>

    </p>


</body>
</html>