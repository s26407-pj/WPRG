<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <p>KALKULATOR</p>
        <p>Podaj 2 liczby oraz wybierz działanie</p>
        <label>A: </label>
        <input name="a" type="text" /></br>
        <label>B: </label>
        <input name="b" type="text" /></br>
        <p>Działanie: </p>
        <label><input type="radio" name="operation" value="0" checked> Dodaj +</label></br>
        <label><input type="radio" name="operation" value="1"> Odejmij -</label></br>
        <label><input type="radio" name="operation" value="2"> Pomnóż *</label></br>
        <label><input type="radio" name="operation" value="3"> Podziel /</label></br>
        </br>
        <input type="submit" value="Wyślij" />
        </br>
    </form>

    <p>
    <?php

        if(isset($_POST['a'], $_POST['b'], $_POST['operation'])) {

            $a = $_POST['a'];
            $b = $_POST['b'];
            $operation = $_POST['operation'];

            if($a == null | $b == null) {
                echo "Podaj obie liczby.";
            } else {

                switch ($operation) {
                    case 0:
                        echo "Dodawanie:</br>";
                        echo $a . " + " . $b . " = " . $a+$b;
                        break;
                    case 1:
                        echo "Odejmowanie:</br>";
                        echo $a . " - " . $b . " = " . $a-$b;
                        break;
                    case 2:
                        echo "Mnożenie:</br>";
                        echo $a . " * " . $b . " = " . $a*$b;
                        break;
                    case 3:
                        echo "Dzielenie:</br>";
                        echo $a . " / " . $b . " = " . $a/$b;
                        break;
                }

            }
        
        }

    ?>
    </p>


</body>
</html>