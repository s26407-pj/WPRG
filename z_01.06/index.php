<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <p>Podaj długości boków trójkąta: </p>
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

            if($a+$b>$c) {
                if($a+$c>$b) {
                    if($b+$c>$a) {
                        echo "Z podanych długości boków da się zbudować trójkąt.";
                    } else {
                        echo "Z podanych długości boków nie da się zbudować trójkąta.";
                    }
                } else {
                    echo "Z podanych długości boków nie da się zbudować trójkąta.";
                }
            } else {
                echo "Z podanych długości boków nie da się zbudować trójkąta.";
            }
        }

    ?>
    </p>


</body>
</html>