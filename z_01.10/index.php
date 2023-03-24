<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <p>Podaj liczbę: </p>
        <input name="a" type="text" /></br>
        </br>
        <input type="submit" value="Wyślij" />
        </br>
    </form>

    <p>
    <?php

        if(isset($_POST['a'])) {

            $a = $_POST['a'];

            if($a <= 0) {
                echo "Podaj liczbę większą od 0.";
            } else {

                for($i = 0; $i < $a; $i++) {
                    for($j = 0; $j <= $i; $j++) {
                        echo "*";
                    }
                    echo "</br>";
                }

                for($i = $a; $i >= 0; $i--) {
                    for($j = 0; $j < $i; $j++) {
                        echo "*";
                    }
                    echo "</br>";
                }

                for ($i = 0; $i <= $a; $i++) {
                    for ($j = 0; $j <= $i - 1; $j++) {
                      echo "&nbsp;";
                      echo "&nbsp;";
                    }
                    for ($j = $i; $j < $a; $j++) {
                      echo "*";
                    }
                    echo "</br>";
                }

                for ($i = $a; $i > 0; $i--) {
                    for ($j = 2; $j <= $i; $j++) {
                      echo "&nbsp;";
                      echo "&nbsp;";
                    }
                    for ($j = $i; $j <= $a; $j++) {
                      echo "*";
                    }
                    echo "</br>";
                  }


            }
        
        }

    ?>
    </p>


</body>
</html>