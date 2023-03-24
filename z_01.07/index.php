<!DOCTYPE html >
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>

<body>

    <form action="index.php" method="post">
        <p>Podaj liczbę z zakresu od 1 do 12: </p>
        <input name="a" type="text" /></br>
        </br>
        <input type="submit" value="Wyślij" />
        </br>
    </form>

    <p>
    <?php

        if(isset($_POST['a'])) {

            $a = $_POST['a'];

            if($a>0 && $a<=12) {
                switch ($a) {
                    case 1:
                        echo "Styczeń - 31 dni";
                        break;
                    case 2:
                        echo "Luty - 28 dni";
                        break;
                    case 3:
                        echo "Marzec - 31 dni";
                        break;
                    case 4:
                        echo "Kwiecień - 30 dni";
                        break;
                    case 5:
                        echo "Maj - 31 dni";
                        break;
                    case 6:
                        echo "Czerwiec - 30 dni";
                        break;
                    case 7:
                        echo "Lipiec - 31 dni";
                        break;
                    case 8:
                        echo "Sierpień - 31 dni";
                        break;
                    case 9:
                        echo "Wrzesień - 30 dni";
                        break;
                    case 10:
                        echo "Październik - 31 dni";
                        break;
                    case 11:
                        echo "Listopad - 30 dni";
                        break;
                    case 12:
                        echo "Grudzień - 31 dni";
                        break;
                }
            } else {
                echo "Podałeś liczbę spoza zakresu. Spróbuj jeszcze raz.";
            }
        }

    ?>
    </p>


</body>
</html>