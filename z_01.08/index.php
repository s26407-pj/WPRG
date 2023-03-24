<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <p>Podaj 3 liczby: </p>
        <label>A: </label>
        <input name="a" type="text" /></br>
        <label>B: </label>
        <input name="b" type="text" /></br>
        <label>C: </label>
        <input name="c" type="text" /></br>
        </br>
        <input type="submit" value="Wyślij" />
        </br>
    </form>

    <p>
    <?php

        if(isset($_POST['a'], $_POST['b'], $_POST['c'])) {

            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            //szukanie najmniejszej
            if($a <= $b && $a <= $c) {
                $min = $a;
            } elseif($b <= $a && $b <= $c) {
                $min = $b;
            } else {
                $min = $c;
            }

            //szukanie największej
            if ($a >= $b && $a >= $c) {
                $max = $a;
            } elseif ($b >= $a && $b >= $c) {
                $max = $b;
            } else {
                $max = $c;
            }

            echo "Liczby w kolejności od najmniejszej do największej: " . $min . ", ";
            if ($min == $a) {
                if ($b <= $c) {
                    echo $b . ", ";
                    echo $c . "</br>";
                } else {
                    echo $c . ", ";
                    echo $b . "</br>";
                }
            } elseif ($min == $b) {
                if ($a <= $c) {
                    echo $a . ", ";
                    echo $c . "</br>";
                } else {
                    echo $c . ", ";
                    echo $a . "</br>";
                }
            } else {
                if ($a <= $b) {
                    echo $a . ", ";
                    echo $b . "</br>";
                } else {
                    echo $b . ", ";
                    echo $a . "</br>";
                }
            }

            echo "Liczby w kolejności od największej do najmniejszej: " . $max . ", ";
            if ($max == $a) {
                if ($b >= $c) {
                    echo $b . ", ";
                    echo $c . "</br>";
                } else {
                    echo $c . ", ";
                    echo $b . "</br>";
                }
            } elseif ($max == $b) {
                if ($a >= $c) {
                    echo $a . ", ";
                    echo $c . "</br>";
                } else {
                    echo $c . ", ";
                    echo $a . "</br>";
                }
            } else {
                if ($a >= $b) {
                    echo $a . ", ";
                    echo $b . "</br>";
                } else {
                    echo $b . ", ";
                    echo $a . "</br>";
                }
            }
            
        }

    ?>
    </p>


</body>
</html>